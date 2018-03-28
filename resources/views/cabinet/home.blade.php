@extends('template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-offset-1">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">Мои новости</a></li>
                    <li><a href="#">Мои подписки</a></li>
                    <li><a href="#">Мои подпищики</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            Имя: {{$user->name}}
                            <br>
                            E-mail: {{$user->email}}
                        </div>
                            <br>



                            количество написанных новостей, количество подписчиков
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>
@endsection
