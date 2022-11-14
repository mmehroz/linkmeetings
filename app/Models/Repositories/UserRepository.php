<?php
namespace App\Models\Repositories;

use App\Models\Repositories\RfpRepository;
use App\Models\Repositories\MembershipRepository;
use App\Models\Repositories\PackageRepository;
use App\Models\Languages;
use App\User;
use App\Models\Membership;
use Activation;
use Sentinel;
use Session;
use Stripe;

// use Helpers;

class UserRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public $model;
    protected $table = 'users';
    protected $Membership;
    protected $Rfp;
    protected $package_repo;


    public function __construct(User $user, MembershipRepository $Membership, RfpRepository $Rfp, PackageRepository $package_repo)
    {
        $this->model = $user;
        $this->Membership = $Membership;
        $this->Rfp = $Rfp;
        $this->package_repo = $package_repo;
    }

    public function add($data)
    {
        $package_id = session::get('package_id') ?? 0;
        $type = session::get('type') ? strtolower(session::get('type')) : 'customer';
        $data['account_type'] = $type;

        $role = Sentinel::findRoleBySlug($type);

        /*
        //test code
        $package = $this->package_repo->getPackageById($package_id ?? 0);
        $data['paid'] = (int)$package->price * (int)$data->quantity ?? 0;
        $response = $this->postPayment($data,$package);

        print_b( $response );
        exit;

        //test code ends
        */


        if ($data->payment_type == 'bank_draft')
            $user = Sentinel::register($data->all(), false);
        elseif($type == 'customer')
            $user = Sentinel::registerAndActivate($data->all());


        if ($type != 'customer' && ($data->payment_type == 'stripe' || $data->payment_type == 'free')) {
            $package = $this->package_repo->getPackageById($package_id ?? 0);
            $data['list_'] = $data->quantity ?? 0;
            $data['send_newsletter'] = $data->send_newsletter ?? '';
            $data['paid'] = (int)$package->price * (int)$data->quantity ?? 0;
            $data['auto_renewal']           = 0;

            // if ($data->account_type == 'hotel')
            //     $data['number_hotels'] = $data->quantity ?? '';
            // else
            //     $data['number_dmc'] = $data->quantity ?? '';

            if ($data->payment_type != 'free')
            {
                $response = $this->postPayment($data,$package);

                if($response->status == 'failed')
                    return $response;
                else
                {
                    $data['stripe_subscription_id'] = $response->id;
                    $data['stripe_user_id']         = $response->customer;
                    $data['start']                  = date('Y-m-d H:i:s',$response->current_period_start);
                    $data['expiry']                 = date('Y-m-d H:i:s',$response->current_period_end);
                    $data['auto_renewal']           = 1;
                }
            }

            $user = Sentinel::registerAndActivate($data->all());

            $data['payment_id'] = $response->id ?? 0;

            if( $type == 'hotel' )
                $this->Rfp->add($data, $user->id);

            $this->Membership->add($data, $user->id);
        } elseif ($type != 'customer' && $data->payment_type == 'bank_draft') {
            $package = $this->package_repo->getPackageById($package_id ?? 0);
            // if ($data->account_type == 'hotel')
            //     $data['number_hotels'] = $data->quantity ?? '';
            // else
            //     $data['number_dmc'] = $data->quantity ?? '';
            $data['send_newsletter'] = $data->send_newsletter ?? '';
            $data['paid'] = (int)$package->price * (int)$data->quantity ?? 0;

            if( $type == 'hotel' )
                $this->Rfp->add($data, $user->id);

            // $data['number_hotels'] = $data->quantity ?? '';
            $this->Membership->add($data, $user->id);
        }

        $affectedRows = $this->userUpdate($data, $user->id);
        $user->roles()->attach($role);
        return $user;
    }

     public function AdminUsers($data)
    {
        $package_id = session::get('package_id') ?? 0;
        $type = session::get('type') ? strtolower(session::get('type')) : 'customer';
        $data['account_type'] = $type;

        $role = Sentinel::findRoleBySlug($type);
        $user = Sentinel::registerAndActivate($data->all());

        if ($type != 'customer' && ($data->payment_type == 'stripe' || $data->payment_type == 'free')) {
            $package = $this->package_repo->getPackageById($package_id ?? 0);
            $data['quantity'] = $data->quantity ?? 0;
            $data['send_newsletter'] = $data->send_newsletter ?? '';
            $data['paid'] = (int)$package->price * (int)$data->quantity ?? 0;
            // $data['number_hotels'] = $data->quantity ?? '';
            $data['payment_id'] = $response->id ?? 0;
            // $this->Rfp->add($data, $user->id);
            $this->Membership->add($data, $user->id);
        }

        $affectedRows = $this->userUpdate($data, $user->id);
        $user->roles()->attach($role);
        return $user;
    }

    public function postPayment($request,$package)
    {
        $result = $this->stripePost($request,$package);
        return $result;
        /*if (!empty($result) && $result->status == 'success') {
            return $result;
        }*/
    }

    public function stripePost($request,$package)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET')); //set stripe key

        $return_data        = array();
        $result_data        = array();
        $stripe_product_id  = '';
        $stripe_price_id    = '';
        $stripe_customer_id = '';
        $stripe_card_id     = '';
        $amount             = (int)$request->paid;
        $quantity           = $amount/$package->price;

        //create customer on stripe for recurring payments
        $customer = $this->model::where('email',$request->email)->first();

        if($customer && $customer->stripe_user_id)
        {
            $stripe_customer_id = $customer->stripe_user_id;
        }
        else
        {
            try {
                $customer = \Stripe\Customer::create([
                    'email' => $request->email,
                    'card' => $request->stripeToken
                    /*'payment_method' => 'pm_1FWS6ZClCIKljWvsVCvkdyWg',
                    'invoice_settings' => [
                        'default_payment_method' => 'pm_1FWS6ZClCIKljWvsVCvkdyWg',
                    ],*/
                ]);
                $stripe_customer_id = $customer->id;
            }catch (Stripe\Exception\ApiErrorException $e) {

                $result_data = array(
                    'status'    =>  'failed',
                    'message'   =>  $e->getMessage()
                );

                $result_data = (object) $result_data;
            }

            if( isset($result_data->status) && $result_data->status == 'failed' )
                return $result_data;


            if($customer)
                $this->model::where('email',$request->email)->update(['stripe_user_id'=>$stripe_customer_id]);
        }

        //create product and set price of product on stripe for recurring payments
        if($package->stripe_product_id)
        {
            $stripe_product_id  = $package->stripe_product_id;
            $stripe_price_id    = $package->stripe_price_id;
        }
        else
        {
            //create product
            try{
                $stipre_product = Stripe\Product::create([
                    'name' => $package->type . ' - ' . $package->title,
                    'type' => 'service',
                ]);
            }catch (Stripe\Exception\ApiErrorException $e) {

                $result_data = array(
                    'status'    =>  'failed',
                    'message'   =>  $e->getMessage()
                );

                $result_data = (object) $result_data;
            }

            if( isset($result_data->status) && $result_data->status == 'failed' )
                return $result_data;

            $stripe_product_id = $stipre_product->id;

            //set product price
            try{
                $set_product_price = Stripe\Price::create([
                    'nickname' => $package->title,
                    'product' => $stripe_product_id,
                    'unit_amount' => 100 * $package->price ?? 0,
                    'currency' => 'usd',
                    'recurring' => [
                        'interval' => 'year',
                        'usage_type' => 'licensed',
                    ],
                ]);
            }catch (Stripe\Exception\ApiErrorException $e) {

                $result_data = array(
                    'status'    =>  'failed',
                    'message'   =>  $e->getMessage()
                );

                $result_data = (object) $result_data;
            }

            if( isset($result_data->status) && $result_data->status == 'failed' )
                return $result_data;

            $this->package_repo->model::where('id',$package->package_id)->update([
                'stripe_product_id' =>  $stipre_product->id,
                'stripe_price_id'   =>  $set_product_price->id,
            ]);

            $stripe_price_id    = $set_product_price->id;
        }

        try {

            //create subscription
            $result = Stripe\Subscription::create([
                'customer' => $stripe_customer_id,
                'items' => [
                    [
                        'price' => $stripe_price_id,
                        'quantity' => $quantity,
                    ],
                ],
            ]);

            /*
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET')); //set stripe key

            $result = Stripe\Charge::create([
                "amount" => 100 * $amount ?? 0,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment for posting an auction."
            ]);
            */

            Session::flash('success', 'Payment successful!');
        //} catch (Stripe\Error\Card $e) {
        } catch (Stripe\Exception\ApiErrorException $e) {

            $result_data = array(
                'status'    =>  'failed',
                'message'   =>  $e->getMessage()
            );

            $result_data = (object) $result_data;
        }

        if( isset($result_data->status) && $result_data->status == 'failed' )
            return $result_data;
        else
            return $result;
    }

    public function getAllUsers()
    {

        $language = getlanguage();
        $users = $this->model::
        join('membership', 'membership.user_id', '=', 'users.id')->
        join('packages_description', 'membership.package_id', '=', 'packages_description.package_id')->
        where('packages_description.language_id', $language->id)->
        select('users.*', 'packages_description.title', 'membership.invoice')->
        get();

        return $users;
    }

    public function remove($id)
    {
        $delete = $this->model::where('id', $id)->delete();

        if ($delete)
            return TRUE;
        else
            return FALSE;
    }

    public function update($data, $id)
    {

        $update = $this->model::where('id', $id)->first();
        $update->company_name = $data->company_name ?? '';
        $update->email = $data->email ?? '';
        $update->phone_number = $data->phone_number ?? '';
//            $update->username    = $data->username ?? '';
        $update->account_type = $data->account_type ?? '';
        $update->save();

    }

    public function userUpdate($data, $user_id)
    {
        $update = Sentinel::findById($user_id);
        if($update->first_name == '' && $update->last_name == '')
        {
            $update->first_name = $data->main_contact_person;
        } else {
            $update->first_name = $data->main_contact_person;
        }

        if( $data->password && !empty($update)) {
            $crd['password'] = $data->password;
            Sentinel::update($update, $crd);
        }

        $update->email              =   $data->email ?? '';
        $update->send_newsletter    =   $data->send_newsletter ?? '';
        $update->account_type = $data->account_type ?? '';
        $update->ein_fiscal_reg_number = $data->ein_fiscal_reg_number ?? '';
        $update->commercial_name    =   $data->commercial_name ?? '';
        // if ($data->account_type == 'hotel')
            // $update->number_hotels = $data->quantity ?? '';
        // if ($data->account_type == 'dmc')
            // $update->number_dmc     =   $data->quantity ?? '';
        $update->company_zip_code   =   $data->company_zip_code ?? '';
        $update->company_city       =   $data->company_city ?? '';
        $update->company_address    =   $data->company_address ?? '';
        $update->company_state      =   $data->company_state ?? '';
        $update->position           =   $data->position ?? '';
        $update->company_name       =   $data->company_name ?? '';
        $update->zip_code           =   $data->zip_code ?? '';
        $update->state              =   $data->state ?? '';
        $update->city               =   $data->city ?? '';
        $update->address            =   $data->address ?? '';
        $update->cell_number        =   $data->cell_number ?? '';
        $update->phone_number       =   $data->phone_number ?? '';
        $update->username           =   $data->username ?? '';
        $update->stripe_user_id     =   $data->stripe_user_id ?? '';
        $update->auto_renewal       =   $data->auto_renewal;
        $update->save();
    }

    public function getpaymentdetails()
    {

        $language = getlanguage();
        $users = $this->model::
        join('membership', 'membership.user_id', '=', 'users.id')
            ->join('packages_description', 'membership.package_id', '=', 'packages_description.package_id')
            ->where('packages_description.language_id', $language->id)
            ->select('users.*', 'packages_description.*', 'membership.*')
            ->get();

        return $users;
    }

    public function getpaymentinvoicedetails($id)
    {

        $language = getlanguage();
        $users = $this->model::
        join('membership', 'membership.user_id', '=', 'users.id')
            ->join('packages_description', 'membership.package_id', '=', 'packages_description.package_id')
            ->where('packages_description.language_id', $language->id)
            ->where('membership.id', $id)
            ->select('users.*', 'packages_description.*', 'membership.*')
            ->first();


        return $users;
    }

    public function ban_UnbanUser($id, $type)
    { echo $id;
        $user = getUserByID($id);
        if ($type == 'ban') {
            return Activation::remove($user);
        } else {
            $checkuserpaymenttype = $this->model::
            join('membership', 'membership.user_id', '=', 'users.id')
            ->where('membership.user_id', $id)
            ->select('membership.*')
            ->first();
            // dd($checkuserpaymenttype);
        if ($checkuserpaymenttype->payment_type == "bank_draft" && $checkuserpaymenttype->start == null && $checkuserpaymenttype->expiry == null) {
          $this->Membership->updatebankdraftdates($id);
        }
            $ActivateUser = Activation::create($user);
            return Activation::complete($user, $ActivateUser->code);
        }
    }
	public function checkuserexist($useremail)
    {
		$dbuserinfo = $this->model::where('email', $useremail)->first();
		return $dbuserinfo;

    }
	public function updatedmchotelusers($data)
    {
        $userid = $data->hdnuserid;
        $getuserinfo = Sentinel::findById($userid);
        $userpassword = $data->password;
        Sentinel::update($getuserinfo, array('password' => $userpassword));
        if ($data->image) {
        $imageName = time().'.'.$data->image->extension();
        $folderName      = '/uploads/accountsetting'. $userid;
        $destinationPath = public_path() . $folderName;
        $data->image->move($destinationPath, $imageName);
        }else{
        $imageName = "";
        }
        // dd($email);
        $insert                     = $this->model::where('id',$userid)->first();
        $insert->first_name         = $data->firstname;
        $insert->last_name          = $data->lastname;
        $insert->phone_number       = $data->phonenumber;
        $insert->cell_number        = $data->cellnumber;
        $insert->address            = $data->address;
        $insert->city               = $data->city;
        $insert->state              = $data->state;
        $insert->zip_code           = $data->zip;
        $insert->company_name       = $data->companyname;
        $insert->position           = $data->possition;
        $insert->userimage          = $imageName;
        $insert->save();
        $id                         = $insert->id;
        return $id;
    }
}
