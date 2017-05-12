<!DOCTYPE html>
<?php 
  
  $page = "profile";
  session_start();
  include_once("components/islogin.php");
  if(!($login && $isDoctor)){
    header('Location: index.php');
  }


?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
    </head>
    <body id="top" class="has-header-search">
        <?php include_once("components/navigation.php") ?>

    <section class="section-padding pt-100 mb-50" style="padding-top: 100px; ">
            <div class="container">
                    <div class="row">

                <form class="ptb-50" action="" method="post" enctype="multipart/form-data" >  
        <label for="heroimg" style="font-size: 16px;">Enter the CSV File</label>
        <div class="file-field input-field">
        <div class="btn">
            <input name="fileToUpload" type="file" id="heroimg">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
        </div>
        <input type="hidden" name="user" value="<?php echo $userid;?>">

           </form>
            </div>
            </div>
        </section>



        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>
        <script>
        
             $('form').submit(function(e){
                e.preventDefault();

            
                let formData = new FormData(this);
               


                 var request = new XMLHttpRequest();
                request.open("POST", "/components/processdata.php");
                request.send(formData);
                request.addEventListener("load", reqListener);
                function reqListener () {
                    console.log(this.responseText);        
                
                  if(this.responseText.trim() === "Entered"){
                      alert("Data Submitted Successfully");
                      window.location.href = "/";
                  }
                }


            });
        
        </script>
    </body>
</html>