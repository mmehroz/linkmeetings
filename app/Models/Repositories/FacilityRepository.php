<?php
namespace App\Models\Repositories;
use App\Models\Facility as MainModel;
use App\Models\FacilityDescription as DescriptionModel;
use App\Models\Languages;


class FacilityRepository  extends AbstractRepository
{
    public $model;
    protected $table                                        = 'facilities';
    protected $description_table                            = 'facilities_description';
    protected $foriegn_key                                  = 'facility_id';
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
