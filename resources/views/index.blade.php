@extends('template')

@section('content')



  <div class="thumbnail_slider_area">
      <div class="owl-carousel">
        <div class="signle_iteam"> <img src="{{ asset("images/395x396.jpg") }}" alt="">
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
          <a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></div>
        <div class="signle_iteam"> <img src="{{ asset("images/395x396.jpg") }}" alt="">
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
          <a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></div>
        <div class="signle_iteam"> <img src="{{ asset("images/395x396.jpg") }}" alt="">
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
          <a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></div>
        <div class="signle_iteam"> <img src="{{ asset("images/395x396.jpg") }}" alt="">
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
          <a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></div>
        <div class="signle_iteam"> <img src="{{ asset("images/395x396.jpg") }}" alt="">
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
          <a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></div>
        <div class="signle_iteam"> <img src="{{ asset("images/395x396.jpg") }}" alt="">
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
          <a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></div>
      </div>
    </div>
    <section id="contentbody">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="row">
            <div class="left_bar">
              <div class="single_leftbar">
                <h2><span>Recent Post</span></h2>
                <div class="singleleft_inner">
                  <ul class="recentpost_nav wow fadeInDown">
                    <li><a href="pages/single_page.html"><img src="{{ asset("images/150x80.jpg") }}" alt=""></a> <a class="recent_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a></li>
                    <li><a href="pages/single_page.html"><img src="{{ asset("images/150x80.jpg") }}" alt=""></a> <a class="recent_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a></li>
                    <li><a href="pages/single_page.html"><img src="{{ asset("images/150x80.jpg") }}" alt=""></a> <a class="recent_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a></li>
                  </ul>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Add</span></h2>
                <div class="singleleft_inner"> <a href="#"><img src="{{ asset("images/150x600.jpg") }}" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
          <div class="row">
            <div class="middle_bar">
              <div class="featured_sliderarea">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="item active"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 1</a></h1>
                      </div>
                    </div>
                    <div class="item"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 2</a></h1>
                      </div>
                    </div>
                    <div class="item"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 3</a></h1>
                      </div>
                    </div>
                    <div class="item"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 4</a></h1>
                      </div>
                    </div>
                  </div>
                  <a class="left left_slide" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </a> <a class="right right_slide" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </a></div>
              </div>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="pages/category-archive.html">Category 1</a></div>
                <div class="single_category_inner">
                  <ul class="catg_nav">
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/310x150.jpg" alt=""> </a></div>
                      <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                   </li>
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/310x150.jpg" alt=""> </a></div>
                      <a class="catg_title" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                   </li>
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/310x150.jpg" alt=""> </a></div>
                      <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="pages/single_page.html"><i class="fa fa-comments"></i>20 Comments</a></div>
                   </li>
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x150.jpg" alt=""> </a></div>
                      <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                   </li>
                  </ul>
                </div>
              </div>
              <div class="single_category  wow fadeInDown">
                <div class="category_title"> <a href="pages/category-archive.html">Category 2</a></div>
                <div class="single_category_inner">
                  <ul class="catg_nav catg_nav2">
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x300.jpg" alt=""> </a></div>
                      <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                      <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
                   </li>
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x300.jpg" alt=""> </a></div>
                      <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                      <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
                   </li>
                  </ul>
                </div>
              </div>
              <div class="category_three_fourarea  wow fadeInDown">
                <div class="category_three">
                  <div class="single_category">
                    <div class="category_title"> <a href="pages/single_page.html">Category 3</a></div>
                    <div class="single_category_inner">
                      <ul class="catg_nav catg_nav3">
                        <li>
                          <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/292x150.jpg" alt=""> </a></div>
                          <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                          <p class="post-summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                       </li>
                      </ul>
                      <div class="catg3_bottompost wow fadeInDown">
                        <ul class="catg3_snav">
                          <li>
                            <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="category_four wow fadeInDown">
                  <div class="single_category">
                    <div class="category_title"> <a href="#">Category 4</a></div>
                    <div class="single_category_inner">
                      <ul class="catg_nav catg_nav3">
                        <li>
                          <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/292x150.jpg" alt=""> </a></div>
                          <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                          <p class="post-summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                       </li>
                      </ul>
                      <div class="catg3_bottompost wow fadeInDown">
                        <ul class="catg3_snav">
                          <li>
                            <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                              </div>
                            </div>
                         </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Category 5</a></div>
                <div class="single_category_inner">
                  <ul class="catg3_snav catg5_nav">
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                            <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </div>
                      </div>
                   </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="row">
            <div class="right_bar">
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Popular Post</span></h2>
                <div class="singleleft_inner">
                  <ul class="catg3_snav ppost_nav wow fadeInDown">
                    <li>
                      <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                  </ul>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Ad</span></h2>
                <div class="singleleft_inner"> <a href="#"><img alt="" src="images/262x218.jpg"></a></div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <ul class="nav nav-tabs custom-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Most Popular</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Reader</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Recent Comment</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
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
                  <div role="tabpanel" class="tab-pane fade" id="profile">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
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
                  <div role="tabpanel" class="tab-pane fade" id="messages">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
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
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Blog Archive</span></h2>
                <div class="singleleft_inner">
                  <div class="blog_archive">
                    <form action="#">
                      <select>
                        <option value="">Blog Archive</option>
                        <option value="">October(20)</option>
                      </select>
                    </form>
                  </div>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Labels</span></h2>
                <div class="singleleft_inner">
                  <ul class="label_nav">
                    <li><a href="#">Arts</a></li>
                    <li><a href="#">Cinema</a></li>
                    <li><a href="#">Comedy</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Tourism</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Nature</a></li>
                  </ul>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Links</span></h2>
                <div class="singleleft_inner">
                  <ul class="link_nav">
                    <li><a href="#">Blog Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Error Page</a></li>
                    <li><a href="#">Wpfreeware</a></li>
                    <li><a href="#">Facebook Account</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection

