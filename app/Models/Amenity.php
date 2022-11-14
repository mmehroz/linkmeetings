<?php
namespace App\Models;
use App\Models\AmenityDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amenity extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'amenities';

    public function amenityDescription()
    {
        return $this->hasMany('App\Models\AmenityDescription','amenity_id','id');
    }

    public function amenityToHotels()
    {
        return $this->hasMany('App\Models\AmenityToHotel','amenity_id','id');
    } 
    public function amenityDescriptionLanguage($language_id)
    {
        $description = AmenityDescription::where('amenity_id',$this->id)->where('language_id',$language_id)->first();    
        if( !empty($description)) {
            return $description;
        } else {
            return AmenityDescription::where('amenity_id',$this->id)->where('language_id',1)->first();
        }
    }
}
