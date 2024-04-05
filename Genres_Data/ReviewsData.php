<?php
    include "../db_connect.php";
    $sql= "SELECT * from genre_reviews";
    $results = $conn->query($sql);

    $ReviewArr =  array();

    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            $ReviewArr[] = $row;
        }
    }
    else{
        echo "results 0";
    }
;?>