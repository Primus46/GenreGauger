<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script>
$(document).ready(function(){
     $("#search").click(function(event){
         event.preventDefault();
        var keyword1 = $("#K_search").val();
         if(keyword1 !=""){
           $.ajax({url: "search.php", method: "POST", data:{key_search: keyword1}, success: function(result){
           $("#div1").html(result);
      }
    }) 
         }
    })
});
</script> -->
</head>
<body class="text-bg-dark">
        <?php require '../Reuseable_Components/navbar/navbar.php';?>


        <div class="container my-3"> 
        <h1>Search results : </h1>
            <div class="row my-auto justify-content-center d-flex ">
                <?php include "../Search_functions/searchSystem.php"?> 
            </div>
        </div>
        
        <?php include '../Reuseable_Components/footer/footer.php';?>
  </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>