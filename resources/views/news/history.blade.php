<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_blog sections">
                    <div class="head_title text-center">
                        <h4 class="subtitle">Stories</h4>
                        <h2>My news</h2>

                        <div class="separator"></div>

                    </div>

                    @isset($user)

                        @if(count($user->news) < 1)

                            <div class="head_title text-center">
                                <h3>History is empty</h3>
                            </div>

                        @endif

                            <div class="main_blog_content">
                                <div class="row">
                                    @foreach($user->news as $item)

                                        <div class="col-sm-4">
                                            <div class="single_blog mg">
                                                <div class="single_blog_content">
                                                    <a href="{{route('showNews', [$item->id])}}">
                                                        <p class="monseratregular">{{$item->title}}</p>
                                                    </a>
                                                    <p>{{$item->description }}</p>
                                                    <hr />

                                                    <div class="single_blog_bottom_content">
                                                        <a class="robotolight icons"><i class="fa fa-calendar"></i>{{$item->created_at}}</a>
                                                        <a class="robotolight icons" href="{{route('showNews', [$item->id])}}"><i class="fa fa-commenting"></i> {{count($item->comments)}} </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            </div>

                    @else

                            @if($news)
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
                                                            <a class="robotolight icons"><i class="fa fa-calendar"></i>{{$item->created_at}}</a>
                                                            <a class="robotolight icons" href="{{route('showNews', [$item->id])}}"><i class="fa fa-commenting"></i>  {{count($item->comments)}}</a>
                                                            <div class="pull-right">
                                                                <a class="robotolight icons" href="{{route('updateNews', [$item->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                                                                <a class="robotolight icons delete-news" data-news-id="{{$item->id}}"><i class="fa fa-remove"></i></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                            @else

                                <div class="head_title text-center">
                                    <h3>History is empty</h3>
                                </div>

                            @endif

                     @endisset

                </div>
            </div>
        </div>
    </div>
</section>
