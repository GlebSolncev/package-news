<?php

namespace gscms\News\Facades;

use Illuminate\Support\Facades\Facade;

class News extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gscms.news';
    }
}
