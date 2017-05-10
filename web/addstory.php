<!DOCTYPE html>
<?php 
  
  $page = "profile";
  session_start();
  include_once("components/islogin.php");
  $userid = 1;


?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />

        <style>

            label{
                line-height: 16px;
            }

        </style>



    </head>
    <body id="top" class="has-header-search">
        <?php include_once("components/navigation.php") ?>

        <section class="page-title ptb-50" style="padding: 50px 0; top:100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Publish Story</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="">Publish Story</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding pt-100 mb-50" style="padding-top: 100px; ">
        <div class="container">
                <div class="row">

            <form class="ptb-50" action="" method="post" enctype="multipart/form-data" >  

                    <label for="title" style="font-size: 16px;">Story Title</label>
                    <input name="title" type="text" id="title" >

                    <div class="file-field input-field">
                    <div class="btn">
                        <input name="heroimg" type="file" id="heroimg">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    </div>
                    <input type="hidden" name="user" value="<?php echo $userid?>">

                    <textarea name="content" id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
                    <button type="submit"  class="btn btn-lg blue mt-20 waves-effect waves-light mr-20">Publish Story</button>

            </form>
            </div>
            </div>
        </section>

        <?php include_once("components/footer.php") ?> 

        <?php include_once("components/scripts.php") ?>
        <!-- Include Editor style. -->

<!-- Include JS file. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js">
</script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js">
</script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
         <script>
            $(function() {
                $('textarea#froala-editor').froalaEditor({
                    heightMin: 400
                })
            });

            $('form').submit(function(e){
                e.preventDefault();

                let content = $("textarea").val();
                let userid  = <?php echo $userid?>;
                let title = $('#title').val();
                let heroimg  = $('#heroimg').val();
                

                let formData = new FormData(this);
                console.log(heroimg)


                 var request = new XMLHttpRequest();
                request.open("POST", "/components/processstory.php");
                request.send(formData);
                request.addEventListener("load", reqListener);
                function reqListener () {
                    console.log(this.responseText);        
                
                  if(this.responseText.trim() === "Entered"){
                      alert("Story Published Successfully");
                      window.location.href = "/";
                  }
                }


            });
        </script>
    </body>
</html>