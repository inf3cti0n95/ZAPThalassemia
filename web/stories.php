<!DOCTYPE html>
<?php 
    include_once('components/connection.php');
?>

<?php 
  
  $page = "story";
  session_start();
  include_once("components/islogin.php");

   $result = mysqli_query($conn,"SELECT story_table.st_title, story_table.st_content, story_table.st_id,story_table.st_heroimg,user_table.u_avatar,user_table.u_fname,user_table.u_lname,user_table.u_id 
    FROM story_table
    INNER JOIN user_table ON user_table.u_id=story_table.u_id_fk;");

    

while ($row = mysqli_fetch_assoc($result)) {

    print_r($row);
    }


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

        <section class="blog-section section-padding white" style="background: #f5f5f5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1" ></div>
                    <div class="col-md-10">
                      <div class="posts-content default-blog">


                        <?php
                        
                            for($i = 0; $i < 5 ; $i++){

                                $storyThumb = "assets/img/blog/blog-1.jpg";
                                $storyTitle = "CTC to showcase technology solutions at Sea Air Space Exposition";
                                $storyUrl = "#";
                                $authorImg = "assets/img/blog/author.jpg";
                                $authorUrl = "#";
                                $totalComments = 25;
                                $storyExerpt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";
                                    echo "
                                    
                                        
                                <article class='post-wrapper'>

                                <div class='thumb-wrapper'>
                                    <img src='$storyThumb' class='img-responsive' alt='' >

                                    <div class='entry-header'>
                                    

                                    <h2 class='entry-title'><a href='$storyUrl'>$storyTitle</a></h2>

                                    </div><!-- .entry-header -->

                                    <div class='author-thumb waves-effect waves-light'>
                                    <a href='$authorUrl'><img src='$authorImg' alt=''></a>                
                                    </div>

                                    <span class='post-comments-number'>
                                    <i class='fa fa-comments'></i><a href='$storyUrl#comments'>$totalComments</a>
                                    </span>

                                </div><!-- .post-thumb -->


                                <div class='entry-content'>
                                    <p>$storyExerpt</p>
                                </div><!-- .entry-content -->

                                </article><!-- /.post-wrapper -->

                                    ";
                                
                        
                            }
                        
                         ?>


                        <!--<ul class="pagination post-pagination text-center mt-50">
                          <li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-left"></i></a></li>
                          <li><span class="current waves-effect waves-light">1</span></li>
                          <li><a href="#." class="waves-effect waves-light">2</a></li>
                          <li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-right"></i></a></li>
                        </ul>-->

                      </div><!-- /.posts-content -->
                    </div><!-- /.col-md-8 -->
                                        <div class="col-md-1"></div>

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->


        <?php include_once("components/footer.php") ?> 

        <?php include_once("components/scripts.php") ?>
    </body>
</html>