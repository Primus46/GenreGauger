<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
    <body>

    <div class="container">
        <h2>Login form</h2>
        <form method = "POST" action="process.php">
            
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="Username" class="form-control" id="username" placeholder="Enter Username" name="username">
        </div>
            
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        </div>
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>