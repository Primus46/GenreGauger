<?php 
    include "../db_connect.php";
    $sql= "SELECT * from genres order by RAND()";
    $results = $conn->query($sql);
    if(mysqli_num_rows($results) > 0){
        while($fetch = mysqli_fetch_array($results)){
            echo $GenreID = $fetch["genre_id"];
            echo $genrename = $fetch["genre_name"];
            echo $rating = $fetch["rating"];
        }
    }
    else{
        echo "results 0";
    }
 
?>
<div class="col-md-3">
    <div class="card mx-5">
        <div class="card-img-top">
        <img src="../images/placeholder.png" class="img-fluid">
        </div>
        <div class="card-img-overlay">Slide 1</div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $genrename; ?></h4>
            <p class="card-text"><?php echo $rating; ?></p>
            <a href="#" class="btn btn-primary"><?php echo $rating; ?></a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card mx-5">
        <div class="card-img-top">
        <img src="../images/placeholder.png" class="img-fluid">
        </div>
        <div class="card-img-overlay">Slide 2</div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $genrename; ?></h4>
            <p class="card-text"><?php echo $rating; ?></p>
            <a href="#" class="btn btn-primary"><?php echo $rating; ?></a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card mx-5">
        <div class="card-img-top">
        <img src="../images/placeholder.png" class="img-fluid">
        </div>
        <div class="card-img-overlay">Slide 3</div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $genrename; ?></h4>
            <p class="card-text"><?php echo $rating; ?></p>
            <a href="#" class="btn btn-primary"><?php echo $rating; ?></a>
        </div>
    </div>
</div>
