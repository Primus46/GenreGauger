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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
                <a class="nav-link" href="../Reviews_Page/ReviewsPage.php"><h5>Reviews</h5></a>
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
                <form class="d-flex mx-auto" role="search">
                    <input class="form-control me-2" style="width: 400px" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success m3- 4" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <button type="button" class="btn btn-outline-primary">Sign Up</button>
            </div>
        </div>
    </nav>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>