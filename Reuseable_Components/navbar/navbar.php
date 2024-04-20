<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav">
                <li class="nav-item me-5 ">
                <a class="nav-link" href="../Home_Page/HomePage.php"><h3>GenreGauger</h3></a>
                </li>
                <li class="nav-item me-3 mt-2">
                <a class="nav-link" href="../Categories_Page/CategoriesPage.php"><h5>Categories</h5></a>
                </li>
                <li class="nav-item me-3 mt-2">
                <a class="nav-link" href="../Genres_Page/GenresPage.php"><h5>Genres</h5></a>
                </li>
                <li class="nav-item me-3 mt-2">
                <a class="nav-link" href="../Leaderboard_Page/LeaderboardPage.php"><h5>Leaderboard</h5></a>
                </li>
                <li class="nav-item me-3 mt-2">
                <a class="nav-link" href="../Favorites_Page/FavoritesPage.php"><h5>Favorites</h5></a>
                </li>
            </ul>
                <form class="d-flex mx-auto" role="search" action="../Search_functions/searchPage.php" method="post">
                    <input class="form-control me-2" style="width: 400px" type="search" placeholder="Search" name="K_search" id="K_search" aria-label="Search">
                    <button class="btn btn-outline-success m3- 4" name="SearchSubmit" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <?php 
                    if(isset($_SESSION['user_id'])){
                        include "navbuttons/LogoutButton.php";
                        include "navbuttons/ProfileButton.php";
                    }
                    else{
                        include "navbuttons/sign_in_buttons.php";
                    }
                ?>
            </div>
        </div>
    </nav>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>