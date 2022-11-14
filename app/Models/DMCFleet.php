<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DMCFleet extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dmc_fleet';

    public function DMC()
    {
        return $this->hasOne('App\Models\DMC','id','dmc_id');
    }

    public function FleetDescriptions()
    {
        return $this->hasMany('App\Models\DMCFleetDescription','dmc_fleet_id','id');
    }

}
