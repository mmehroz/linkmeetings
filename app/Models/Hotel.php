<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\HotelGallery;

class Hotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotels';

    public function HotelDescription()
    {
        return $this->hasMany('App\Models\HotelDescription','hotel_id','id');
    }

    public function AmenityToHotels()
    {
        return $this->hasMany('App\Models\AmenityToHotel','hotel_id','id');
    }

    public function FacilityToHotels()
    {
        return $this->hasMany('App\Models\FacilityToHotel','hotel_id','id');
    }

    public function ServiceToHotels()
    {
        return $this->hasMany('App\Models\ServiceToHotel','hotel_id','id');
    }

    public function RecreationalActivityToHotels()
    {
        return $this->hasMany('App\Models\RecreationalActivityToHotel','hotel_id','id');
    }

    public function VenueAccessToHotels()
    {
        return $this->hasMany('App\Models\VenueAccessToHotel','hotel_id','id');
    }

    public function EquipmentToHotels()
    {
        return $this->hasMany('App\Models\EquipmentToHotel','hotel_id','id');
    }

    public function MeetingSpaceFloorPlans()
    {
        return $this->hasMany('App\Models\MeetingSpaceFloorPlan','hotel_id','id');
    }

    public function HotelRooms()
    {
        return $this->hasMany('App\Models\HotelRoom','hotel_id','id');
    }

    public function HotelGuestRooms()
    {
        return $this->hasOne('App\Models\HotelGuestRoom', 'hotel_id','id');
    }

    public function ResturantsBars()
    {
        return $this->hasMany('App\Models\ResturantBar','hotel_id','id');
    }

    public function NearByPlaces()
    {
        return $this->hasMany('App\Models\NearByPlace','hotel_id','id');
    }

    public function HotelsGallery()
    {
        return $this->hasMany('App\Models\HotelGallery','hotel_id','id');
    }

    public function TagsToHotels()
    {
        return $this->hasMany('App\Models\TagToHotel','hotel_id','id');
    }

    public function DMCToHotels()
    {
        return $this->hasMany('App\Models\TagToHotel','hotel_id','id');
    }

    /*public function UsersToHotels()
    {
        return $this->hasMany('App\Models\TagToHotel','hotel_id','id');
    }*/

    /*
    public function HotelDescription()
    {
        return $this->hasOne('App\Models\UsersSecurityQuestions', 'id','security_question_id');
    }
    */

    public function getPrimaryImage()
    {
        if($primary_image = HotelGallery::where('hotel_id',$this->id)->where('is_primary',1)->first())
        {
            return $primary_image->file;
        }
        elseif( $secondary_image = HotelGallery::where('hotel_id',$this->id)->first() )
        {
            return $secondary_image->file;
        }
        else
        {
            return FALSE;
        }
    }

    public function getAdminPrimaryImage()
    {
        if($primary_image = HotelGallery::where('hotel_id',$this->id)->where('is_primary',1)->first())
        {
            return $primary_image->file;
        }
        else
        {
            return FALSE;
        }
    }
}
