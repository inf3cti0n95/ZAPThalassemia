<!DOCTYPE html>
<?php 
  
  $page = "story";
  session_start();
  include_once("components/islogin.php");

?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
    </head>
    <body id="top" class="has-header-search">
        <?php include_once("components/navigation.php") ?>
        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>
    </body>
</html>