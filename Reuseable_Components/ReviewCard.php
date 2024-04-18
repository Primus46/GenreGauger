<div class="container">
    <div class="card my-1">
        <div class="card-header">
            <h6><?php echo $fetch['title']; ?></h6>
        </div>
        <div class="card-body">

            <p class="card-text">Review by: <?php echo $fetch['username']; ?></p>
            
            <p class="card-text"><?php echo $fetch['review']; ?></p>

            <div class="justify-content-between align-items-center">
                <?php include "../Reuseable_Components/Ratings/Star rating.php";?>
            </div>
                    
        </div>
    </div>
</div>


