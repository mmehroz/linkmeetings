<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'packages';

//     public function MenuDescription(){
//
//        return $this->hasMany('App\Models\MenuDescription','menu_id','id');
//     }
}
