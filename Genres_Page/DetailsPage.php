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
        
        <section>
          <?php require '../Reuseable_Components/DetailsScreen.php';?>
        </section>

        <section>
        <?php require '../Reuseable_Components/ReviewsScreen.php';?>
        </section>
        
        
        <?php include '../Reuseable_Components/footer/footer.php';?>
    </body>
</html>