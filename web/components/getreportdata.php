<?php
  include_once('connection.php');
?>

<?php 


    $x  = $_REQUEST["xaxis"];
    $y = $_REQUEST["yaxis"];

    $q = "SELECT count(md_id), $x from med_data where md_thstatus=$y group by $x";
    $echo = array();

    if($r = mysqli_query($conn,$q))
    {
        while($row = mysqli_fetch_assoc($r)){
            $echo[$row[$x]] = $row['count(md_id)'];
        }

        echo json_encode($echo);
    }
    else 
        mysqli_error($conn);

?>