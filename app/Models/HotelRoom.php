<?php
namespace App\Models;

use App\Models\HotelRoomDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRoom extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_rooms';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function hotelRoomDescription()
    {
        return $this->hasMany('App\Models\HotelRoomDescription','hotel_room_id','id');
    }


}
