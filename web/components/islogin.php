<?php 
    if(isset($_SESSION['user']))
    {
        $login=true;
        $name= $_SESSION['user_name'];
        $isDoctor=$_SESSION['user_isdoctor'];
    }
    else
        $login = false;

?>