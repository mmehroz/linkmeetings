<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategories extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_categories';

    public function blogCategoryDescription()
    {
        return $this->hasMany('App\Models\BlogCategoriesDescription','blog_category_id','id');
    }

    public function blogToCategories()
    {
        return $this->hasMany('App\Models\BlogToCategories','category_id','id');
    }

    public function blogDescriptionByLanguage($language_id)
    {
        return BlogCategoriesDescription::where('blog_category_id',$this->id)->where('language_id',$language_id)->first();
    }
}
