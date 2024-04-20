<?php
    session_start();
    include "../db_connect.php";
    $userid = $_SESSION["user_id"];
    $NewEmail = $_POST["email"];
    $sql= "UPDATE user_data SET email ='".$NewEmail."' WHERE user_id ='".$userid."'";
    $results = $conn->query($sql);

    if(mysqli_query($conn, $sql)){
        $email = $NewEmail;
        $_SESSION["email"]=$email;
        echo "Updated Successfully";
        header("Location:../Account_Page/AccountPage.php");
    }else {
        echo "Updating error"; 
        header("Location:../Account_Page/AccountPage.php");
    }
?>