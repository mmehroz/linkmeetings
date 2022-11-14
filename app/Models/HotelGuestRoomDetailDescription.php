<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelGuestRoomDetailDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_guest_room_details_description';

    public function guestRoomDetail()
    {
        return $this->hasOne('App\Models\Facility', 'id','hotel_guest_room_detail_id');
    }
}
