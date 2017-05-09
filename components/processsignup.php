<?php
  include_once('connection.php');
         ?>

<?php 


  
        mysqli_query($conn,"INSERT INTO user(fname) 
		VALUES ('$data')");
		echo "Entered";
	
   

?>