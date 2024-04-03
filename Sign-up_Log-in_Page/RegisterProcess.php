<?php
    include "../db_connect.php";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $password = password_hash($pwd,PASSWORD_DEFAULT);
    $sql = "INSERT INTO user_data(fname,lname,email, username, password) VALUES ('".$fname."','".$lname."','".$email."','".$username."','".$password."')";
    
    if($conn->query($sql) === TRUE) {
        echo "The following informations are submitted: ";
        echo  "<p> Full Name: ".$fname." ".$lname."</p>";
        echo  "<p> Email: ".$email."</p>";
        echo  "<p> username: ".$username."</p>";
    }
     else{
         echo "something went wrong ..<br/>";
         echo $sql;
     }
     
    ?>  