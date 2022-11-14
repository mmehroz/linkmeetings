<?php
namespace App\Models\Repositories;
use App\User;
use App\Models\Languages;
use Illuminate\Support\Facades\Crypt;
use Activation;
use Sentinel;
use Session;

class CustomerRepository extends AbstractRepository
{
    public $model;
    protected $table = 'users';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        User $user
    ) {
        $this->model                = $user;
    }
    public function add($data)
    {
        $role = Sentinel::findRoleBySlug("customer");
        $user = Sentinel::registerAndActivate($data->all());
        $userid = $user->id;
        // $userpassword = Crypt::encryptString($data->password);
        if ($data->image) {
        $imageName = time().'.'.$data->image->extension();
        $folderName      = '/uploads/customers'. $userid;
        $destinationPath = public_path() . $folderName;
        $data->image->move($destinationPath, $imageName);
        }else{
        $imageName = "";
        }
        // dd($userpassword);
        $insert                     = $this->model::where('id',$user->id)->first();
        $insert->first_name         = $data->firstname;
        $insert->last_name          = $data->lastname;
        // $insert->account_type       = "customer";
        // $insert->email              = $data->email;
        $insert->phone_number       = $data->phonenumber;
        $insert->cell_number        = $data->cellnumber;
        $insert->address            = $data->address;
        $insert->city               = $data->city;
        $insert->state              = $data->state;
        $insert->zip_code           = $data->zip;
        $insert->company_name       = $data->companyname;
        $insert->position           = $data->possition;
        $insert->company_address    = $data->companyaddress;
        $insert->company_city       = $data->companycity;
        $insert->company_state      = $data->companystate;
        $insert->company_zip_code   = $data->companyzip;
        $insert->username           = $data->username;
        // $insert->password           = $userpassword;
        $insert->userimage          = $imageName;
        $insert->save();
        $id                         = $insert->id;
        $user->roles()->attach($role);
        return $user;
    }
    public function update($data)
    {
        $userpassword = $data->password;
        // $user = Sentinel::getUser();
        $user =  Sentinel::findByCredentials(array('email'=>$data->email));
        $userid = $user->id;
        Sentinel::update($user, array('password' => $userpassword));
        // $userpassword = Crypt::encryptString($data->password);
        $email = $data->email;
        if ($data->image) {
        $imageName = time().'.'.$data->image->extension();
        $folderName      = '/uploads/customers'. $userid;
        $destinationPath = public_path() . $folderName;
        $data->image->move($destinationPath, $imageName);
        }else{
        $imageName = "";
        }
        // dd($email);
        $insert                     = $this->model::where('email',$email)->first();
        $insert->first_name         = $data->firstname;
        $insert->last_name          = $data->lastname;
        // $insert->account_type       = "customer";
        // $insert->email              = $data->email;
        $insert->phone_number       = $data->phonenumber;
        $insert->cell_number        = $data->cellnumber;
        $insert->address            = $data->address;
        $insert->city               = $data->city;
        $insert->state              = $data->state;
        $insert->zip_code           = $data->zip;
        $insert->company_name       = $data->companyname;
        $insert->position           = $data->possition;
        $insert->company_address    = $data->companyaddress;
        $insert->company_city       = $data->companycity;
        $insert->company_state      = $data->companystate;
        $insert->company_zip_code   = $data->companyzip;
        // $insert->username           = $data->username;
        // $insert->password           = $userpassword;
        $insert->userimage          = $imageName;
        $insert->save();
        $id                         = $insert->id;
        return $id;
    }
}
