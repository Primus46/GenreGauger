<?php  
    include "../db_connect.php";
    if(isset($_POST['K_search'])){
        
        $key_search = $_POST['K_search'];
        $sql = "SELECT * FROM genres WHERE genre_name LIKE '%$key_search%'";
        $results = mysqli_query($conn,$sql);
        if(mysqli_num_rows ($results) > 0){
            while($fetch = mysqli_fetch_assoc($results)){
                include '../Reuseable_Components/GenreCard.php';
            }
            // echo '</div>';
        
        }
    }
        
?>