<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EquipmentDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipments_description';

    public function equipment()
    {
        return $this->hasOne('App\Models\Equipment', 'id','equipment_id');
    }
}
