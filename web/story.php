<!DOCTYPE html>
<?php 
    include_once('components/connection.php');
?>

<?php 
  
  $page = "story";
  session_start();
  include_once("components/islogin.php");

  if(!isset($_GET['story'])){
      header('Location: stories.php');
  }
  $stid = $_GET['story'];

  echo $stid;

   $result = mysqli_query($conn,"SELECT story_table.st_title,story_table.st_date, story_table.st_content, story_table.st_id,story_table.st_heroimg,user_table.u_avatar,user_table.u_fname,user_table.u_lname,user_table.u_id 
    FROM story_table
    INNER JOIN user_table ON user_table.u_id=story_table.u_id_fk AND st_id=$stid;");

    $story = mysqli_fetch_assoc($result);

    print_r($story);

    // if(!isset($story)){
    //     header('Location: stories.php');

    // }

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
                            <li ><a href="#">Stories</a></li>
                            <li class="active"><a href="#"><?php echo $story["st_title"]; ?></a></li>
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
                                <h2 class="entry-title"><?php echo $story["st_title"]; ?></h2>

                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-user"></i><a href="<?php echo "user.php?user=".$story["u_id"]; ?>"><?php echo $story["u_fname"]." ".$story['u_lname']; ?></a>
                                        </li>

                                        <li>
                                            <i class="fa fa-clock-o"></i><a href="#"><?php echo $story["st_date"]; ?></a>
                                        </li>

                                        <!--<li>
                                            <i class="fa fa-heart-o"></i><a href="#"><span>1</span></a>
                                        </li>

                                        <li>
                                            <i class="fa fa-comment-o"></i><a href="#">3</a>
                                        </li>-->
                                    </ul>
                                </div><!-- .entry-meta -->
                                </div>

                            </header><!-- /.entry-header-wrapper -->

                            <div class="thumb-wrapper">
                                <img src="<?php echo $story["st_heroimage"]; ?>" class="img-responsive" alt="" >
                            </div><!-- .post-thumb -->


                            <div class="entry-content">
                                <?php echo $story["st_content"]; ?>
                            </div><!-- .entry-content -->


                            <footer class="entry-footer">
                                <!--<div class="post-tags">
                                <span class="tags-links">
                                    <i class="fa fa-tags"></i><a href="#">Technology,</a> <a href="#" rel="tag">material design</a>
                                </span>
                                </div>  .post-tags -->

                                <!--<ul class="list-inline right share-post">
                                    <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                    </li>
                                </ul>-->
                            </footer>

                            </article><!-- /.post-wrapper -->

                            <nav class="single-post-navigation" role="navigation">
                            <div class="row">
                                <!-- Previous Post -->
                                <div class="col-xs-6">
                                <div class="previous-post-link">
                                    <a class="waves-effect waves-light" href="<?php echo "story.php?story=".$story["st_id"]-10; ?>"><i class="fa fa-long-arrow-left"></i>Read Previous Post</a>
                                </div>
                                </div>

                                <!-- Next Post -->
                                <div class="col-xs-6">
                                <div class="next-post-link">
                                    <a class="waves-effect waves-light" href="<?php echo "story.php?story=".$story["st_id"]+10; ?>">Read Next Post<i class="fa fa-long-arrow-right"></i></a>
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