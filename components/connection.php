<?php 


    $servername = 'localhost';
	$username = 'root';
	$dbname = 'thalassemia';

    $fname = $_REQUEST['fname'];

    $data = implode(" ",$_REQUEST);

	$conn = mysqli_connect($servername,$username,"",$dbname);


    if(!$conn)
	{
		die("Connection failed");
	}

?>