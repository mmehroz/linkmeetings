<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRoomDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_rooms_description';

    public function hotelRoom()
    {
        return $this->hasOne('App\Models\HotelRoom', 'id','hotel_room_id');
    }
}
