<?php
namespace App\Models\Repositories;
use App\Models\Tag as MainModel;
use App\Models\TagDescription as DescriptionModel;
use App\Models\Languages;

class TagRepository  extends AbstractRepository
{
    public $model;
    protected $table                                        = 'tags';
    protected $description_table                            = 'tags_description';
    protected $foriegn_key                                  = 'tag_id';
    protected $primary_key                                  = 'id';


    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        MainModel $main_model,
        DescriptionModel $description_model
    ) {
        $this->model                                        = $main_model;
        $this->description_model                            = $description_model;
    }

    public function getDescriptionById($id,$language_id)
    {
        $description = $this->description_model::where($this->foriegn_key,$id)
            ->where('language_id',$language_id)
            ->first();
        return $description;
    }

    public function getList()
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.language_id',$language_id)
            ->select([$this->table.'.*', $this->description_table.'.*']);
    }
}
