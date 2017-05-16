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

  

   $result = mysqli_query($conn,"SELECT story_table.st_title,story_table.st_date, story_table.st_content, story_table.st_id,story_table.st_heroimg,user_table.u_avatar,user_table.u_fname,user_table.u_lname,user_table.u_id 
    FROM story_table
    INNER JOIN user_table ON user_table.u_id=story_table.u_id_fk AND st_id=$stid;");

    

    $story = mysqli_fetch_assoc($result);


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
<section class="page-title ptb-110">            <div class="container">
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
                                            <i class="fa fa-user"></i><a style='text-transform: capitalize;' href="<?php echo "user.php?user=".$story["u_id"]; ?>"><?php echo $story["u_fname"]." ".$story['u_lname']; ?></a>
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

                            <!--<nav class="single-post-navigation" role="navigation">
                            <div class="row">
                                <div class="col-xs-6">
                                <div class="previous-post-link">
                                    <a class="waves-effect waves-light" href="<?php echo "story.php?story=".$story["st_id"]-10; ?>"><i class="fa fa-long-arrow-left"></i>Read Previous Post</a>
                                </div>
                                </div>

                                <div class="col-xs-6">
                                <div class="next-post-link">
                                    <a class="waves-effect waves-light" href="<?php echo "story.php?story=".$story["st_id"]+10; ?>">Read Next Post<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                </div>
                            </div> 
                            </nav>-->

                            <div class="comments-wrapper">
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://zapthalassaemia.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
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