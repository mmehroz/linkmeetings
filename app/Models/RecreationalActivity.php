<?php
namespace App\Models;

use App\Models\RecreationalActivityDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecreationalActivity extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recreational_activities';

    public function recreationalActivityDescription()
    {
        return $this->hasMany('App\Models\RecreationalActivityDescription','activity_id','id');
    }

    public function recreationalActivityToHotels()
    {
        return $this->hasMany('App\Models\RecreationalActivityToHotel','activity_id','id');
    }

    public function recreationalActivityDescriptionLanguage($language_id)
    {
        return $description = RecreationalActivityDescription::where('activity_id',$this->id)->where('language_id',$language_id)->first();
    }
}
