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

                        {!! Form::open(array('route' => array('addNews'))) !!}

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            {!! Form::label('title', 'Тема:') !!}
                            {!! Form::text('title', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Текст:') !!}
                                {!! Form::textarea('description', '', ['placeholder' => 'Текст...','class' => 'form-control']) !!}
                            </div>
                        </div>

                        {{ Form::button('Создать', ['class' => 'btn btn-default', 'type' => 'submit']) }}

                        {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

