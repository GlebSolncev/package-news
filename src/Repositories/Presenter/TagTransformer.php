<?php

namespace gscms\News\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class TagTransformer extends TransformerAbstract
{
    public function transform(\gscms\News\Models\Tag $tag)
    {
        return [
            'id'                => $tag->getRouteKey(),
            'name'              => $tag->name,
            'frequency'         => $tag->frequency,
            'slug'              => $tag->slug,
            'published'         => $tag->published,
            'created_at'        => $tag->created_at,
            'updated_at'        => $tag->updated_at,
            'deleted_at'        => $tag->deleted_at,
            'url'              => [
                'public' => trans_url('news/'.$tag->getPublicKey()),
                'user'   => guard_url('news/tag/'.$tag->getRouteKey()),
            ], 
            'status'            => trans('app.'.$tag->status),
            'created_at'        => format_date($tag->created_at),
            'updated_at'        => format_date($tag->updated_at),
        ];
    }
}