<div class="col-md-3 my-3">
    <div class="card mx-3 text-center">
        <div class="card-img-top text-center">
        <img src="../images/placeholder.png" class="img-fluid">
        </div>
        <div class="card-body">
            <h4 class="card-title text-center"><?php echo $fetch['genre_name']; ?></h4>
            <p class="card-text">Rating: <?php echo $fetch['rating']; ?></p>
            <!-- <div class="justify-content-between align-items-center">
                <?php include "../Reuseable_Components/Ratings/Star rating.php";?>
            </div>
            <p class="card-text">Number of ratings: <?php echo $fetch['number_of_ratings']; ?></p> -->
            <p class="btn btn-basic">
            <?php echo "<a href='../Genres_Page/DetailsPage.php?ID={$fetch['genre_id']}'>{$fetch['genre_name']}</a><br>\n"; 
            ?></p> 
        </div>
    </div>
</div>
