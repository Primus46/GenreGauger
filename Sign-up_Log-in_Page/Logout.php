<?php
    session_start();
    unset($_SESSION['username'], $_SESSION['user_id']);

    header('location:../Home_Page/HomePage.php');
?>