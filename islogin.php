<?php 

    if(isset($_SESSION['user']))
    {
        $login=true;
        $name="viraj";
        $isDoctor=false;
    }
    else
        $login = false;

?>