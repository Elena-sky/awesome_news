<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_blog sections">
                    <div class="head_title text-center">
                        <h2>Добавить новость </h2>

                        <div class="separator"></div>
                    </div>

                    <div class=" col-sm-6 col-sm-offset-3">

                        {!! Form::model($news, array('route' => array('newsSave', $news->id))) !!}

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            {!! Form::label('title', 'Тема:') !!}
                            {!! Form::text('title', $news->title, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Текст:') !!}
                            {!! Form::textarea('description', $news->description, ['class' => 'form-control']) !!}
                        </div>

                        {{ Form::button('Сохранить', ['class' => 'btn btn-default', 'type' => 'submit']) }}

                        {!! Form::close() !!}
                    </div>

                </div>

            </div>
            </div>
        </div>
    </div>
</section>