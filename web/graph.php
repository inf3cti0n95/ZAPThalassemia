<!DOCTYPE html>
<?php 
  
  $page = "report";
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
                            <li class="active"><a href="">Reports</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding ptb-100 white">
            
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                                            <form action="" id="axisform">
                    

                                            <h2>Parameter 1</h2>

                    <p>
                    <input class="with-gap" name="xaxis" value="md_religion" type="radio" id="rel" />
                    <label for="rel" style="font-size: 16px; font-weight: 400;">Religion</label>
                    </p>
                    <p>
                    <input class="with-gap" name="xaxis" value="md_gender" type="radio" id="gen" />
                    <label for="gen" style="font-size: 16px; font-weight: 400;">Gender</label>
                    </p>
                    <p>
                    <input class="with-gap" name="xaxis" value="md_bloodgrp" type="radio" id="bg" />
                    <label for="bg" style="font-size: 16px; font-weight: 400;">BloodGroup</label>
                    </p>
                                                                <h2>Parameter 2</h2>


                    <p>
                    <input class="with-gap" name="yaxis" value="major" type="radio" id="major" />
                    <label for="major" style="font-size: 16px; font-weight: 400;">Major</label>
                    </p>
                    <p>
                    <input class="with-gap" name="yaxis" value="minor" type="radio" id="minor" />
                    <label for="minor" style="font-size: 16px; font-weight: 400;">Minor</label>
                    </p>
                    <p>
                    <input class="with-gap" name="yaxis" value="normal" type="radio" id="normal" />
                    <label for="normal" style="font-size: 16px; font-weight: 400;">Normal</label>
                    </p>


                    <button type="submit"  class="btn btn-lg blue mt-20 waves-effect waves-light mr-20">Submit</button>
                    
                    </form>

                    </div>                    
                    <div class="col-md-8">
                    
                        <div class="" id="grapharea"></div>
                        <canvas id="myChart" width="400" height="400"></canvas>

                    
                    </div>                    


                </div>
            </div>
            
            </section>


        <?php include_once("components/footer.php") ?> 



        <?php include_once("components/scripts.php") ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>

        <script>
            var ctx = document.getElementById("myChart");
            var data = {
            labels: [],
            datasets: [
                {
                    label: "Report",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: [],
                }
            ]
        };
        
            $('#axisform').submit(function(e){

                    e.preventDefault();
                    let formData = new FormData(this)
                    console.log()
                    var request = new XMLHttpRequest();
                    request.open("POST", "/components/getreportdata.php");
                    request.send(formData);
                    request.addEventListener("load", reqListener);
                    var myBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: data
                        });

 
                    function reqListener () {
                        let req = JSON.parse(this.responseText);
                        resetCanvas();
                        data.labels = req.label;

                        req.data = req.data.map((d)=>{
                            return eval(d);
                        })

                        

                        data.datasets[0].data = req.data;
                        console.log(data)

                        
                    }

            });       

            var resetCanvas = function () {
            $('#myChart').remove(); // this is my <canvas> element
            $('#grapharea').append('<canvas id="myChart"><canvas>');
            canvas = document.querySelector('#myChart'); // why use jQuery?
            ctx = canvas.getContext('2d');
            
            };
                    
        </script>
    </body>
</html>