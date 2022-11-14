<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{

	  use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faq';

    public function faqDescription()
    {
        return $this->hasMany('App\Models\FaqDescription','faq_id','id');
    }

    public function faqDescriptionByLanguage($language_id)
    {
        $description = FaqDescription::where('language_id',$language_id)->get();
        if($description)
         {
            return $description;
         }
         else
         {
            return FaqDescription::where('language_id',1)->get();
         }
    }  
}