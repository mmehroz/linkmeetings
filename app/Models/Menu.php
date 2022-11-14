<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu';

    // public function MenuDescription(){

    //    return $this->hasMany('App\Models\MenuDescription','menu_id','id');
    // }
}
