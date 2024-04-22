<?php
    if(isset($_GET['ID'])){
        include "../db_connect.php";
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);

        $sql = "SELECT * FROM genres WHERE genre_id= '$ID'";
        $results = $conn->query($sql);
        $fetch = mysqli_fetch_assoc($results);

        
        $_SESSION["genre_id"]=$ID;
    }else{
        header('Location: ../Home_Page/HomePage.php');
    }

;?>


<div class="container my-3"> 
    <div class="row my-auto justify-content-center d-flex ">
    <div class="my-3">
        <div class="card mx-3">
            <div class="card-img-top text-center">
            <img src="../images/placeholder.png">
            </div>
            <div class="card-body">
                <h4 class="card-title text-center"><?php echo $fetch['genre_name']; ?></h4>
                <p class="card-text">Description: <?php echo $fetch['Description'];?></p>
                <p class="card-text">Rating: <?php echo $fetch['rating']; ?></p>
                <!-- <p class="card-text">Number of ratings: <?php echo $fetch['number_of_ratings']; ?></p> -->
                <?php
                if(isset($_SESSION['user_id'])){
                    echo "<div class='btn btn-basic justify-content-between align-items-right'>
                        <?php include '../Favorites_Page/FavoritesSystem.php';?>
                        <i class='fa fa-heart-o' style='font-size:36px;'></i>
                        </div>";
                }
                else{
                    echo "<div class='col-3 alert alert-warning' role='alert'>
                            <p class='text-center'>Please
                            <a href='../Sign-up_Log-in_Page/Login.php' class='alert-link'>Login</a>
                            to add your favorites</p>
                        </div>";
                }
                ?>
                
            </div>
        </div>
    </div>
</div>