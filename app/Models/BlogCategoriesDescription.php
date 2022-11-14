<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategoriesDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_categories_description';

    public function blogCategory()
    {
        return $this->hasOne('App\Models\BlogCategories', 'id','blog_category_id');
    }
}
