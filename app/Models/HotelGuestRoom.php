<?php
namespace App\Models;

use App\Models\HotelGuestRoomDetailDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelGuestRoom extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_guest_rooms';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function guestRoomDetails()
    {
        return $this->hasMany('App\Models\HotelGuestRoomDetail','hotel_guest_room_id','id');
    }  

    public function guestRoomFacilities()
    {
        return $this->hasMany('App\Models\RoomFacilityDescription','room_facility_id','id');
    } 

    public function guestRoomDescriptionLanguage($language_id)
    {
        return $description = HotelGuestRoomDetailDescription::where('hotel_guest_room_detail_id',$this->id)->where('language_id',$language_id)->first();
    }
}
