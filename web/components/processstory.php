<?php
  include_once('connection.php');
?>

<?php
 
 
    $content = $_REQUEST['content'];
    $hero = $_REQUEST['heroimg'];
    $userid = $_REQUEST['user'];
    $title = $_REQUEST['title'];


    mysqli_query($conn,"INSERT INTO story_table(u_id_fk,st_title,st_content,st_heroimg) VALUES ($userid,'$title','$content','$hero')");
    echo "Entered";
	
 
 
 ?>