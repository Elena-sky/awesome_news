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

                    @if($news)
                        <div class="main_blog_content">
                            <div class="row">

                                @foreach($news as $item)

                                    <div class="col-sm-4">
                                        <div class="single_blog">
                                            <div class="single_blog_content">
                                                <p class="monseratregular">{{$item->title}}</p>
                                                <p>{{$item->description }}</p>
                                                <hr />

                                                <div class="single_blog_bottom_content">
                                                    <a class="robotolight"><i class="fa fa-calendar"></i>{{$item->created_at}}</a>
                                                    <a class="robotolight" href="#"><i class="fa fa-commenting"></i>17</a>
                                                    <a class="robotolight" href="{{route('updateNews', [$item->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a class="robotolight delete-news" data-news-id="{{$item->id}}"><i class="fa fa-remove"></i></a>
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

                </div>
            </div>
        </div>
    </div>
</section>
