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

        <div class="container my-3"> 
            <div class="row my-auto justify-content-center d-flex ">
                <div class="col-md-3">
                <div class="card mx-3 text-center">
                <div class="card-img-top text-center">
                <img src="../images/placeholder.png" class="img-fluid">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center"><?php echo $RandArr[0][0]; ?></h4>
                    <p class="card-text"><?php echo $RandArr[0][1]; ?></p>
                    <a href="#" class="btn btn-primary text-center"><?php echo $RandArr[0][0]; ?></a>
                </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="card mx-3 text-center">
                    <div class="card-img-top text-center">
                    <img src="../images/placeholder.png" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center"><?php echo $RandArr[1][0]; ?></h4>
                        <p class="card-text"><?php echo $RandArr[1][1]; ?></p>
                        <a href="#" class="btn btn-primary text-center"><?php echo $RandArr[1][0]; ?></a>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="card mx-3 text-center">
                    <div class="card-img-top text-center">
                    <img src="../images/placeholder.png" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center"><?php echo $RandArr[2][0]; ?></h4>
                        <p class="card-text"><?php echo $RandArr[2][1]; ?></p>
                        <a href="#" class="btn btn-primary text-center"><?php echo $RandArr[2][0]; ?></a>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="card mx-3 text-center">
                    <div class="card-img-top text-center">
                    <img src="../images/placeholder.png" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center"><?php echo $RandArr[3][0]; ?></h4>
                        <p class="card-text"><?php echo $RandArr[0][1]; ?></p>
                        <a href="#" class="btn btn-primary mx-auto"><?php echo $RandArr[3][0]; ?></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php include '../Reuseable_Components/footer/footer.php';?>
    </body>
</html>