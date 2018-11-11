<?php

namespace gscms\News\Repositories\Eloquent;

use gscms\News\Interfaces\TagRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TagRepository extends BaseRepository implements TagRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('gscms.news.tag.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('gscms.news.tag.model.model');
    }

     public function selectTags()
    {
        return $this->pluck('name','slug');
    }
}
