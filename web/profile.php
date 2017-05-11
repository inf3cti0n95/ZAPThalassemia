<!DOCTYPE html>
<?php 
  
  $page = "profile";
  session_start();
  include_once("components/islogin.php");
  if(!$login){
    header('Location: login.php');
  }

?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
    </head>
    <body id="top" class="has-header-search">
        <?php include_once("components/navigation.php") ?>

        <section class="page-title ptb-110">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Profile</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="">Profile</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding ptb-100 white">
            
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                      <div class="tt-sidebar-wrapper" role="complementary">
                          


                          <div class="widget widget_tt_author_widget">

                            <div class="author-info-wrapper">

                                <div class="author-cover">
                                    <img src="assets/img/blog/author-large-thumb.jpg" style="max-height: 350px;"  alt="">
                                </div>

                                <div class="author-avatar">
                                    <img src="assets/img/blog/author-2.jpg" alt="">

                                    <h2>John Doe</h2>
                                    <span>User Interface Designer</span>
                                </div>

                                <p>All these men were men of conviction. They deeply believed in what they were doing and put their reputations.</p>

                                <div class="author-social-links">
                                    <ul class="list-inline">
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>            
                                    </ul>
                                </div>
                            </div> <!-- /author-info-wrapper -->
                          </div><!-- /.widget_tt_author_widget -->


                          <div  class="widget widget_tt_popular_post">
                            <div class="tt-popular-post border-bottom-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Latest</a>
                                    </li>
                                    <li class="">
                                        <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">Popular</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- latest post tab -->
                                    <div id="tt-popular-post-tab1" class="tab-pane fade active in">

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-3.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">At the end of the day, or at the start of the day?</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-4.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">What never to tweet about</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-5.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">Men have become the tools of their tools.</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->
                                      
                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-1.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">Master the psychology of web design</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-2.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">CTC to showcase technology solutions at Sea A......</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                    </div>

                                    <!-- popular post tab-->
                                    <div id="tt-popular-post-tab2" class="tab-pane fade">

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-1.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">Master the psychology of web design</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-2.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">CTC to showcase technology solutions at Sea A......</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-3.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">At the end of the day, or at the start of the day?</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-4.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">What never to tweet about</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="assets/img/blog/recent-thumb-5.jpg" alt="">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">Men have become the tools of their tools.</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->

                                    </div>
                                </div><!-- /.tab-content -->
                            </div><!-- /.tt-popular-post -->
                          </div><!-- /.widget_tt_popular_post -->


                          <div class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>   
                            <ul>
                              <li><a href="#">Technology</a></li>
                              <li><a href="#">Media</a></li>
                              <li><a href="#">Video</a></li>
                              <li><a href="#">Audio</a></li>
                              <li><a href="#">Design</a></li>
                              <li><a href="#">Material</a></li>
                            </ul>
                          </div><!-- /.widget_categories -->


                          <div class="widget widget_tt_twitter">
                            <i class="fa fa-twitter"></i>
                            <div id="twitter-gallery-feed">
                              <div class="twitter-widget"></div> <!-- this div is required for carousel injected by javascript -->
                              <!-- html code injected via javascript -->
                            </div>

                          </div><!-- /.widget_tt_twitter -->


                          <div class="widget widget_tt_instafeed">
                            <i class="fa fa-instagram"></i>
                            <h3 class="widget-title">Instagram Photos</h3>

                             <div id="myinstafeed">
                               <!-- html code injected via javascript -->
                             </div> 

                          </div><!-- /.widget_tt_instafeed -->
        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->
        
                </div>
            </div>
            
            </section>


        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>
    </body>
</html>