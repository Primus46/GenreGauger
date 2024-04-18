<h4>  <?php echo "Welcome ".$_SESSION['username'];?></h4>
<h6>Review form</h6>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
