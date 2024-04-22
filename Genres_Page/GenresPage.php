<!DOCTYPE html>
<html lang="en">
<head>
    <title>Genre Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CrossPage.css">
</head>
    <body class="text-bg-dark">
        <?php require '../Reuseable_Components/navbar/navbar.php';?>
        <?php include "../Genres_Data/DataFunctions.php";?>

        <div class="container my-3"> 
            <div class="row my-auto justify-content-center d-flex ">
                <?php Genre_Cards();?>
            </div>
            <!-- <div class="row my-auto justify-content-center d-flex "> -->
                <!-- <?php getting_started_genres();?> -->
            <!-- </div> -->
        </div>
        <?php include '../Reuseable_Components/footer/footer.php';?>
    </body>
</html>