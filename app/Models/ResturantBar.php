<?php
namespace App\Models;

use App\Models\ResturantBarDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResturantBar extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resturant_bar';

    public function ResturantBarDescription()
    {
        return $this->hasMany('App\Models\ResturantBarDescription','resturant_bar_id','id');
    }

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function ResturantBarDescriptionLanguage($language_id)
    {

        return $description = ResturantBarDescription::where('resturant_bar_id',$this->id)->where('language_id',$language_id)->first();
    }
}
