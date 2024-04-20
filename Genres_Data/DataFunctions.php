<?php 
// $_SESSION[$StandardArr];
    function Dynamic_Cards(){
        include "GenresData.php";

        $CurrentPlaceArr = array();
        $x = sizeof($CurrentPlaceArr) / 2;
        
        for ($i = 0; $i <= $x; $i++) {
            foreach($StandardArr as $data){
                include '../Reuseable_Components/GenreCard.php';
                $data[$i];
            }
        }

    }
    
    function Genre_Cards(){
            include "../db_connect.php";
    
            $sql = "SELECT * FROM genres";
            $results = $conn->query($sql);

            while($fetch = mysqli_fetch_assoc($results)){
                include '../Reuseable_Components/GenreCard.php';
            }

    }

    function Dynamic_DetailsScreen(){
        include "GenresData.php";

        $CurrentPlaceArr = array();
        $x = sizeof($CurrentPlaceArr) / 2;
        
        for ($i = 0; $i <= $x; $i++) {
            foreach($StandardArr as $data){
                include '../Reuseable_Components/DetailsScreen.php';
                $data[$i];
                if($data[$i] == $data['0']){
                }
            }
        }
    }
    
    // echo ' ';
    // echo sizeof($StandardArr);

    function Dynamic_CardsRand(){
        include "GenresDataRand.php";

        $CurrentPlaceArr = array();
        $x = sizeof($CurrentPlaceArr) / 2;
    
        for ($i = 0; $i <= $x; $i++) {
            foreach($RandArr as $data){
                $data[$i];
                include '../Reuseable_Components/GenreCardRand.php';
                
            }
        }
    }
    
    // function ReviewSort(){
    //     foreach($ReviewArr['1'] as SReview){

    //     }
    // }


    // include "ReviewsData.php";
    // print_r($StandardArr);
    function Review_CardTotal(){
        include "ReviewsData.php";

        if(isset($_GET['ID'])){
            include "../db_connect.php";
            $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    
            $sql = "SELECT * FROM genre_reviews 
            LEFT JOIN genres ON genre_reviews.genre_id = genres.genre_id 
            WHERE genre_reviews.genre_id= '$ID'";
            $results = $conn->query($sql);

            $x = 0;

            while($fetch = mysqli_fetch_assoc($results)){
                $x++;
            }

            echo $x;

        }else{
            header('Location: ../Home_Page/HomePage.php');
        }
    }

    function Review_CardCountandInfo(){
        include "ReviewsData.php";

        if(isset($_GET['ID'])){
            include "../db_connect.php";
            $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    
            $sql = "SELECT * FROM genre_reviews 
            LEFT JOIN genres ON genre_reviews.genre_id = genres.genre_id 
            WHERE genre_reviews.genre_id= '$ID'";
            $results = $conn->query($sql);

            while($fetch = mysqli_fetch_assoc($results)){
                include '../Reuseable_Components/ReviewCard.php';
            }

        }else{
            header('Location: ../Home_Page/HomePage.php');
        }
    }

    function User_CardInfo(){
        include "ReviewsData.php";

        if(isset($_GET['ID'])){
            include "../db_connect.php";
            $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    
            $sql = "SELECT * FROM user_data
            WHERE user_id= '$ID'";
            $results = $conn->query($sql);
            $fetch = mysqli_fetch_assoc($results);

        }else{
            header('Location: ../Home_Page/HomePage.php');
        }
    }

; ?>