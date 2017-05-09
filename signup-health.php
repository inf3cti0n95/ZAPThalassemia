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
        
        <section class="section-padding banner-12" id="form3sec">
          <div class="container">
              <div class="login-wrapper">

                  <div class="card-wrapper"></div>

                    <div class="card-wrapper">
                      <h1 class="title">Sign Up - Health Details</h1>
                      <form id="form3" action="signupprocess.php" method="post">
                        
                        

                        <div  style="margin:10px 60px;">
                            <h2 style="font-size: 16px; font-weight: 400;" >Thalassemia Status</h2>
                            <p>
                            <input class="with-gap" name="th_status" value="major" type="radio" id="thmjr" />
                            <label for="thmjr" style="font-size: 16px; font-weight: 400;">Major</label>
                            </p>
                            <p>
                            <input class="with-gap" name="th_status" value="minor" type="radio" id="thmnr" />
                            <label for="thmnr" style="font-size: 16px; font-weight: 400;">Minor</label>
                            </p>
                            <p>
                            <input class="with-gap" name="th_status" value="normal" type="radio" id="thnrml" />
                            <label for="thnrml" style="font-size: 16px; font-weight: 400;">Normal</label>
                            </p>
                        
                        </div>

                        <div style="margin:30px 60px 30px 60px;" class="input-field input-container">
                        <h2 for="nation" style="font-size: 16px; font-weight: 400;">Blood Group</h2>

                          <select id="nation" class="browser-default" style="background: none; outline: 1px powderblue solid;">
                            <option value="A+"> A+ </option>
                            <option value="A-"> A- </option>
                            <option value="B+"> B+ </option>
                            <option value="B-"> B- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB- </option>
                            <option value="O+"> O+ </option>
                            <option value="O-"> O- </option>
                        </select>
                        </div>

                        

                        <div  style="margin:10px 60px;">
                            <h2 style="font-size: 16px; font-weight: 400;" >Register As</h2>
                            <p>
                            <input class="with-gap utype"  name="usertype" value="normal" type="radio" id="normal" />
                            <label for="normal" style="font-size: 16px; font-weight: 400;">Normal User</label>
                            </p>
                            <p>
                            <input class="with-gap utype" name="usertype" value="doctor" type="radio" id="doc" />
                            <label for="doc" style="font-size: 16px; font-weight: 400;">Doctor</label>
                            </p>
                            
                        
                        </div>
                        <div style="margin:10px 60px;display:none;" id="docreg" class="input-container">
    
                          <input type="text" id="docregid" name="docregid" checked required="required" autocomplete="off" />
                            <label style="font-size: 16px; font-weight: 400;" for="docregid">Doctor Registration ID</label>
                          <div class="bar"></div>
                        </div>
                        <div class="button-container">
                          <button type="submit" href="" class="btn btn-lg btn-block waves-effect waves-light">Next</button>
                        </div>
                      </form>
                    </div>

              </div>
          </div>
        </section>

        <?php include_once("components/footer.php") ?>
        <?php include_once("components/scripts.php") ?>

        <script>
        
             $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

        $('.utype').click(function(e){
          if(this.value === "doctor"){
            $("#docreg").show();
          }else{
            $("#docreg").hide();
          
          }
        });
        </script>
        
    </body>
</html>