<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 detail-block">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="main_blog_content">

                            <div class="head_title text-center">
                                <h2>{{$news->title}}</h2>

                                <div class="separator"></div>

                                <p>{{$news->description }}</p>
                            </div>

                            <div class="single_blog_bottom_content">
                                <a class="robotolight"><i class="fa fa-calendar"></i> {{$news->created_at}}</a>
                            </div>

                    </div>


                </div>
            </div>

            @include('comments.comments')

        </div>
    </div>
</div>
