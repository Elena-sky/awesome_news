<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 detail-block">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="main_blog_content">

                        <div class="head_title text-center">
                            <h2>Subscribers</h2>

                            <div class="separator"></div>


                            @if(count($subscribers) > 0 )

                                <table class="table">
                                    <tbody>

                                    @foreach($subscribers as $user)

                                        <tr>
                                            <td>
                                                <a class="robotolight icons" href="{{route('showProfile', $user->getSubscriber->id)}}">
                                                    <i class="fa fa fa-user"></i>
                                                    {{\App\Providers\CommentServiceProvider::getUserName($user->getSubscriber->id)}}
                                                </a>
                                            </td>
                                            <td>{{count($user->getSubscriber->news)}} news</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            @else

                                <h3>List is empty</h3>

                            @endif


                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
