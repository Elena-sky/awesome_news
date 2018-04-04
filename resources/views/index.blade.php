@extends('template')


@section('content')

    <div class="container">
        <div class="">
            <div class="col-sm-12">
                <div class="main_blog sections">
                    <div class="head_title text-center">
                        <h4 class="subtitle">Stories</h4>
                        <h2>All news</h2>

                        <div class="separator"></div>
                    </div>

                    <div class="main_blog_content">
                        <div class="">

                            @foreach($news as $item)

                                <div class="col-sm-4">
                                    <div class="single_blog mg">
                                        <div class="single_blog_content">

                                            <div class="d-size">
                                                <a href="{{route('showNews', [$item->id])}}">
                                                    <p class="monseratregular">{{$item->title}}</p>
                                                </a>

                                                <p class="size">{{$item->description }}</p>
                                            </div>

                                            <hr />

                                            <div class="single_blog_bottom_content">
                                                <a class="robotolight icons" href="{{route('showProfile', $item->user_id)}}"><i class="fa fa fa-user"></i> {{\App\Providers\CommentServiceProvider::getUserName($item->user_id)}} </a>
                                                <a class="robotolight icons"><i class="fa fa-calendar"></i> {{$item->created_at}} </a>
                                                <a class="robotolight icons"  href="{{route('showNews', [$item->id])}}"><i class="fa fa-comment"></i> {{count($item->comments)}} </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endforeach

                                <div class="text-center">
                                    {{ $news->links() }}
                                </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection