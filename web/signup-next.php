<!DOCTYPE html>
<?php 
  session_start();
  $page = "login";
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

        <script>
        
             $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        </script>
        
    </body>
</html>