<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResturantBarDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resturant_bar_description';

    public function resturantBar()
    {
        return $this->hasOne('App\Models\ResturantBar', 'id','resturant_bar_id');
    }
}
