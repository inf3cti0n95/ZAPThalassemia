<?php 
    if(isset($_SESSION['user']))
    {
        $login=true;
        $name="viraj";
        $isDoctor=true;
    }
    else
        $login = false;

?>