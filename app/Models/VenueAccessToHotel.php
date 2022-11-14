<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VenueAccessToHotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venue_access_to_hotels';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function venueAccess()
    {
        return $this->hasOne('App\Models\VenueAccess','id','hotel_id');
    }

}
