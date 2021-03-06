<?php
  include_once('connection.php');
?>

<?php
 
 function makeDir($path)
{
     return is_dir($path) || mkdir($path);
}
 
    $content = $_REQUEST['content'];
    $hero = $_FILES['heroimg'];
    $userid = $_REQUEST['user'];
    $title = $_REQUEST['title'];
    $date = date('Y-m-d H:i:s');
    $mime  = "";

    makeDir("uploads");
    $target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $mime = $check['mime'];
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error

    $filename = $target_dir . uniqid().".".$imageFileType; 

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



    mysqli_query($conn,"INSERT INTO story_table(u_id_fk,st_title,st_content,st_heroimg,st_date) VALUES ($userid,'$title','$content','https://zapthalassaemia.herokuapp.com/components/$filename','$date')");
    echo "Entered";
	
 
 
 ?>