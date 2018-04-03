<section id="counter" class="counter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >
                <div class="main_counter_area text-center">
                    <div class="row">

                        <div class="single_counter border_right">
                            <div class="col-sm-3 col-xs-12 user">
                                <div class="head_title text-center">
                                    @isset($user)
                                        <h2>{{ $user->name }}</h2>

                                        <div class="separator"></div>
                                        <h4 class="subtitle">E-mail: {{ $user->email }}</h4>

                                        @if(\Illuminate\Support\Facades\Auth::check())
                                                <button type="button" class="btn btn-success subscribe" data-user-id="{{$user->id}}">Subscribe</button>
                                        @endif


                                    @else
                                            <h2>{{ Auth::user()->name }}</h2>

                                            <div class="separator"></div>
                                            <h4 class="subtitle">E-mail: {{ Auth::user()->email }}</h4>
                                    @endisset
                                </div>
                            </div>
                        </div>

                        <div class="single_counter">
                            <div class="col-sm-3 col-xs-12">
                                <div class="single_counter_item">

                                    @isset($user)
                                        <h2 class="statistic-counter">{{count($user->news)}}</h2>
                                    @else
                                        <h2 class="statistic-counter">{{count(Auth::user()->news)}}</h2>
                                    @endisset

                                    <h3>Написанных новостей</h3>
                                </div>

                            </div>
                        </div>

                        <div class="single_counter">
                            <div class="col-sm-3 col-xs-12">
                                <div class="single_counter_item">

                                    @isset($user)
                                            <h2 class="statistic-counter">{{count($user->subscribers()->get())}}</h2>
                                            <a href="{{ route('showSubscribers', $user->id) }}">
                                            <h3>Подпищиков</h3>
                                        </a>
                                        @else
                                            <h2 class="statistic-counter">{{count(Auth::user()->subscribers()->get())}}</h2>
                                            <a href="{{ route('showSubscribers', Auth::user()->id) }}">
                                                <h3>Подпищиков</h3>
                                            </a>
                                    @endisset

                                </div>
                            </div>
                        </div>

                        <div class="single_counter">
                            <div class="col-sm-3 col-xs-12">
                                <div class="single_counter_item">

                                    @isset($user)
                                        <h2 class="statistic-counter">{{count($user->subscription()->get())}}</h2>
                                        <a href="{{ route('showSubscription', $user->id) }}">
                                            <h3>Подписок</h3>
                                        </a>
                                        @else
                                            <h2 class="statistic-counter">{{count(Auth::user()->subscription()->get())}}</h2>
                                            <a href="{{ route('showSubscription', Auth::user()->id) }}">
                                                <h3>Подписок</h3>
                                            </a>
                                    @endisset

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>