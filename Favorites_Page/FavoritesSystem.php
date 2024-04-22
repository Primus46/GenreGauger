<?php
    include "../db_connect.php";
    
    $userid = $_SESSION["user_id"];;

    $sqlCheck = "SELECT * FROM favorites WHERE genre_id = '$ID' AND user_id = '$userid'";
    $resultsCheck = $conn->query($sqlCheck);

    if(mysqli_num_rows($resultsCheck) >= 1){

    }else{
        $sql = "SELECT * FROM genres WHERE genre_id = '$ID'";
        $results = $conn->query($sql);

        while($fetch = mysqli_fetch_array($results)){  
            $genreid = $fetch["genre_id"];
            $genrename = $fetch["genre_name"]; 
            $rating = $fetch["rating"];
            $NoR = $fetch["number_of_ratings"];
            $genre_img = "img/".$fetch["genre_img"];
    
            $sql = "INSERT INTO favorites (genre_id, genre_name, rating, number_of_ratings, genre_img, user_id)
            VALUES('".$genreid."','".$genrename."','".$rating."','".$NoR."','".$genre_img."','".$userid."')";
                
            }
            if($conn->query($sql) === TRUE) {
                // echo "<i class='fa fa-heart' style='font-size:36px;'></i>";
            }
            else{
                echo "something went wrong ..<br/>";
            }
    }
        
           
?>