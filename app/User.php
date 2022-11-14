<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Membership;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function HotelsLimit()
    {
        return Membership::where('user_id',$this->id)->where('type','hotel')->where('expiry','<',date('Y-m-d H:i:s'))->sum('quantity');
    }

    public function DMCLimit()
    {
        return Membership::where('user_id',$this->id)->where('type','dmc')->where('expiry','<',date('Y-m-d H:i:s'))->sum('quantity');
    }

    public function Memberships()
    {
        return $this->hasMany('App\Models\Membership','user_id','id');
    }

    public function Hotels()
    {
        return $this->hasMany('App\Models\Hotel','created_by','id');
    }

    public function Dmc()
    {
        return $this->hasMany('App\Models\DMC','created_by','id');
    }
}
