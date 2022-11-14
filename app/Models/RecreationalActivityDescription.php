<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecreationalActivityDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recreational_activities_description';

    public function recreationalActivity()
    {
        return $this->hasOne('App\Models\RecreationalActivityDescription','id','activity_id');
    }
}
