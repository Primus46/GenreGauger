<?php
    session_start();
    include "../db_connect.php";
    $userid = $_SESSION["user_id"];
    $genreid = $_SESSION["genre_id"];
    $username = $_SESSION["username"];
    $title = $_POST["title"];
    $review =  $_POST["review"];  
    $sql = "INSERT INTO genre_reviews(user_id, genre_id, username, title, review) 
    VALUES ('".$userid."','".$genreid."','".$username."','".$title."','".$review."')";
    
    if($conn->query($sql) === TRUE) {
        // echo "The following review is submitted: ";
        // echo  "<p> genre ID: ".$genreid."</p>";
        // echo  "<p> user ID: ".$userid."</p>";
        // echo "<p> Username: ".$username."</p>";
        // echo  "<p> Review: ".$review."</p>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
     else{
         echo "something went wrong ..<br/>";
         echo $sql;
     }
 
?> 