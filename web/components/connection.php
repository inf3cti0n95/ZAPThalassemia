<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = mysqli_connect($servername,$username,"",$dbname);


if(!$conn)
	{
		die("Connection failed");
	}
	else
	{
		echo "Yay";
	}
?>