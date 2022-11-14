<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogToCategories extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_to_categories';

    public function blogDescription()
    {
        return $this->hasOne('App\Models\BlogDescription', 'id','blog_description_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\BlogCategories', 'id','category_id');
    }
}
