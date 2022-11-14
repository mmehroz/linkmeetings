<?php
namespace App\Models;

use App\Models\RoomFacilityDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomFacility extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guest_room_facilities';

    public function roomFacilityDescription()
    {
        return $this->hasMany('App\Models\RoomFacilityDescription','room_facility_id','id');
    }

    public function roomFacilityDescriptionLanguage($language_id)
    {
        $description = RoomFacilityDescription::where('room_facility_id',$this->id)->where('language_id',$language_id)->first();
        if( !empty($description)) {
            return $description;
        } else {
            return RoomFacilityDescription::where('room_facility_id',$this->id)->where('language_id',1)->first();;
        }
    }
}
