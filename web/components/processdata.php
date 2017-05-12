<?php
  include_once('connection.php');
?>

<?php

    function removeBomUtf8($s){
    if(substr($s,0,3)==chr(hexdec('EF')).chr(hexdec('BB')).chr(hexdec('BF'))){
        return substr($s,3);
    }else{
        return $s;
    }
    }
 

    $csvfile = $_FILES["fileToUpload"]["tmp_name"];
    $s = removeBomUtf8(file_get_contents($csvfile));
    
    file_put_contents($csvfile,$s);

    $filename = "a.csv";

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename);
    $path = addslashes (realpath("a.csv"));
    echo $path;

    if(mysqli_query($conn,"LOAD DATA INFILE '$path'
     INTO TABLE med_data
     FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'
     LINES TERMINATED BY '\n'
    (md_gender,md_nationality,md_religion,md_caste,md_bloodgrp,md_thstatus)"))
    echo "Entered";
    
    else
    echo mysqli_error($conn);
    
 
 ?>

 
