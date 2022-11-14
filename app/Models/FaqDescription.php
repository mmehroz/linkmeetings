<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faq_description';

    public function faq()
    {
        return $this->hasOne('App\Models\Faq', 'id','faq_id');
    }
    public function faqDescriptionsLanguage($language_id)
    {
        $description = FaqDescription::where('faq_id',$this->id)->where('language_id',$language_id)->first();

         if($description)
         {
            return $description;
         }
         else
         {
            return FaqDescription::where('faq_id',$this->id)->where('language_id',1)->first();
         }
    }
}
