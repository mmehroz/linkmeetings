<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EquipmentToHotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipments_to_hotels';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function equipment()
    {
        return $this->hasOne('App\Models\Equipment', 'id','equipment_id');
    }
}
