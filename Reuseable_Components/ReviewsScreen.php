<div class="container my-3"> 
    <div class="row my-auto justify-content-around d-flex ">
    <div class="my-3">
        <div class="card mx-3">
            <div class="card-header">
                <h4>Reviews:</h4>
                <p>Count: <?php Review_CardTotal();?></p>
                </div>
                <div class="card-body">
                    
                    <?php
                    if(isset($_SESSION['user_id'])){
                        echo "<div class='card mx-2'>
                            <div class='card-header'>
                            <button type='button' class='btn' data-bs-toggle='collapse' data-bs-target='#reviewPanel' aria-expanded='false' aria-controls='reviewPanel'>
                                Write a Review
                            </button>
                                </div>
                                <div id='reviewPanel' class='collapse'>
                                    <div class='card-body'>
                                        <?php include '../Review_Process/IndividualReview.php';?>
                                    </div>
                                </div>
                            </div>
                            </div>";
                    }
                    else{
                        echo "<div class='alert alert-warning' role='alert'>
                                <h3 class='text-center'>Please
                                <a href='../Sign-up_Log-in_Page/Login.php' class='alert-link'>Login</a>
                                to make a review</h3>
                            </div>";
                    }
                    ?>
                    <div class="container my-1">
                        <?php Review_CardCountandInfo();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
