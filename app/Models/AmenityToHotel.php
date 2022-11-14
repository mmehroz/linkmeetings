<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AmenityToHotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'amenities_to_hotels';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function amenity()
    {
        return $this->hasOne('App\Models\Amenity', 'id','amenity_id');
    }
}
