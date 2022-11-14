<?php
namespace App\Models;

use App\Models\HotelGuestRoomDetailDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomFacilityDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guest_room_facilities_description';

    public function roomFacility()
    {
        return $this->hasOne('App\Models\RoomFacility','id','room_facility_id');
    }

    public function hotelGuestRoomDetailDescriptionsLanguage($language_id)
    {
        return $description = HotelGuestRoomDetailDescription::where('room_facility_id',$this->id)->where('language_id',$language_id)->first();
    }
}
