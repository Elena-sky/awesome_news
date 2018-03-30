@extends('template')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_blog sections">
                    <div class="head_title text-center">
                        <h4 class="subtitle">Stories</h4>
                        <h2>All news</h2>

                        <div class="separator"></div>
                    </div>

                    <div class="main_blog_content">
                        <div class="row">

                            @foreach($news as $item)

                                <div class="col-sm-4">
                                    <div class="single_blog mg">
                                        <div class="single_blog_content">
                                            <a href="{{route('showNews', [$item->id])}}">
                                                <p class="monseratregular">{{$item->title}}</p>
                                            </a>

                                            <p>{{$item->description }}</p>
                                            <hr />

                                            <div class="single_blog_bottom_content">
                                                <a class="robotolight" href="{{route('showProfile', [$item->user->id])}}"><i class="fa fa fa-user"></i> {{$item->user->name}} </a>
                                                <a class="robotolight"><i class="fa fa-calendar"></i> {{$item->created_at}} </a>
                                                <a class="robotolight"  href="{{route('showNews', [$item->id])}}"><i class="fa fa-comment"></i> 58 </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection