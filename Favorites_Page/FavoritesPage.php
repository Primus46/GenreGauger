<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CrossPage.css">
</head>
<body class="text-bg-dark">
        <?php require '../Reuseable_Components/navbar/navbar.php';?>
        <?php include "../Genres_Data/DataFunctions.php";?>

        <div class="container my-3"> 
            <div class="row my-auto justify-content-center d-flex ">
                <?php        
                    if(isset($_SESSION['user_id'])){
                        Favorite_Cards();
                    }
                    else{
                        echo "<div class='alert alert-warning' role='alert'>
                                <h3 class='text-center'>Please
                                <a href='../Sign-up_Log-in_Page/Login.php' class='alert-link'>Login</a>
                                to access your favorites</h3>
                            </div>";
                    }
                ?>
            </div>
        </div>
        <?php include '../Reuseable_Components/footer/footer.php';?>
    </body>
</html>