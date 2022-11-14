<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DMCSectionsDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dmc_sections_description';

    public function DMC()
    {
        return $this->hasOne('App\Models\DMCSections','id','dmc_section_id');
    }
    
}
