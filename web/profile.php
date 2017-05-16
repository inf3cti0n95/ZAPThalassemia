<!DOCTYPE html>
<?php
    include_once("components/connection.php");
 ?>
<?php 
  
  $page = "profile";
  session_start();
  include_once("components/islogin.php");
  if(!$login){
    header('Location: login.php');
  }


  $q = "SELECT * from user_table where u_id=$userid";
  if($r = mysqli_query($conn,$q))
    {
      $profile = mysqli_fetch_assoc($r);
    }
    else 
    mysqli_error($conn);


    $q = "SELECT * from story_table where u_id_fk=$userid";
    $r = mysqli_query($conn,$q)


    $q = "SELECT * from tip_table where u_id_fk=$userid";
    $tips = mysqli_query($conn,$q)
    

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

                                    <h2 style="text-transform: capitalize;"><?php echo $profile['u_fname']." ".$profile['u_lname'] ?></h2>
                                </div>

                                
                                
                            </div> <!-- /author-info-wrapper -->
                          </div><!-- /.widget_tt_author_widget -->


                          <div  class="widget widget_tt_popular_post">
                            <div class="tt-popular-post border-bottom-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Stories</a>
                                    </li>
                                    <li class="">
                                        <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">Tips</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- latest post tab -->
                                    <div id="tt-popular-post-tab1" class="tab-pane fade active in">

                                      

                                    <?php
                                     while($row = mysqli_fetch_assoc($r)){

                                       $imgUrl = $row['st_heroimg'];
                                       $title = $row['st_title'];
                                       $url = "story.php/?story=".$row['st_id'];

                                      echo " <div class='media'>
                                        <a class='media-left' href='#'>
                                          <img src='$imageUrl' alt=''>
                                        </a>

                                        <div class='media-body'>
                                          <h4><a href='$url'>$title</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media --> ";

                                     }
                                     
                                      ?>

                                      
                                     
                                     
                                    </div>

                                    <!-- popular post tab-->
                                    <div id="tt-popular-post-tab2" class="tab-pane fade">

                                      
                                    <?php
                                     while($row = mysqli_fetch_assoc($tips)){

                                       $tip_content = $row['tip_content'];
                                       

                                      echo " <div class='media'>
                                        

                                        <div class='media-body'>
                                          <h4><a href='$url'>$tip_content</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media --> ";

                                     }
                                     
                                      ?>

                                    </div>
                                </div><!-- /.tab-content -->
                            </div><!-- /.tt-popular-post -->
                          </div><!-- /.widget_tt_popular_post -->


                          


                       
        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->
        
                </div>
            </div>
            
            </section>


        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>
    </body>
</html>