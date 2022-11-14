<?php
namespace App\Models\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

abstract class AbstractRepository
{
    /**
     * The model to execute queries on
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Create a new repository instance
     * @param \Illuminate\Database\Eloquent\Model $model The model to execute queries on
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get a new instance of the model
     * @param  array  $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getNew(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }

    /**
     * Get results of the model
     * @return Object
     */
    public function getAll($where=array())
    {
        if(!empty($where))
            return $this->model->where($where)->get();
        else
            return $this->model->get();
    }

    /**
     * Get results of the model
     * @return Int
     */
    public function getCount()
    {
        return $this->model->count();
    }

    /**
     * Get results of the model By Column
     * $params Column Value| Column Name
     * @return Object
     */
    public function getByCol($value='',$key='id')
    {
        return $this->model->where($key,$value)->first();
    }

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = Str::slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 100; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return $this->model::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
}
