<?php
namespace App\Models;

use App\Models\AmenityDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DMCDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dmc_description';

    public function DMC()
    {
        return $this->hasOne('App\Models\DMC','id','dmc_id');
    }
    
}
