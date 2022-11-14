<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs_description';

    public function blog()
    {
        return $this->hasOne('App\Models\Blog', 'id','blog_id');
    }

    public function blogToCategories()
    {
        return $this->hasMany('App\Models\BlogToCategories','blog_description_id','id');
    }
}
