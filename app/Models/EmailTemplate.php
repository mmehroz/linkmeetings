<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class EmailTemplate extends Model {

    use SoftDeletes;


    protected $dates = ['deleted_at'];

    protected $table = 'email_template';

    protected $guarded  = array('id');

    public function emailTemplateByLanguage($language_id)
    {
        return EmailTemplate::get();
    }  

}
