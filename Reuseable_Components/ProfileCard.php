<div class="col-4 my-3">
    <div class="card mx-3">
        <div class="card-img-top text-center">
        <img src="../images/man.png" class="img-fluid" style="border-radius: 6px;">
        </div>
    </div>
</div>

<div class="col-4 mx-3 my-3">
    <div class="my-3">
        <label>Username:</label>
        <label class="form-control"><?php echo $_SESSION['username']; ?></label>
    </div>

    <div class="my-3">
        <label>Fullname:</label>
        <label class="form-control"><?php echo $_SESSION['fullname']; ?></label>
    </div>

    <div class="my-3">
        <label>UID:</label>
        <label class="form-control"><?php echo $_SESSION['user_id']; ?></label>
    </div>
</div>