<!DOCTYPE html>
<?php 
  session_start();
  $page = "login";
  include_once("components/islogin.php");

  if(isset( $_REQUEST['username']) &&  $_REQUEST['username']!= ""){

      $_SESSION['user']["fname"] = "Viraj";
      $_SESSION['user']["lname"] = "Viraj";
      $_SESSION['user']["id"] = "Viraj";

      header('Location: index.php');
  }


?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
    </head>
    <body id="top" class="has-header-search">
        
        



        <?php include_once("components/navigation.php") ?>
        <section class="section-padding banner-15">
        <div class="container">

                
                <div class="login-wrapper">
                <div class="card-wrapper"></div>
                  <div class="card-wrapper">
                                      <h1 class="title">Login</h1>

            <form action="<?=($_SERVER['PHP_SELF'])?>" method="post">

               <div class="input-container">
                        <input type="text" name="username" required="required" autocomplete="off" />
                        <label for="username">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" name="password" required="required" autocomplete="off" />
                        <label for="password">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <button type="submit" href="" class="btn btn-lg btn-block waves-effect waves-light">Login</button>
                      </div>
            
            </form>
            </div>
            </section>

        <?php include_once("components/footer.php") ?>
        <?php include_once("components/scripts.php") ?>
         </body>
</html>