<!DOCTYPE html>



<?php 
  
  $page = "home";
  include_once("islogin.php");

?>

<html lang="en">
    <head>
        <?php include_once("head.php") ?>
    </head>


    <body id="top" class="has-header-search">

       <?php include_once("navigation.php") ?>
        <!-- Hero Section -->
        <section class="banner-wrapper banner-15 fullscreen-banner valign-wrapper">
            <div class="valign-cell">
              <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="intro-title text-uppercase mb-50">Zap Thalassaemia</h1>
                        <p class="text-medium" style="color: black">We combine digital craftsmanship with innovative thinking to help eradicate Thalassemia.</p>

                        <a href="#" class="btn btn-lg blue mt-20 waves-effect waves-light mr-20">Research</a>
                        <a href="#" class="btn btn-lg black mt-20 waves-effect waves-light">Stories</a>
                    </div><!-- row -->
                </div><!-- row -->
              </div><!-- /.container -->
            </div><!-- /.valign-cell -->
        </section>
        <!-- Hero Section End -->


        <div class="full-width promo-box dark-bg">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="white-text text-bold text-uppercase mb-30 center">About <span class="brand-color">Thalassaemia</span></h2>
                            <div class="white-text text-uppercase center">Thalassemias are inherited blood disorders characterized by abnormal hemoglobin production. Symptoms depend on the type and can vary from none to severe. Often there is mild to severe anemia (low red blood cells). Anemia can result in feeling tired and pale skin. There may also be bone problems, an enlarged spleen, yellowish skin, dark urine, and among children slow growth.</div>
                        
                    </div>
                </div>
            </div>

        <section id="review" class="section-padding brand-bg">
          <div class="container">

              <div class="row" style="margin: 0; padding: 0;">
                    <h1 class="center" style="padding: 20px 0px; margin: 20px 0px; color: white">Tip of the Day</h1>
                </div>

              <div class="row">
                <div class="col-md-8 col-md-offset-2">

                  <div class="thumb-carousel circle-thumb text-center">
                    <ul class="slides">
                      <li data-thumb="assets/img/client-thumb/5.png">
                        <div class="icon">
                            <img src="assets/img/quote-dark.png" alt="Customer Thumb">
                        </div>
                        <div class="content white-text">
                            <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>

                            <div class="testimonial-meta">
                                John Doe,
                                <span class="white-text">User Interface Designer</span> 
                            </div>
                        </div>
                      </li>
                      <li data-thumb="assets/img/client-thumb/2.png">
                        <div class="icon">
                            <img src="assets/img/quote-dark.png" alt="Customer Thumb">
                        </div>
                        <div class="content white-text">
                            <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>

                            <div class="testimonial-meta">
                                Elita Karim,
                                <span class="white-text">User Interface Designer</span> 
                            </div>
                        </div>
                      </li>
                      <li data-thumb="assets/img/client-thumb/3.png">
                        <div class="icon">
                            <img src="assets/img/quote-dark.png" alt="Customer Thumb">
                        </div>
                        <div class="content white-text">
                            <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>

                            <div class="testimonial-meta">
                                Tomas Udoya,
                                <span class="white-text">User Interface Designer</span> 
                            </div>
                        </div>
                      </li>
                      <li data-thumb="assets/img/client-thumb/4.png">
                        <div class="icon">
                            <img src="assets/img/quote-dark.png" alt="Customer Thumb">
                        </div>
                        <div class="content white-text">
                            <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>

                            <div class="testimonial-meta">
                                Jonathon Bin,
                                <span class="white-text">User Interface Designer</span> 
                            </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                </div>
              </div><!-- /.row -->

          </div><!-- /.container -->
        </section> 
        <!-- /.TIPS SECTION-->

         <!-- Grid News -->
        <section class="section-padding default-blog grid-blog">
            <div class="container">

                <div class="row">
                    <h1 class="center mb-30">Popular Stories</h1>
                </div>

              <div class="row">



                <?php 
                
                for($i=0;$i<5;$i++){
                  
                $imageSrc = "assets/img/blog/blog-5.jpg";
                $title = "This is title";
                $commentCount = 25;
                $authorImage = "assets/img/blog/author.jpg";
                $authorUrl = "#";
                $storyUrl = "#";
                $storyExerpt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ratione blanditiis, eaque tempore esse, soluta! Enim natus, recusandae, nobis reprehenderit dicta eaque quo soluta officiis in. Autem laboriosam, qui quos.";

                  echo "<div class='col-md-4'>
                    <article class='post-wrapper'>

                      <div class='thumb-wrapper'>
                        <img src='$imageSrc' class='img-responsive' alt='' >

                        <div class='entry-header'>
                          

                          <h2 class='entry-title'><a href='$storyUrl'>$title</a></h2>

                        </div><!-- .entry-header -->

                        <div class='author-thumb waves-effect waves-light'>
                          <a href='$authorUrl'><img src='$authorImage' alt=''></a>                
                        </div>

                        <span class='post-comments-number'>
                          <i class='fa fa-comments'></i><a href='$storyUrl#comments'>$commentCount</a>
                        </span>

                      </div><!-- .post-thumb -->


                      <div class='entry-content'>
                        <p>$storyExerpt</p>
                      </div><!-- .entry-content -->
                      <div class='center'><a href='$storyUrl' class='waves-effect waves-light btn'>Read More</a></div>
                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->";
                }
                
                ?>
                  
                

              </div>
            </div><!-- /.container -->
        </section>
        <!-- Grid News End -->


        <?php include_once("footer.php") ?>



        <?php include_once("scripts.php") ?>

    </body>

</html>