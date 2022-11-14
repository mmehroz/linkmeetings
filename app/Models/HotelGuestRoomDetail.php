<?php
namespace App\Models;

use App\Models\HotelGuestRoomDetailDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelGuestRoomDetail extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_guest_room_details';

    public function guestRoom()
    {
        return $this->hasOne('App\Models\GuestRoom', 'id','hotel_guest_room_id');
    }

    public function guestRoomDetailDescription()
    {
        return $this->hasMany('App\Models\HotelGuestRoomDetailDescription','hotel_guest_room_detail_id','id');
    }

    public function guestRoomFacilitiesToHotel()
    {
        return $this->hasMany('App\Models\RoomFacilityToHotel','guest_room_id','id');
    }

    public function guestRoomDescriptionLanguage($language_id)
    {
        $description = HotelGuestRoomDetailDescription::where('hotel_guest_room_detail_id',$this->id)->where('language_id',$language_id)->first();
        if( !empty($description)) {
            return $description;
        } else {
            return HotelGuestRoomDetailDescription::where('hotel_guest_room_detail_id',$this->id)->where('language_id',1)->first();
        }
    }
}
