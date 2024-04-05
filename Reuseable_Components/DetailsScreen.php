<div class="container my-3"> 
    <div class="row my-auto justify-content-center d-flex ">
    <div class="col-md-3 my-3">
        <div class="card mx-3 text-center">
            <div class="card-img-top text-center">
            <img src="../images/placeholder.png" class="img-fluid">
            </div>
            <div class="card-body">
                <h4 class="card-title text-center"><?php echo $data['1']; ?></h4>
                <p class="card-text">Rating <?php echo $data['2']; ?></p>
                <div class="justify-content-between align-items-center">
                    <?php include "../Reuseable_Components/Ratings/Star rating.php";?>
                </div>
                <p class="card-text">Number of ratings <?php echo $data['3']; ?></p>
            </div>
        </div>
    </div>
    </div>
</div>