<?php
namespace App\Models;

use App\Models\EquipmentDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipments';

    public function equipmentDescription()
    {
        return $this->hasMany('App\Models\EquipmentDescription','equipment_id','id');
    }

    public function equipmentToHotels()
    {
        return $this->hasMany('App\Models\EquipmentToHotel','equipment_id','id');
    }

     public function equipmentDescriptionLanguage($language_id)
    {
        $description = EquipmentDescription::where('equipment_id',$this->id)->where('language_id',$language_id)->first();
        if( !empty($description)) {
            return $description;
        } else {
            return EquipmentDescription::where('equipment_id',$this->id)->where('language_id',1)->first();
        }
    }
}
