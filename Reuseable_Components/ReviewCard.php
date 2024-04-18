<div class="container">
    <div class="card my-1">
        <div class="card-header">
            <h6><?php echo $RE_data['4']; ?></h6>
        </div>
        <div class="card-body">
            
            <p class="card-text">Review by: <?php echo $RE_data['3']; ?></p>
            
            <p class="card-text"><?php echo $RE_data['5']; ?></p>

            <div class="justify-content-between align-items-center">
                <?php include "../Reuseable_Components/Ratings/Star rating.php";?>
            </div>
                    
        </div>
    </div>
</div>


