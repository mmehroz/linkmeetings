<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    public function blogDescription()
    {
        return $this->hasMany('App\Models\BlogDescription','blog_id','id');
    }

    public function blogDescriptionByLanguage($language_id)
    {
        $description = BlogDescription::where('blog_id',$this->id)->where('language_id',$language_id)->first();
        if( !empty($description)) {
            return $description;
        } else { 
            return BlogDescription::where('blog_id',$this->id)->where('language_id',1)->first();
        }
    }
}
