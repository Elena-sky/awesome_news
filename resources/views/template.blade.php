<!DOCTYPE html>
<html>
<head>
    <title>SybarMagazine</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ asset("css/bootstrap.min.css") }}" type="text/css" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("css/li-scroller.css") }}" rel="stylesheet">
    <link href="{{ asset("css/slick.css") }}" rel="stylesheet">
    <link href="{{ asset("css/theme.css") }}" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">



    <script src="{{ asset("js/html5shiv.min.js") }}"></script>
    <script src="{{ asset("js/respond.min.js") }}"></script>

</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <div class="box_wrapper">
        <header id="header">
            <div class="header_top">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav custom_nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="pages/category-archive.html">Archive</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="pages/404.html">404 Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="header_search">
                    <button id="searchIcon"><i class="fa fa-search"></i></button>
                    <div id="shide">
                        <div id="search-hide">
                            <form action="#">
                                <input type="text" size="40" placeholder="Search here ...">
                            </form>
                            <button class="remove"><span><i class="fa fa-times"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="logo_area"><a class="logo" href="#"><b>S</b>ybarMagazine <span>A Pro Magazine Theme</span></a></div>
                <div class="top_addarea"><a href="#"><img src="{{ asset("images/addbanner_728x90_V1.jpg") }}" alt=""></a></div>
            </div>
        </header>
        <div class="latest_newsarea"> <span>Latest News</span>
            <ul id="ticker01" class="news_sticker">
                <li><a href="#">My First News Item</a></li>
                <li><a href="#">My Second News Item</a></li>
                <li><a href="#">My Third News Item</a></li>
                <li><a href="#">My Four News Item</a></li>
                <li><a href="#">My Five News Item</a></li>
                <li><a href="#">My Six News Item</a></li>
                <li><a href="#">My Seven News Item</a></li>
                <li><a href="#">My Eight News Item</a></li>
                <li><a href="#">My Nine News Item</a></li>
            </ul>
        </div>


        @yield('content')


<footer id="footer">
    <div class="footer_top">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInLeft">
                <h2>Follow By Email</h2>
                <div class="subscribe_area">
                    <p>"Subscribe here to get our newsletter, it is safe just Put your Email and click subscribe"</p>
                    <form action="#">
                        <div class="subscribe_mail">
                            <input class="form-control" type="email" placeholder="Email Address">
                            <i class="fa fa-envelope"></i></div>
                        <input class="submit_btn" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInLeft">
                <h2>Popular Post</h2>
                <ul class="catg3_snav ppost_nav">
                    <li>
                        <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                            <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                            <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                            <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInRight">
                <h2>Labels</h2>
                <ul class="footer_labels">
                    <li><a href="#">Comedy</a></li>
                    <li><a href="#">Arts</a></li>
                    <li><a href="#">Cinema</a></li>
                    <li><a href="#">Nature</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Tourism</a></li>
                    <li><a href="#">Videos</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="single_footer_top wow fadeInRight">
                <h2>Contact Form</h2>
                <form action="#" class="contact_form">
                    <label>Name</label>
                    <input class="form-control" type="text">
                    <label>Email*</label>
                    <input class="form-control" type="email">
                    <label>Message*</label>
                    <textarea class="form-control" cols="30" rows="10"></textarea>
                    <input class="send_btn" type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="footer_bottom_left">
            <p>Copyright &copy; 2045</p>
        </div>
        <div class="footer_bottom_right">
            <ul>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Googel+" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Rss" href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
</div>
</div>

<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/wow.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<script src="{{ asset("js/slick.min.js") }}"></script>
<script src="{{ asset("js/jquery.li-scroller.1.0.js") }}"></script>
<script src="{{ asset("js/custom.js") }}"></script>

</body>
</html>