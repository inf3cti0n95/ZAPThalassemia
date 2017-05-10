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
        
        <section class="section-padding banner-12" id="form1sec">
          <div class="container">
              <div class="login-wrapper">

                  <div class="card-wrapper"></div>

                    <div class="card-wrapper">
                      <h1 class="title">Sign Up - Basic Details</h1>
                      <form id="form1" action="signup-next.php" method="post">
                        <div class="input-container">
                          <input type="text" name="fname" required="required" autocomplete="off" />
                          <label for="username">First Name</label>
                          <div class="bar"></div>
                        </div>

                        <div class="input-container">
                          <input type="text" name="lname" required="required"  autocomplete="off" />
                          <label for="username">Last Name</label>
                          <div class="bar"></div>
                        </div>

                        <div class="input-container">
                          <input style="border-bottom:1px solid black;" type="email" name="email" required="required"  autocomplete="off" />
                          <label for="username">Email</label>
                        </div>

                        <div class="input-container">
                          <input type="password" name="password" required="required" autocomplete="off" />
                          <label for="username">Password</label>
                          <div class="bar"></div>
                        </div>

                        <div class="input-container">
                          <input type="password" name="cpassword" required="required"  autocomplete="off" />
                          <label for="password">Confirm Password</label>
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

        <section class="section-padding banner-12" style="display:none;" id="form2sec">
          <div class="container">
              <div class="login-wrapper">

                  <div class="card-wrapper"></div>

                    <div class="card-wrapper">
                      <h1 class="title">Sign Up - More Details</h1>
                      <form id="form2" action="signup-health.php" method="post">
                        <div style="margin:10px 60px;" class="input-container">
    
                          <input style="border-bottom:1px solid black;" type="number" id="phno" name="phno" checked required="required" autocomplete="off" />
                            <label style="font-size: 16px; font-weight: 400;" for="phno">Phone Number</label>
                        </div>

                        <div style="margin:30px 60px 30px 60px;" >
                            <label for="bdate" style="font-size: 16px; font-weight: 400;">Birthdate</label>
                            <input name="birthdate" type="date" id="bdate" style=" border-bottom: 1px black solid;" class=" picker__input">
                        </div>

                        <div  style="margin:10px 60px;">
                            <h2 style="font-size: 16px; font-weight: 400;" >Gender</h2>
                            <p>
                            <input class="with-gap" name="gender" value="male" type="radio" id="gmale" />
                            <label for="gmale" style="font-size: 16px; font-weight: 400;">Male</label>
                            </p>
                            <p>
                            <input class="with-gap" name="gender" value="female" type="radio" id="gfmale" />
                            <label for="gfmale" style="font-size: 16px; font-weight: 400;">Female</label>
                            </p>
                        
                        </div>

                        <div style="margin:30px 60px 30px 60px;" class="input-field input-container">
                        <h2 for="nation" style="font-size: 16px; font-weight: 400;">Nationality</h2>

                          <select name="nation" id="nation" class="browser-default" style="background: none; outline: 1px powderblue solid;">
                            <option value="indian"> Indian </option>
                            <option value="american"> American </option>
                            <option value="chinese"> Chinese </option>
                            <option value="japanese"> Japanese </option>
                            <option value="russian"> Russian </option>
                            <option value="british"> British </option>
                            <option value="french"> French </option>
                            <option value="german"> German </option>
                            <option value="korean"> Korean </option>
                        </select>
                        </div>

                        <div style="margin:30px 60px 30px 60px;" class="input-field input-container">
                        <h2 for="religion" style="font-size: 16px; font-weight: 400;">Religion</h2>

                          <select id="religion" name="religion" class="browser-default" style="background: none; outline: 1px powderblue solid;">
                            <option value="hinduism"> Hinduism </option>
                            <option value="buddhism"> Buddhism </option>
                            <option value="Islam"> Islam </option>
                            <option value="Christianity"> Christianity </option>
                            <option value="taoism"> Taoism </option>
                            <option value="confucianism"> Confucianism </option>
                            <option value="shinto"> Shinto </option>
                            <option value="judaism"> Judaism </option>
                            <option value="jainism"> Jainism </option>
                            <option value="sikhism"> Shikhism </option>
                            <option value="jewish"> Jewish </option>
                        </select>
                        </div>
                        <div style="margin:10px 60px 60px 60px;" class="input-container">
    
                          <input type="text" id="caste" name="caste" checked required="required" autocomplete="off" />
                            <label style="font-size: 16px; font-weight: 400;" for="caste">Caste</label>
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

        <section style="display:none;" class="section-padding banner-12" id="form3sec">
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
                        <h2 for="bloodgroup" style="font-size: 16px; font-weight: 400;">Blood Group</h2>

                          <select name="bloodgroup" id="bloodgroup" class="browser-default" style="background: none; outline: 1px powderblue solid;">
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
    
                          <input type="text" id="docregid" name="docregid" value="" />
                            <label style="font-size: 16px; font-weight: 400;" for="docregid">Doctor Registration ID</label>
                          <div class="bar"></div>
                        </div>
                        <div class="button-container">
                          <button type="submit" href="" class="btn btn-lg btn-block waves-effect waves-light">Sign Up</button>
                        </div>
                      </form>
                    </div>

              </div>
          </div>
        </section>

        <div id="modal1" style="display:none;" class="modal">
            <div class="modal-content">
            <h4>Registered Successfully</h4>
            <p>Congratulations! You have been registered to ZAP Thalassemia</p>
            <a href="index.php" onclick="$('#modal1').close();" class="modal-action modal-close waves-effect waves-green btn-flat">Okay</a>
            </div>
        </div>

        <?php include_once("components/footer.php") ?>
        <?php include_once("components/scripts.php") ?>

        <script>

           $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      


            $('.utype').click(function(e){
          if(this.value === "doctor"){
            $("#docreg").show();
          }else{
            $("#docreg").hide();
          
          }
        });

             var form1Data ;
             var formData = new FormData();
             var form2Data;
             var form3Data;

        
            $('#form1').submit(function(e){
                e.preventDefault();
                let form1 = $('#form1 :input');

                for(let i=0; i<form1.length-1;i++){
                    console.log(form1[i].name,"-",form1[i].value);
                    // formData.append(form1[i].name,form1[i].value)
                }
               
               form1Data = new FormData(this);

                $("#form1sec").hide();
                $(window).scrollTop(0);
                $("#form2sec").show();
            });

            $('#form2').submit(function(e){
                e.preventDefault();
                let form2 = $('#form2 :input');

                for(let i=0; i<form2.length-1;i++){
                    console.log(form2[i].name,"-",form2[i].value)
                                        // formData.append(form2[i].name,form2[i].value)

                }
                

               form2Data = new FormData(this);
 
                $("#form2sec").hide();
                $(window).scrollTop(0);
                $("#form3sec").show();
            });
        

             $('#form3').submit(function(e){
                e.preventDefault();
                let form3 = $('#form3 :input');

                for(let i=0; i<form3.length-1;i++){
                    console.log(form3[i].name,"-",form3[i].value)
                                        // formData.append(form3[i].name,form3[i].value)

                }
                

               form3Data = new FormData(this);

                $("#form2sec").hide();
                $("#form3sec").show();


                //  console.log(form1Data,form2Data,form3Data)

                for(var pair of form1Data.entries()) {
                 console.log(pair[0]+ ', '+ pair[1]); 
                }
                for(var pair of form2Data.entries()) {
                 console.log(pair[0]+ ', '+ pair[1]); 
                }
                for(var pair of form3Data.entries()) {
                 console.log(pair[0]+ ', '+ pair[1]); 
                }


                for(var pair of form1Data.entries()) {
                 formData.append(pair[0],pair[1]); 
                }
                for(var pair of form2Data.entries()) {
                 formData.append(pair[0],pair[1]);  
                }
                for(var pair of form3Data.entries()) {
                  formData.append(pair[0],pair[1]); 
                }

                // for (var i=0; i<form1Data.length; i++)
                //     formData.append(form1Data[i].name, form1Data[i].value);
                // for (var i=0; i<form2Data.length; i++)
                //     formData.append(form2Data[i].name, form2Data[i].value);
                // for (var i=0; i<form3Data.length; i++)
                //     formData.append(form3Data[i].name, form3Data[i].value);

                var request = new XMLHttpRequest();
                request.open("POST", "/components/processsignup.php");
                request.send(formData);
                request.addEventListener("load", reqListener);
                function reqListener () {
  console.log(this.responseText);
                
                
                  if(this.responseText.trim() === "Entered"){
                      $('#modal1').modal('open');
                  }
                }


            });

        </script>
        
    </body>
</html>