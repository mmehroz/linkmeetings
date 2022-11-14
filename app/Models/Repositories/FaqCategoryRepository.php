<?php
namespace App\Models\Repositories;
use App\Models\FaqCategory;
use App\Models\FaqCategoryDescription;
use App\Models\Languages;


class FaqCategoryRepository extends AbstractRepository
{
    public $model;
    protected $table                            = 'faq_category';
    protected $categories_description_table     = 'faq_category_description';
    protected $foriegn_key                      = 'faq_category_id';
    protected $primary_key                      = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        FaqCategory $faqcategories,
        FaqCategoryDescription $faqcategoriesDescription
    ) {
        $this->model                = $faqcategories;
        $this->categories_description_model    = $faqcategoriesDescription;
    }
    public function getcategoryFaqList()
    {
        $language_id = getlanguage()->id;
        $getdata = $this->model->faqCategoryDescriptionByLanguage($language_id);
        return $getdata;
    }
    public function add($data)
    {
        $language               = getlanguage();
        $language_id            = $language->id;
        
        $slug                   = $this->createSlug($data->slug);
        $user                   = isUserLoggedIn();
        $language               = getlanguage();
        $language_id            = $language->id;
        $insert                 = new $this->model;
        $insert->slug           = $slug;
        $insert->save();
        $languages = Languages::where('status','Active')->get();
        foreach($languages as $language)
        {
        $faq_category_id                        = $insert->id;
        $category_description_title             = $data->{'title-'.$language->id};
        if ($category_description_title) {
        $insert_description                     = new $this->categories_description_model;
        $insert_description->faq_category_id    = $faq_category_id;
        $insert_description->language_id        = $language->id;
        $insert_description->title              = $category_description_title;
        $insert_description->save();
        }
        
        
        }
        return $faq_category_id;
    }
    public function getDescriptionById($id,$language_id)
    {
        $category_faq_description = FaqCategoryDescription::where('faq_category_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $category_faq_description;
    }
       public function update($data,$category_faq_id)
    {

        // $language               = getlanguage();
        // $language_id            = $language->id;

        $languages = Languages::where('status','Active')->get();

        foreach($languages as $language)
        {
        $language_id = $language->id;
        $category_description_title             = $data->{'title-'.$language->id};
        if ($category_description_title) {
        $insert_description                     = $this->categories_description_model::where('faq_category_id',$category_faq_id)->where('language_id',$language_id)->first();
        $insert_description->title              = $category_description_title;
        $insert_description->save();
        }
        }
        return $category_faq_id;
    }
    public function remove($id)
    {
        $delete         = $this->model::where($this->primary_key,$id)->delete();
        $delete_desc    = $this->categories_description_model::where($this->foriegn_key,$id)->delete();

        if($delete && $delete_desc)
            return TRUE;
        else
            return FALSE;
    }
}
