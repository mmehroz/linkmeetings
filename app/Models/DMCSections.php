<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DMCSections extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dmc_sections';

    public function DMC()
    {
        return $this->hasOne('App\Models\DMC','id','dmc_id');
    }

    public function DMCSectionDescriptions()
    {
        return $this->hasMany('App\Models\DMCSectionsDescription','dmc_section_id','id');
    }

}
