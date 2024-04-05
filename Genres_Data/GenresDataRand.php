<?php 
    include "../db_connect.php";
    $sql= "SELECT * from genres order by RAND() limit 6";
    $results = $conn->query($sql);

    $RandArr =  array();

    if(mysqli_num_rows($results) > 0){

        while($fetch = mysqli_fetch_assoc($results)){
            $genrename = $fetch["genre_name"];
            $rating = $fetch["rating"];
            $CurrentPlaceArr =  array();
            array_push($CurrentPlaceArr, $genrename, $rating);
            // echo $GenreID = $fetch["genre_id"];
            // echo $genrename = $fetch["genre_name"];
            // echo $rating = $fetch["rating"];
            array_push($RandArr, $CurrentPlaceArr);
        }
    }
    else{
        echo "results 0";
    }
?>