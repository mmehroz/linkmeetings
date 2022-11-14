<?php
namespace App\Models\Repositories;
use App\Models\Faq;
use App\Models\FaqDescription;
use App\Models\FaqCategoryDescription;
use App\Models\Languages;


class FaqRepository extends AbstractRepository
{
    public $model;
    protected $table                            = 'faq';
    protected $categories_description_table     = 'faq_description';
    protected $foriegn_key                      = 'faq_id';
    protected $primary_key                      = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        Faq $faq,
        FaqDescription $faqDescription,
        FaqCategoryDescription $faqCategoryDescription
    ) {
        $this->model                = $faq;
        $this->faq_description_model    = $faqDescription;
        $this->faq_categorydescription_model    = $faqCategoryDescription;
    }
    public function getFaqList()
    {
        $language_id = getlanguage()->id;
        $getdata = $this->model->faqDescriptionByLanguage($language_id);
        return $getdata;
    }
    public function add($data)
    {
        $language                   = getlanguage();
        $language_id                = $language->id;
        
        $slug                       = $this->createSlug($data->slug);
        $user                       = isUserLoggedIn();
        $user_id                    = $user['user_id'];
        // dd($user_id);
        $language                   = getlanguage();
        $language_id                = $language->id;
        $faq_parent                 = $data->{'parent_id-'.$language->id};
        $insert                     = new $this->model;
        $insert->slug               = $slug;
        $insert->faq_category_id    = $faq_parent;
        $insert->created_by         = $user_id;
        $insert->save();
        $languages = Languages::where('status','Active')->get();
        foreach($languages as $language)
        {
        $faq_id                                 = $insert->id;
        $faq_title                              = $data->{'title-'.$language->id};
        $faq_description                        = $data->{'description-'.$language->id};
        if ($faq_title) {
        $insert_description                     = new $this->faq_description_model;
        $insert_description->faq_id             = $faq_id;
        $insert_description->language_id        = $language->id;
        $insert_description->title              = $faq_title;
        $insert_description->description        = $faq_description;
        $insert_description->save();
        }
        
        
        }
        return $faq_id;
    }
    public function getDescriptionById($id,$language_id)
    {
        $faq_description = FaqDescription::where('faq_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $faq_description;
    }
	public function getFaqById($id)
    {
        $faq = Faq::where('id',$id)
            ->first();
        return $faq;
    }
       public function update($data,$faq_id)
    {
        $language               = getlanguage();
        $language_id            = $language->id;
        $user                       = isUserLoggedIn();
        $user_id                    = $user['user_id'];
        $faq_parent                 = $data->{'parent_id-'.$language->id};
        $insert                     = $this->model::where('id',$faq_id)->first();
        $insert->faq_category_id    = $faq_parent;
        $insert->created_by         = $user_id;
        $insert->save();
        foreach($language as $languages)
        {
        $language_id = $language->id;
        $faq_title                              = $data->{'title-'.$language->id};
        $faq_description                        = $data->{'description-'.$language->id};
        if ($faq_description) {
        $insert_description                     = $this->faq_description_model::where('faq_id',$faq_id)->where('language_id',$language_id)->first();
        $insert_description->title              = $faq_title;
        $insert_description->description        = $faq_description;
        $insert_description->save();
        }
        }
        return $faq_id;
    }
    public function remove($id)
    {
        $delete         = $this->model::where($this->primary_key,$id)->delete();
        $delete_desc    = $this->faq_description_model::where($this->foriegn_key,$id)->delete();

        if($delete && $delete_desc)
            return TRUE;
        else
            return FALSE;
    }
    public function getFaqCategories()
    {
        $language_id = getlanguage()->id;
        $faq_category = $this->faq_categorydescription_model::where('language_id',$language_id)->get();
        if($faq_category)
        {
            $faq_category;
        }
        else
        {
            $this->faq_categorydescription_model::where('language_id',1)->get();
        }
        // dd($faq_category);
        return $faq_category;
    }
}
