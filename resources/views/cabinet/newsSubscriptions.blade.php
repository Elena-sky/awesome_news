@extends('template')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_blog sections">
                    <div class="head_title text-center">
                        <h4 class="subtitle">Stories</h4>
                        <h2>Subscription news</h2>

                        <div class="separator"></div>
                    </div>

                    <div class="main_blog_content">
                        <div class="row">
                            @if(count($subscription)< 1)

                                <div class="head_title text-center">
                                    <h3>History is empty</h3>
                                </div>

                                @else

                                    @foreach($subscription as $user)

                                        @foreach($user->getUser->news as $news)

                                            <div class="col-sm-4">
                                                <div class="single_blog mg">
                                                    <div class="single_blog_content">
                                                        <a href="{{route('showNews', [$news->id])}}">
                                                            <p class="monseratregular">{{$news->title}}</p>
                                                        </a>

                                                        <p>{{$news->description }}</p>
                                                        <hr />
                                                        <div class="single_blog_bottom_content">
                                                            <a class="robotolight icons" href="{{route('showProfile', $news->user_id)}}"><i class="fa fa fa-user"></i> {{\App\Providers\CommentServiceProvider::getUserName($news->user_id)}} </a>
                                                            <a class="robotolight icons"><i class="fa fa-calendar"></i> {{$news->created_at}} </a>
                                                            <a class="robotolight icons"  href="{{route('showNews', [$news->id])}}"><i class="fa fa-comment"></i> {{count($news->comments)}} </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    @endforeach
                                @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection