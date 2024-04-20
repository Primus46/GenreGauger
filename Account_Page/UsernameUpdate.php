<?php
    session_start();
    include "../db_connect.php";
    $userid = $_SESSION["user_id"];
    $NewUsername = $_POST["username"];
    $sql= "UPDATE user_data SET username ='".$NewUsername."' WHERE user_id ='".$userid."'";
    $results = $conn->query($sql);

    if(mysqli_query($conn, $sql)){
        $username = $NewUsername;
        $_SESSION["username"]=$username;
        echo "Updated Successfully";
        header("Location:../Account_Page/AccountPage.php");
    }else {
        echo "Updating error"; 
        header("Location:../Account_Page/AccountPage.php");
    }
?>