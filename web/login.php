<!DOCTYPE html>
<?php 
    include_once('components/connection.php');
?>
<?php 
  session_start();
  $page = "login";
  include_once("components/islogin.php");

  if(isset( $_REQUEST['username']) &&  $_REQUEST['username']!= ""){

      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      $result = mysqli_query($conn,"SELECT * FROM user_table where u_email=$username");
      echo "SELECT * FROM user_table where u_email='$username'";

      $r =  mysqli_fetch_assoc($result);
      echo $r['u_email'] . $r['u_pwd'] . $username . $password;

      if($username == $r['u_email'] && $password == $r['u_pwd']){
        $_SESSION['user'] = true;
        $_SESSION['userid'] = $r['u_id'];
        $_SESSION['user_email'] = $r['u_email'];
        $_SESSION['user_avatar'] = $r['u_avatar'];
        $_SESSION['user_isdoctor'] = $r['u_type_fk']==2 ? true : false;
        $_SESSION['user_fname'] = $r['u_fname'];
        $_SESSION['user_lname'] = $r['u_lname'];
        $_SESSION['user_name'] = $r['u_lname']." ".$r['u_lname'];
        
      }
      // header('Location: index.php');
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
                          <label for="username">Email</label>
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
              </div>
          </div>
        </section>

        <?php include_once("components/footer.php") ?>
        <?php include_once("components/scripts.php") ?>
         </body>
</html>