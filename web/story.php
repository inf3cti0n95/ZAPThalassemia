<!DOCTYPE html>
<?php 
  
  $page = "story";
  session_start();
  include_once("components/islogin.php");

?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
    </head>
    <body id="top" class="has-header-search">
        <?php include_once("components/navigation.php") ?>

         <!--page title start-->
        <section class="page-title ptb-50" style="padding: 50px 0; top:100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Stories</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="#">Stories</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="posts-content single-post">

                            <article class="post-wrapper">

                            <header class="entry-header-wrapper clearfix">

                                <div class="author-thumb waves-effect waves-light">
                                <a href="#"><img src="assets/img/blog/author.jpg" alt=""></a>                
                                </div>
                                
                                <div class="entry-header">
                                <h2 class="entry-title">CTC to showcase technology solutions at Sea Air Space Exposition</h2>

                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-user"></i><a href="#">Trendy Theme</a>
                                        </li>

                                        <li>
                                            <i class="fa fa-clock-o"></i><a href="#">Jan 15, 2016</a>
                                        </li>

                                        <li>
                                            <i class="fa fa-heart-o"></i><a href="#"><span>1</span></a>
                                        </li>

                                        <li>
                                            <i class="fa fa-comment-o"></i><a href="#">3</a>
                                        </li>
                                    </ul>
                                </div><!-- .entry-meta -->
                                </div>

                            </header><!-- /.entry-header-wrapper -->

                            <div class="thumb-wrapper">
                                <img src="assets/img/blog/blog-1.jpg" class="img-responsive" alt="" >
                            </div><!-- .post-thumb -->


                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus, tincidunt accumsan enim ex ut sem. Ut in augue congue, tempus urna sit amet, condimentum lorem. Pellentesque est sem, semper sit amet velit et, commodo fringilla turpis. Aenean quam erat, eleifend quis congue vitae, interdum vitae risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed viverra nulla.</p>

                                <p>Maecenas congue risus enim, a bibendum erat sodales non. Aliquam sodales nunc id nisi scelerisque, eu semper neque condimentum. Suspendisse at purus eget velit volutpat consequat. Sed sodales, enim a pretium euismod, dui nunc venenatis enim, a hendrerit diam mauris sed ligula. Integer malesuada velit velit, et rhoncus velit finibus eu. Nam faucibus nulla lectus, eu laoreet mi rhoncus sed. Suspendisse iaculis mollis faucibus. Phasellus nisi ex, lacinia ac velit eget, congue ultrices ante. Vestibulum a ex dui. Etiam eget ex sodales, semper urna et, faucibus nisi. Etiam vehicula, elit in efficitur pretium, quam quam pellentesque tellus, vel laoreet erat leo id tortor. Morbi lobortis erat non ipsum hendrerit, non venenatis erat tempus. Nunc laoreet malesuada dolor, nec iaculis mi suscipit hendrerit. Aliquam arcu magna.</p>
                            </div><!-- .entry-content -->


                            <footer class="entry-footer">
                                <div class="post-tags">
                                <span class="tags-links">
                                    <i class="fa fa-tags"></i><a href="#">Technology,</a> <a href="#" rel="tag">material design</a>
                                </span>
                                </div> <!-- .post-tags -->

                                <ul class="list-inline right share-post">
                                    <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                    </li>
                                </ul>
                            </footer>

                            </article><!-- /.post-wrapper -->

                            <nav class="single-post-navigation" role="navigation">
                            <div class="row">
                                <!-- Previous Post -->
                                <div class="col-xs-6">
                                <div class="previous-post-link">
                                    <a class="waves-effect waves-light" href="#"><i class="fa fa-long-arrow-left"></i>Read Previous Post</a>
                                </div>
                                </div>

                                <!-- Next Post -->
                                <div class="col-xs-6">
                                <div class="next-post-link">
                                    <a class="waves-effect waves-light" href="#">Read Next Post<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                </div>
                            </div> <!-- .row -->
                            </nav>

                            <div class="comments-wrapper">
                            <div class="comments-tab">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation" class="active"><a href="#default-comment" class="waves-effect waves-light"  role="tab" data-toggle="tab">Leave a comment now</a></li>
                                <li role="presentation"><a href="#facebook-comment" class="waves-effect waves-light" role="tab" data-toggle="tab">Facebook Comment</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="panel-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="default-comment">
                                    <div class="comment-respond">

                                        <form action="#" method="post" id="commentform" novalidate="" role="form">
                                        <div class="form-group">
                                            <div class="row">

                                            <div class="col-sm-4 comment-form-author">
                                                <input class="form-control" id="author" placeholder="Your Name" name="author" type="text" value="" aria-required="true">
                                            </div>

                                            <div class="col-sm-4 comment-form-email">
                                                <input id="email" class="form-control" name="email" placeholder="Email Address" type="email" value="" aria-required="true">
                                            </div>

                                            <div class="col-sm-4 comment-form-subject">
                                                <input class="form-control" placeholder="Subject" id="subject" name="subject" type="text" value="">
                                            </div>

                                            </div>

                                        </div>

                                        <div class="form-group comment-form-comment">
                                            <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="8" aria-required="true"></textarea>
                                        </div>

                                        <div class="form-submit">
                                            <button class="btn btn-lg pink waves-effect waves-light" name="submit" type="submit" id="submit" value="" >Submit</button>
                                        </div>
                                        </form>

                                    </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="facebook-comment">
                                        <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>

                                        <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                                    </div>
                                </div><!-- /.tab-content -->
                                </div><!-- /.panel-body -->
                                
                            </div><!-- /.comments-tab -->



                            <ul class="media-list comment-list mt-30">

                                <!-- Comment Item start-->
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="avatar" src="assets/img/blog/commenter-1.jpg" alt="Jonathon Doe">
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <div class="comment-info">
                                            <h4 class="author-name">Jonathon Doe</h4>

                                            <div class="comment-meta">
                                                <a class="comment-report-link" href="#">Report</a>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                            </div>
                                        </div>

                                        <p>Risus et cubilia lacus vestibulum conubia parturient scelerisque tincidunt ac habitant libero duis sagittis vestibulum dolor venenatis.Nostra cras in dis in a dignissim est in per sem consectetur.</p>

                                        <!--  second level Comment start-->
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="avatar" src="assets/img/blog/commenter-3.jpg" alt="Natalie Portman">
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="comment-info">
                                                    <h4 class="author-name">Natalie Portman</h4>
                                                    
                                                    <div class="comment-meta">
                                                        <a class="comment-report-link" href="#">Report</a>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                </div>

                                                <p>Risus et cubilia lacus vestibulum conubia parturient scelerisque tincidunt ac habitant libero duis sagittis.</p>
                                            </div>
                                        </div>
                                        <!-- second level Comment end -->

                                        <!--  second level Comment start-->
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="avatar" src="assets/img/blog/commenter-1.jpg" alt="Jonathon Doe">
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="comment-info">
                                                    <h4 class="author-name">Jonathon Doe</h4>
                                                    
                                                    <div class="comment-meta">
                                                        <a class="comment-report-link" href="#">Report</a>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                </div>

                                                <p>Risus et cubilia lacus vestibulum conubia parturient scelerisque tincidunt ac habitant libero duis sagittis.</p>
                                            </div>
                                        </div>
                                        <!-- second level Comment end -->
                                    </div>
                                </li>
                                <!-- End Comment Item -->

                                <!-- Comment Item start-->
                                <li class="media">

                                    <div class="media-left">
                                        <a href="#">
                                            <img class="avatar" src="assets/img/blog/commenter-2.jpg" alt="Michael Ethan">
                                        </a>
                                    </div>

                                    <div class="media-body">

                                        <div class="comment-info">
                                            <h4 class="author-name">Michael Ethan</h4>
                                            
                                            <div class="comment-meta">
                                                <a class="comment-report-link" href="#">Report</a>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                            </div>
                                        </div>

                                        <p>Risus et cubilia lacus vestibulum conubia parturient scelerisque tincidunt ac habitant libero duis sagittis.</p>

                                    </div>
                                </li>
                                <!-- End Comment Item -->

                            </ul>

                            </div><!-- /.comments-wrapper -->

                        </div><!-- /.posts-content -->
                        </div><!-- /.col-md-12 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>
            <!-- blog section end -->


        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>
    </body>
</html>