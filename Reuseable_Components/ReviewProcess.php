<?php
    session_start();
    include "../Sign-up_Log-in/db_connect.php";
    $username = $_SESSION["username"];
    $name = $_SESSION["fullname"];
    $review_title = $_POST["r_title"];
    $review =  $_POST["review"];  
    $sql = "INSERT INTO reviews (username, title, review) VALUES ('".$username."','".$review_title."','".$review."')";
    
    if($conn->query($sql) === TRUE) {
        echo "The following review is submitted: ";
        echo  "<p> Full Name: ".$name."</p>";
        echo  "<p> Username: ".$username."</p>";
        echo  "<p> Review: ".$review."</p>";
    }
     else{
         echo "something went wrong ..<br/>";
         echo $sql;
     }
 
    ?> 