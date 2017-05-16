<?php
  include_once('connection.php');
?>

<?php 


    $x  = $_REQUEST["xaxis"];
    $y = $_REQUEST["yaxis"];

    $q = "SELECT count(md_id) AS COUNT, $x from med_data where md_thstatus='$y' group by $x";
    echo $q;
    

    if($r = mysqli_query($conn,$q))
    {
        while($row = mysqli_fetch_assoc($r)){
            $echo["label"] = $row[$x];
            $echo["data"] = $row["COUNT"];
        }

        echo json_encode($echo);
    }
    else 
        mysqli_error($conn);

?>