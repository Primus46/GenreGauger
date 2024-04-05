<div class="container my-3"> 
    <div class="row my-auto justify-content-center d-flex ">
    <div class="my-3">
        <div class="card mx-3">
            <div class="card-img-top text-center">
            <img src="../images/placeholder.png">
            </div>
            <div class="card-body">
                <h4 class="card-title text-center"><?php echo $data['1']; ?></h4>
                <p class="card-text">Description</p>
                <p class="card-text">Rating <?php echo $data['2']; ?></p>
                <p class="card-text">Number of ratings <?php echo $data['3']; ?></p>
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