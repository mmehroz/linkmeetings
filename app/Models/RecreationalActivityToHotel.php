<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecreationalActivityToHotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recreational_activities_to_hotels';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function rcactivity()
    {
        return $this->hasOne('App\Models\RecreationalActivity','id','activity_id');
    }

    public function recreationalActivity()
    {
        return $this->hasOne('App\Models\RecreationalActivityDescription','id','activity_id');
    }
}
