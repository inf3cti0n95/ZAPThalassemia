<!DOCTYPE html>
<?php 
  
  $page = "profile";
  session_start();
  include_once("components/islogin.php");
  $userid = 13;

   

?>
<html lang="en">
    <head>
        <?php include_once("components/head.php") ?>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />

        <style>

            a[href$="https://www.froala.com/wysiwyg-editor?k=u"]{
                display: none !important;
            }
            label{
                line-height: 16px;
            }

        </style>



    </head>
    <body id="top" class="has-header-search">
        <?php include_once("components/navigation.php") ?>

<section class="page-title ptb-110">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Publish Tip</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="">Publish Tip</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding pt-100 mb-50" style="padding-top: 100px; ">
        <div class="container">
                <div class="row">

            <form class="ptb-50" action="" method="post" enctype="multipart/form-data" >  

                   
                    <input type="hidden" name="user" id="uid" value="<?php echo $userid?>">

                    <textarea name="content" id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
                    <button type="submit"  class="btn btn-lg blue mt-20 waves-effect waves-light mr-20">Publish Tip</button>

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

                let formData = new FormData(this);
                console.log($("#froala-editor").val());
                console.log($("#uid").val());


                 var request = new XMLHttpRequest();
                request.open("POST", "/components/processtip.php");
                request.send(formData);
                request.addEventListener("load", reqListener);
                function reqListener () {
                    console.log(this.responseText);        
                
                  if(this.responseText.trim() === "Entered"){
                      alert("Tip Published Successfully");
                      window.location.href = "/";
                  }
                }


            });
        </script>
    </body>
</html>