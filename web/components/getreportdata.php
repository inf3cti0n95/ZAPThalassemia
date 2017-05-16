<?php
  include_once('connection.php');
?>

<?php 


    $x  = $_REQUEST["xaxis"];
    $y = $_REQUEST["yaxis"];

    $q = "SELECT count(md_id) AS COUNT, $x from med_data where md_thstatus='$y' group by $x";

    $echo["label"] = array();    
    $echo["data"] = array();    

    if($r = mysqli_query($conn,$q))
    {
        while($row = mysqli_fetch_assoc($r)){
            array_push($echo["label"],$row[$x]);
            array_push($echo["data"],$row["COUNT"]);
        }

        echo json_encode($echo);
    }
    else 
        mysqli_error($conn);

?>