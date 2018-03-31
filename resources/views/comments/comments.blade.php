<div class="panel panel-default">
    <div class="panel-body">
        <h3 class="title-comments">Комментарии ({{count($news->comments)}})</h3>
        <hr>
        @foreach($news->comments as $item)
            <div id="id{{$item->id}}">
                @if(\App\Providers\CommentServiceProvider::checkUser($item->user_id))
                    <a class="robotolight delete-comment pull-right" data-comment-id="{{$item->id}}"><i class="fa fa-remove"></i></a>
                @endif

                <div>
                    <a href="{{route('showProfile', $item->user_id)}}">
                        <b>{{\App\Providers\CommentServiceProvider::getUserName($item->user_id)}}</b>
                    </a>
                </div>
                <div>{{$item->created_at}}</div>
                <div>{{$item->description}}</div>
                <hr>

            </div>
         @endforeach

    </div>
</div>

{!! Form::open(array('route' => array('createComment', $news->id))) !!}
    <div class="form-group">
        <div class="col-sm-12 comments">
            {!! Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Введите комментарий...']) !!}

            {{ Form::button('<i class="fa fa-send"></i> Отправить', ['class' => 'btn btn-default', 'type' => 'submit']) }}
        </div>
    </div>

{!! Form::close() !!}