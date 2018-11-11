<?php

namespace gscms\News\Repositories\Eloquent;

use gscms\News\Interfaces\NewsRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('gscms.news.news.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('gscms.news.news.model.model');
    }
}
