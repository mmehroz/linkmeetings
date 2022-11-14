<?php
namespace App\Models\Repositories;
use App\Models\EmailTemplate;
use App\Models\Languages;


class EmailTemplateRepository extends AbstractRepository
{
    public $model;
    protected $table                            = 'email_template';
    protected $primary_key                      = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        EmailTemplate $emailtemplate
    ) {
        $this->model                        = $emailtemplate;
    }
    public function getEmailList()
    {
        $language_id = getlanguage()->id;
        $getdata = $this->model->emailTemplateByLanguage($language_id);
        return $getdata;
    }
    public function getDescriptionById($id)
    {
        $email_description = EmailTemplate::where('id',$id)
            ->first();
        return $email_description;
    }
    public function update($data,$id)
    {
        // dd($data->description);
        $email_title                        = $data->title;
        $email_content                      = $data->description;
        $insert                             = $this->model::where('id',$id)->first();
        $insert->email_template_title       = $email_title;
        $insert->email_template_content     = $email_content;
        $insert->save();
        return $id;
    }
}
