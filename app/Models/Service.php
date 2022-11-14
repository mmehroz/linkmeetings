<?php
namespace App\Models;

use App\Models\ServiceDescription; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services';

    public function serviceDescription()
    {
        return $this->hasMany('App\Models\ServiceDescription','service_id','id');
    }

    public function serviceToHotels()
    {
        return $this->hasMany('App\Models\ServicesToHotel','service_id','id');
    }

    public function serviceDescriptionLanguage($language_id)
    {
        $description = ServiceDescription::where('service_id',$this->id)->where('language_id',$language_id)->first();
        if( !empty($description)) {
            return $description;
        } else {
            return ServiceDescription::where('service_id',$this->id)->where('language_id',1)->first();
        }
    }
}
