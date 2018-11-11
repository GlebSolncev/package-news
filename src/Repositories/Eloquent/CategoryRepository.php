<?php

namespace gscms\News\Repositories\Eloquent;

use gscms\News\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('gscms.news.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('gscms.news.category.model.model');
    }

    public function selectCategories()
    {
        return $this->pluck('name','slug');
    }
    public function selectadminCategories()
    {
        return $this->pluck('name','id');
    }
}
