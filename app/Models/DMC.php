<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\HotelGallery;

class DMC extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dmc';

    public function Hotels()
    {
        return $this->hasMany('App\Models\hotels','city','city');
    }

    public function DMCDescriptions()
    {
        return $this->hasMany('App\Models\DMCDescription','dmc_id','id');
    }

    public function DMCSection()
    {
        return $this->hasMany('App\Models\DMCSections','dmc_id','id');
    }
    
    public function DMCFleets()
    {
        return $this->hasMany('App\Models\DMCFleet','dmc_id','id');
    }

    public function getDescriptionByLanguageID($language_id) {
        $description = DMCDescription::where('dmc_id',$this->id)->where('language_id',$language_id)->first();    
        if( !empty($description)) {
            return $description;
        } else {
            return DMCDescription::where('dmc_id',$this->id)->where('language_id',1)->first();
        }
    }
    
}
