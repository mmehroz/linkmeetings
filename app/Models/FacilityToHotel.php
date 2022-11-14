<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacilityToHotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities_to_hotels';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function facility()
    {
        return $this->hasOne('App\Models\Facility', 'id','facility_id');
    }
}
