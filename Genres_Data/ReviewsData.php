<?php
    include "../db_connect.php";
    $sql= "SELECT * from genre_reviews";
    $results = $conn->query($sql);

    $ReviewArr =  array();

    if(mysqli_num_rows($results) > 0){
        
        while($fetch = mysqli_fetch_assoc($results)){
                $reviewid = $fetch["review_id"];
                $userid = $fetch["user_id"];
                $genreid = $fetch["genre_id"];
                $username = $fetch["username"];
                $title = $fetch["title"];
                $review = $fetch["review"];
                $CurrentPlaceArr =  array();
                array_push($CurrentPlaceArr, $reviewid, $userid, $genreid, $username, $title, $review);
                array_push($ReviewArr, $CurrentPlaceArr);
        }
    }
    else{
        echo "results 0";
    }
;?>