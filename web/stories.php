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
                        
                            while ($row = mysqli_fetch_assoc($result)) {

                                if($row["u_avatar"] == ""){
                                    $avatar = "assets/img/client-thumb/5.png";
                                }else{
                                    $avatar = $row["u_avatar"];
                                }

                                $storyThumb = $row["st_heroimg"];
                                $storyTitle = $row["st_title"];
                                $storyUrl = "story.php?story=".$row["st_id"];
                                $authorImg = $avatar;
                                $authorUrl = "user.php?user=".$row["u_id"];
                                $storyExerpt = substr(strip_tags($row["st_content"]),30)."...";
                                    echo "
                                    
                                        
                                <article class='post-wrapper'>

                                <div class='thumb-wrapper'>
                                    <img src='$storyThumb' class='img-responsive blue'  style='min-height:250px; max-height:350px;' alt='' >

                                    <div class='entry-header'>
                                    

                                    <h2 class='entry-title'><a href='$storyUrl'>$storyTitle</a></h2>

                                    </div><!-- .entry-header -->

                                    <div class='author-thumb waves-effect waves-light'>
                                    <a href='$authorUrl'><img src='$authorImg' alt=''></a>                
                                    </div>

                                    

                                </div><!-- .post-thumb -->


                                <div class='entry-content'>
                                    <p>$storyExerpt</p>
                                </div><!-- .entry-content -->

                                <a href='$storyUrl' class='btn btn-lg blue mt-20 waves-effect waves-light mr-20'>Read More</a>

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