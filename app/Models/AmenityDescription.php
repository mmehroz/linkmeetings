<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AmenityDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'amenities_description';

    public function amenity()
    {
        return $this->hasOne('App\Models\Amenity', 'id','amenity_id');
    }
}
