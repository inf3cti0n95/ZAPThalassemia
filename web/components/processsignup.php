<?php
  include_once('connection.php');
?>

<?php 


$data = implode($_REQUEST);
  
        mysqli_query($conn,"INSERT INTO user(fname) VALUES ('$data')");
		echo "Entered";
	
   

?>