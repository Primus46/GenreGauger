<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CrossPage.css">
</head>
    <body class="text-bg-dark">
        <?php require '../Reuseable_Components/navbar/navbar.php';?>
        <div class="container-fluid px-0">
            <img src="../images/wepik-simple-futuristic-dark-neon-gaming-twitter-header-20240308074847WF8g.png" class="img-fluid" alt="GenreGauger" style="width: 100%"> 
        </div>
        <?php include '../Genres_Data/GenresDataRand.php';?>
        <?php include '../Genres_Data/DataFunctions.php';?>

        <div class="container my-3"> 
            <div class="row my-auto justify-content-center d-flex ">
                <?php Dynamic_CardsRand();?>
            </div>
        </div>
        <?php include '../Reuseable_Components/footer/footer.php';?>
    </body>
</html>