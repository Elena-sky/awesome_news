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
                                    <h2 class="statistic-counter">5</h2>
                                    <h3>Подпищиков</h3>
                                </div>

                            </div>
                        </div>

                        <div class="single_counter">
                            <div class="col-sm-3 col-xs-12">
                                <div class="single_counter_item">
                                    <h2 class="statistic-counter">99</h2>
                                    <h3>Подписок</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>