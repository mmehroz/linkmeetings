<?php
namespace App\Models;

use App\Models\TagDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagToHotel extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags_to_hotels';

    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }

    public function tag()
    {
        return $this->hasOne('App\Models\Tag','id','tag_id');
    }

    public function TagDescriptions()
    {
        return $this->hasMany('App\Models\TagDescription','id','tag_id');
    }

    public function TagDescriptionLanguage($language_id)
    {
        $description = TagDescription::where('tag_id',$this->tag_id)->where('language_id',$language_id)->first(); 
        if( !empty($description)) {
            return $description;
        } else {
            return TagDescription::where('tag_id',$this->tag_id)->where('language_id',1)->first();
        }
    }
}
