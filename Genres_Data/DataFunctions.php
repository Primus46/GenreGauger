<?php 

function Dynamic_Cards(){
    include "GenresData.php";

    // foreach($StandardArr as $data){
    //     echo $data['2'] .' ';
    // }
    
    // $i = 0;
    // $x = sizeof($StandardArr);

    // while ($i < $x) {
    //     foreach($StandardArr[$i] as $data){
    //         include '../Reuseable_Components/GenreCard.php';
    //     }
    //     $i++;
    // }

    
    $CurrentPlaceArr = array();
    $x = sizeof($CurrentPlaceArr) / 2;
    
    for ($i = 0; $i <= $x; $i++) {
        foreach($StandardArr as $data){
            include '../Reuseable_Components/GenreCard.php';
            $data[$i];
        }
    }

        // for ($i = 0; $i < sizeof($StandardArr); $i++) {
        //     foreach($StandardArr[$i] as $data){
        //         include '../Reuseable_Components/GenreCard.php';
        //     }
        // }
}

    function Dynamic_DetailsScreen(){
        include "GenresData.php";

        $CurrentPlaceArr = array();
        $x = sizeof($CurrentPlaceArr) / 2;
        
        for ($i = 0; $i <= $x; $i++) {
            foreach($StandardArr as $data){
                include '../Reuseable_Components/DetailsScreen.php';
                $data[$i];
            }
        }
    }
    // print_r($StandardArr);
    // echo ' ';
    // echo sizeof($StandardArr);

    function Dynamic_CardsRand(){
    //     include "GenresDataRand.php";
    //     for ($i = 0; $i <= 1; $i++) {
    //         foreach($RandArr as $data){
    //             $data[$i];
    //             include '../Reuseable_Components/GenreCard.php';
                
    //         }
    //     }
    }
    
; ?>