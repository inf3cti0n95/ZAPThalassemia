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
 
    $u_id_fk = $_REQUEST['user'];

    $csvfile = $_FILES["fileToUpload"]["tmp_name"];
    $handle = fopen($csvfile, "r");
    
    
        while (($data = fgetcsv($handle, ",")) !== FALSE) {
            $num = count($data);
            if(mysqli_query($conn,"INSERT INTO med_data(u_id_fk, md_gender, md_nationality, md_religion, md_bloodgrp, md_thstatus ) 
		VALUES ($u_id_fk, '$data[0]', '$data[1]', '$data[2]',  '$data[3]', '$data[4]')"))
        echo "";
        else 
        mysqli_error($conn);
        }
    
    fclose($handle);
    echo "Entered";
 
 ?>

 
