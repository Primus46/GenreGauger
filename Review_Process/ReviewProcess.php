<?php
    session_start();
    include "../Sign-up_Log-in/db_connect.php";
    $username = $_SESSION["username"];
    $title = $_POST["title"];
    $review =  $_POST["review"];  
    $sql = "INSERT INTO reviews (username, title, review) VALUES ('".$username."','".$title."','".$review."')";
    
    if($conn->query($sql) === TRUE) {
        echo "The following review is submitted: ";
        echo  "<p> Username: ".$username."</p>";
        echo  "<p> Review: ".$review."</p>";
    }
     else{
         echo "something went wrong ..<br/>";
         echo $sql;
     }
 
    ?> 