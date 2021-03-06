<?php

namespace gscms\News\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class TagPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TagTransformer();
    }
}