<!DOCTYPE html>
<?php 
  
  $page = "Research";
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
                            <li class="active"><a href="">Profile</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding ptb-100 white">
            
            <div class="container">
                <div class="row">

                    <form action="" id="axisform">
                    
                    <input type="radio" name="xaxis" value="md_religion"/> Religion
                    <input type="radio" name="xaxis" value="caste"/> Caste
                    <input type="radio" name="xaxis" value="md_gender"/> Gender
                    <input type="radio" name="xaxis" value="md_bloodgrp"/> BloodGroup


                    <input type="radio" name="yaxis" value="major"/> Major
                    <input type="radio" name="yaxis" value="minor"/> Minor
                    <input type="radio" name="yaxis" value="normal"/> Normal


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