<?php
    session_start();
    include "../db_connect.php";
    $username = $_POST["username"];
    $password= $_POST["password"];
    $sql= "SELECT * from user_data WHERE username ='".$username."'";
    $results = $conn->query($sql);
    if(mysqli_num_rows($results) > 0){
        $row = mysqli_fetch_array($results);
        $ID = $row["id"];
        $fullname= $row["fname"].' '.$row["lname"];
        $_SESSION["fullname"] = $fullname;
        $username = $row["username"];
        $_SESSION["username"]=$username;
        $hash = $row["password"];
        if(password_verify($password,$hash)){
            echo "password match ...";
            header("Location:../Home_Page/HomePage.php");  
        }else {
            echo "invalid password";
        }
    }
    
?>