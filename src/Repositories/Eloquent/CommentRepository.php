<?php

namespace gscms\News\Repositories\Eloquent;

use gscms\News\Interfaces\CommentRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('gscms.news.comment.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('gscms.news.comment.model.model');
    }
}
