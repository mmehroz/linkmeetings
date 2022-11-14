<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategoryDescription extends Model
{
      use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faq_category_description';

    public function faqCategory()
    {
        return $this->hasOne('App\Models\FaqCategory', 'id','faq_category_id');
    }
    public function faqCategoryDescriptionsLanguage($language_id)
    {
        $description = FaqCategoryDescription::where('faq_category_id',$this->id)->where('language_id',$language_id)->first();

         if($description)
         {
            return $description;
         }
         else
         {
            return FaqCategoryDescription::where('faq_category_id',$this->id)->where('language_id',1)->first();
         }
    }
}
