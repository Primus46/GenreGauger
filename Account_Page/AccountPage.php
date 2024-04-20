<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body class="text-bg-dark">
        <?php require '../Reuseable_Components/navbar/navbar.php';?>
        <?php include '../Reuseable_Components/Models.php' ;?>
        
        <div class="container-fluid">
          <div class="row my-auto justify-content-left d-flex ">
            <div class="col-6 border-end">
              <?php include "../Reuseable_Components/ProfileCard.php" ;?>
            </div>
            <div class="col-6">
              
            </div>
          </div>
        </div>
        <div class="fixed-bottom">
          <?php include '../Reuseable_Components/footer/footer.php';?>
        </div>
    </body>
</html>