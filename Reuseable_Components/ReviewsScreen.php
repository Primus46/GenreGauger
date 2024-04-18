<div class="container my-3"> 
    <div class="row my-auto justify-content-around d-flex ">
    <div class="my-3">
        <div class="card mx-3">
            <div class="card-header">
                <h4>Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="card mx-2">
                        <div class="card-header">
                                <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                <h6>Write a Review</h6>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                <div class="card-body">
                                    <?php include "../Review_Process/IndividualReview.php";?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-1">
                        <?php Review_CardCountandInfo();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
