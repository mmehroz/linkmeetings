<?php
namespace App\Models;

use App\Models\FacilityDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities';

    public function facilityDescription()
    {
        return $this->hasMany('App\Models\FacilityDescription','facility_id','id');
    }

    public function facilityToHotels()
    {
        return $this->hasMany('App\Models\FacilityToHotel','facility_id','id');
    }

    public function facilityDescriptionLanguage($language_id)
    {
        return $description = FacilityDescription::where('facility_id',$this->id)->where('language_id',$language_id)->first();
    }
}
