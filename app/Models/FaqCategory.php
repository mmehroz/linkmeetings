<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategory extends Model
{
    
	  use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faq_category';

    public function faqCategoryDescription()
    {
        return $this->hasMany('App\Models\FaqCategoryDescription','faq_category_id','id');
    }

    public function faqCategoryDescriptionByLanguage($language_id)
    {
        $description = FaqCategoryDescription::where('language_id',$language_id)->get();
        if($description)
         {
            return $description;
         }
         else
         {
            return FaqCategoryDescription::where('language_id',1)->get();
         }
    }  
}
