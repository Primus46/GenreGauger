<?php
    include "../db_connect.php";
    $sql= "SELECT * from genres";
    $results = $conn->query($sql);

    $StandardArr =  array();

    if(mysqli_num_rows($results) > 0){

        while($fetch = mysqli_fetch_assoc($results)){
                    $genreid = $fetch["genre_id"];
                    $genrename = $fetch["genre_name"];
                    $rating = $fetch["rating"];
                    $NoR = $fetch["number of ratings"];
                    $Link = "<a href='../Genres_Page/DetailsPage.php?ID={$fetch['genre_id']}'>{$fetch['genre_name']}</a><br>\n";
                    $CurrentPlaceArr =  array();
                    array_push($CurrentPlaceArr, $genreid, $genrename, $rating, $NoR, $Link);
                    array_push($StandardArr, $CurrentPlaceArr);
        }
    }
    else{
        echo "results 0";
    }
    // echo "12345";

    // print_r($StandardArr);
?>