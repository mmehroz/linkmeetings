<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DMCFleetDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dmc_fleet_description';

    public function DMCFleets()
    {
        return $this->hasOne('App\Models\DMCFleet','id','dmc_fleet_id');
    }
    
}
