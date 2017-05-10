<?php
  include_once('connection.php');
?>

<?php
 
 
    $content = $_REQUEST['content'];
    $hero = $_FILES['heroimg'];
    $userid = $_REQUEST['user'];
    $title = $_REQUEST['title'];


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["heroimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["heroimg"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        move_uploaded_file($_FILES["heroimg"]["tmp_name"], $target_file);


    mysqli_query($conn,"INSERT INTO story_table(u_id_fk,st_title,st_content,st_heroimg) VALUES ($userid,'$title','$content','$target_file')");
    echo "Entered";
	
 
 
 ?>