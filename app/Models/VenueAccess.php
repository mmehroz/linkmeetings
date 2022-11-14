<?php
namespace App\Models;

use App\Models\VenueAccessToHotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VenueAccess extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venue_access';

    public function venuAccessDescription()
    {
        return $this->hasMany('App\Models\VenueAccessDescription','venue_access_id','id');
    }

    public function venuAccessToHotels()
    {
        return $this->hasMany('App\Models\VenueAccessToHotel','venue_access_id','id');
    }

    public function venuAccessDescriptionLanguage($language_id)
    {
        $description = VenueAccessDescription::where('venue_access_id',$this->id)->where('language_id',$language_id)->first();

        if( !empty($description)) {
            return $description;
        } else {
            return VenueAccessDescription::where('venue_access_id',$this->id)->where('language_id',1)->first();
        }
    }
}
