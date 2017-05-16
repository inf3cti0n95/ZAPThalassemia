<!DOCTYPE html>
<?php 
  
  $page = "report";
  session_start();
  include_once("components/islogin.php");
//   if(!$login){
//     header('Location: login.php');
//   }


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
                            <li class="active"><a href="">Reports</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding ptb-100 white">
            
            <div class="container">
                <div class="row">

                    <form action="" id="axisform">
                    


                    <p>
                    <input class="with-gap" name="xaxis" value="md_religion" type="radio" id="rel" />
                    <label for="rel" style="font-size: 16px; font-weight: 400;">Religion</label>
                    </p>
                    <p>
                    <input class="with-gap" name="xaxis" value="md_gender" type="radio" id="gen" />
                    <label for="gen" style="font-size: 16px; font-weight: 400;">Gender</label>
                    </p>
                    <p>
                    <input class="with-gap" name="xaxis" value="md_bloodgrp" type="radio" id="bg" />
                    <label for="bg" style="font-size: 16px; font-weight: 400;">BloodGroup</label>
                    </p>

                    <p>
                    <input class="with-gap" name="yaxis" value="major" type="radio" id="major" />
                    <label for="major" style="font-size: 16px; font-weight: 400;">Major</label>
                    </p>
                    <p>
                    <input class="with-gap" name="yaxis" value="minor" type="radio" id="minor" />
                    <label for="minor" style="font-size: 16px; font-weight: 400;">Minor</label>
                    </p>
                    <p>
                    <input class="with-gap" name="yaxis" value="normal" type="radio" id="normal" />
                    <label for="normal" style="font-size: 16px; font-weight: 400;">Normal</label>
                    </p>


                    <button type="submit"  class="btn btn-lg blue mt-20 waves-effect waves-light mr-20">Submit</button>
                    
                    </form>
                    


                </div>
            </div>
            
            </section>


        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>

        <script>
        
        
            $('#axisform').submit(function(e){

                    e.preventDefault();

                    console.log(e)


            });
        
        
        </script>
    </body>
</html>