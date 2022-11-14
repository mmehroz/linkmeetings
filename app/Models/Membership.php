<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membership extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'membership';

    public function users()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }

    public function package()
    {
        return $this->hasOne('App\Models\Package', 'id','package_id');
    }

}
