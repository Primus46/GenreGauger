<?php
    include "../db_connect.php";
    $sql= "SELECT genre_name, rating from genres";
    $results = $conn->query($sql);
    if(mysqli_num_rows($results) > 0){
        while($fetch = mysqli_fetch_array($results)){
            //echo $row["genre_name"] .' '. $row["rating"] . "<br>";
            // echo $genrename = $fetch["genre_name"];
            // echo $rating = $fetch["rating"];
            $genrename = $fetch["genre_name"];
            $rating = $fetch["rating"];
        }
    }
    else{
        echo "results 0";
    }
    
?>