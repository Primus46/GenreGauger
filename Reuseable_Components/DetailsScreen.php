<?php
    if(isset($_GET['ID'])){
        include "../db_connect.php";
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);

        $sql = "SELECT * FROM genres WHERE genre_id= '$ID'";
        $results = $conn->query($sql);
        $fetch = mysqli_fetch_assoc($results);

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
                <p class="card-text">Number of ratings: <?php echo $fetch['number of ratings']; ?></p>
            </div>
            <div class="card-header">
                <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                Reviews
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
    </div>
</div>