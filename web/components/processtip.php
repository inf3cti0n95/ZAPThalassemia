<?php
  include_once('connection.php');
?>

<?php
 
 function makeDir($path)
{
     return is_dir($path) || mkdir($path);
}
 
    $content = $_REQUEST['content'];
    $userid = $_REQUEST['user'];



    mysqli_query($conn,"INSERT INTO tip_table(u_id_fk,tip_content) VALUES ($userid,'$content'");
    echo "Entered";
	
 
 
 ?>