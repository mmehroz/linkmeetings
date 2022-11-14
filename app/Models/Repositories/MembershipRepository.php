<?php
namespace App\Models\Repositories;

use App\Models\Membership;
use Session;

class MembershipRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public $model;

    public function __construct(Membership $Membership) {
        $this->model            =   $Membership;
    }

    public function add($data, $user_id = 0)
    {
        $package_id         =   session::get('package_id');
        $type               =   strtolower(session::get('type'));
        if (isset($data->user_add_by_admin)) {
            $oneYearOff     = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 1 year"));
            $startdate      = date('Y-m-d h:i:s');
            $expirydatedate = $oneYearOff.date(' h:i:s');
        }else{
            $startdate      = $data->start;
            $expirydatedate = $data->expiry;
        }
        if( $package_id > 0 ) {
            $insert                             =   new $this->model;
            $insert->user_id                    =   $user_id;
            $insert->package_id                 =   ($package_id) ? $package_id : '';
            $insert->stripe_subscription_id     =   ($data->stripe_subscription_id) ?  $data->stripe_subscription_id : '';
            $insert->quantity                   =   ($data->quantity) ? $data->quantity : '';
            $insert->paid                       =   ($data->paid) ? $data->paid : '';
            $insert->type                       =   ($type) ? $type : '';
            $insert->invoice                    =   rand(1000,9999);
            $insert->payment_id                 =   ($data->payment_id) ? $data->payment_id : 0;
            $insert->bank_draft_description     =   ($data->bank_draft_description) ? $data->bank_draft_description : 0;
            $insert->payment_type               =   $data->payment_type;
            $insert->start                      =   $startdate;
            $insert->expiry                     =   $expirydatedate;
            $insert->save();
        }
    }
    public function updatebankdraftdates($id)
    {
            // dd($id);
            $oneYearOff     = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 1 year"));
            $startdate      = date('Y-m-d h:i:s');
            $expirydatedate = $oneYearOff.date(' h:i:s');
            $insert                     = $this->model::where('user_id',$id)->first();
            $insert->start              = $startdate;
            $insert->expiry             = $expirydatedate;
            $insert->save();
    }

}
