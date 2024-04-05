<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body class="text-bg-dark">
    <div class="container">
        <h2>  <?php echo "Welcome ".$_SESSION['username'];?></h2>
        <div class="container">
    <h2>Review form</h2>
    <form method = "POST" action="review_process.php">
        <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Review Title" name="title">
        </div>
        
        <div class="form-group">
        <label for="review">Review Details:</label>
        <textarea class="form-control" id="review" placeholder="Enter Review" name="review" rows="6" cols="50">
            </textarea>
        </div>
        
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>