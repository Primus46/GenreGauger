<div class="row">
    <div class="col-6 mt-3 pe-0">
        <div class="card">
            <div class="card-img-top text-center">
            <img src="../images/man.png" class="img-fluid rounded-2">
            </div>
        </div>
    </div>

    <div class="col mx-3 my-3">
        <div class="my-3">
            <label>Email:</label>
            <label class="form-control"><?php echo $_SESSION['email']; ?></label>
            
        </div>
        <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#EmailChange">Change Email</button>
        
        <div class="my-3">
            <label>Username:</label>
            <label class="form-control"><?php echo $_SESSION['username']; ?></label>
            
        </div>
        <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#UsernameChange">Change Username</button>

        <div class="my-3">
            <label>Password:</label>
            <label class="form-control"><?php echo "********"; ?></label>
            
        </div>
        <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#PasswordChange">Change Password</button>
        
    </div>
</div>

<div class="row">
    <div class="col-6 mb-5 pe-0">
        <div class="my-1">
            <label>Fullname:</label>
            <label class="form-control"><?php echo $_SESSION['fullname']; ?></label>
        </div>
        <div class="my-1">
            <label>UID:</label>
            <label class="form-control"><?php echo $_SESSION['user_id']; ?></label>
        </div>
    </div>
</div>