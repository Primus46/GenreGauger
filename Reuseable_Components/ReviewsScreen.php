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
    <div class="row my-auto justify-content-around d-flex ">
    <div class="my-3">
        <div class="card mx-3">
            <div class="card-header">
                <h4>Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="card mx-3">
                        <div class="card-header">
                                <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                Write a Review
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                <div class="card-body">
                                    
                                    <div class="dropdown-menu">
                                    <!-- <?php include "../Review_Process/IndividualReview.php";?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-3">
                    <div class="card mx-4">
                        <?php Review_CardCount();?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
