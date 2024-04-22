<?php 
    include "../db_connect.php";
    $sql= "SELECT * from genres order by RAND() limit 4";
    $results = $conn->query($sql);

    $RandArr =  array();

    if(mysqli_num_rows($results) > 0){

        while($fetch = mysqli_fetch_assoc($results)){
                    $genreid = $fetch["genre_id"];
                    $genrename = $fetch["genre_name"];
                    $rating = $fetch["rating"];
                    $NoR = $fetch["number_of_ratings"];
                    $Link = "<a href='../Genres_Page/DetailsPage.php?ID={$fetch['genre_id']}'>{$fetch['genre_name']}</a><br>\n";
                    $CurrentPlaceArr =  array();
                    array_push($CurrentPlaceArr, $genreid, $genrename, $rating, $NoR, $Link);
                    array_push($RandArr, $CurrentPlaceArr);
        }
    }
    else{
        echo "results 0";
    }
?>