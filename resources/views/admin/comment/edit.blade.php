    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#comment" data-toggle="tab">{!! trans('news::comment.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#news-comment-edit'  data-load-to='#news-comment-entry' data-datatable='#news-comment-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#news-comment-entry' data-href='{{guard_url('news/comment')}}/{{$comment->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('news-comment-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('news/comment/'. $comment->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="comment">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('news::comment.name') !!} [{!!$comment->name!!}] </div>
                @include('news::admin.comment.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>