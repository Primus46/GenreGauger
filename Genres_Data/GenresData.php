<?php
    include "../db_connect.php";
    $sql= "SELECT * from genres";
    $results = $conn->query($sql);

    $StandardArr =  array();

    if(mysqli_num_rows($results) > 0){
        // while($row = mysqli_fetch_assoc($results)){
        //     $StandardArr[] = $row;
        // }
        while($fetch = mysqli_fetch_assoc($results)){
                    $genreid = $fetch["genre_id"];
                    $genrename = $fetch["genre_name"];
                    $rating = $fetch["rating"];
                    $NoR = $fetch["number of ratings"];
                    $CurrentPlaceArr =  array();
                    array_push($CurrentPlaceArr, $genreid, $genrename, $rating, $NoR);
                    // echo $row["genre_name"] .' '. $row["rating"] . "<br>";
                    // echo $genrename = $fetch["genre_name"];
                    // echo $rating = $fetch["rating"];
                    // $genrename = $fetch["genre_name"];
                    // $rating = $fetch["rating"];
                    array_push($StandardArr, $CurrentPlaceArr);
        }
    }
    else{
        echo "results 0";
    }
    // echo "12345";

    // print_r($StandardArr);
?>