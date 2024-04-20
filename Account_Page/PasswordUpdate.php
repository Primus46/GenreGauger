<?php
    session_start();
    include "../db_connect.php";
    include "../Update_Functions/UpdateFunctions.php";
    $ChangePasswordForm_Errors = array();

    $RequiredForm_Fields = array('CurrentPassword', 'NewPassword','ConfirmNewPassword');

    $ChangePasswordForm_Errors = array_merge($ChangePasswordForm_Errors, 
    check_fields_empty($RequiredForm_Fields));

    if(empty($ChangePasswordForm_Errors)){
        $userid = $_SESSION["user_id"];
        $CurrentPassword = $_POST['CurrentPassword'];
        $NewPassword = $_POST['NewPassword'];
        $ConfirmNewPassword = $_POST['ConfirmNewPassword'];

        if($NewPassword != $ConfirmNewPassword){
            $message = displayMessage("New & Confirmed new passwords did not match");

            printf("New & Confirmed new passwords did not match");
            // header("Location:../Account_Page/AccountPage.php");
        }else{
            $sql= "SELECT password from user_data WHERE user_id ='".$userid."'";
            $results = $conn->query($sql);
            if(mysqli_num_rows($results) > 0){
                $row = mysqli_fetch_array($results);
                $OriginalPassword = $row['password'];

                if(password_verify($CurrentPassword, $OriginalPassword)){

                    $password = password_hash($ConfirmNewPassword,PASSWORD_DEFAULT);

                    $sqlUpdate= "UPDATE user_data SET password ='".$password."' WHERE user_id ='".$userid."'";
                    $newResult = $conn->query($sqlUpdate);
                    if(mysqli_query($conn, $sqlUpdate)){
                        $message = displayMessage("Password Change Successful");

                        printf("Password Change Successful");
                        header("Location:../Account_Page/AccountPage.php");
                    }else{
                        $message = displayMessage("Password Change not Successful");

                        printf("Password Change not Successful");
                        // header("Location:../Account_Page/AccountPage.php");
                    }
                }else{
                    $message = displayMessage("Current Password input incorrectly");

                    printf("Current Password input incorrectly");
                    // header("Location:../Account_Page/AccountPage.php"); 
                    }

            }else{
                $message = displayMessage("No password matches in DB");

                printf("No password matches in DB");
                // header("Location:../Account_Page/AccountPage.php");
            }
        }

    }else{
        print_r ($ChangePasswordForm_Errors);
    }

?>