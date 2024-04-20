<!-- The Modal -->
<div class="modal fade" id="EmailChange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
    <form method="POST" action="../Account_Page/EmailUpdate.php">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-dark">Change Email</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-dark">
            <div class="form-group">
                <label>Email:</label>
                <label class="form-control"><?php echo $_SESSION['email']; ?></label>            </div>
            <div class="form-group">
                <label for="email">New Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter New Email" name="email">
            </div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" name="ChangeEmailSubmit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="UsernameChange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
    <form method="POST" action="../Account_Page/UsernameUpdate.php">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-dark">Change Username</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-dark">
            <div class="form-group">
                <label>Username:</label>
                <label class="form-control"><?php echo $_SESSION['username']; ?></label>           
            </div>
            <div class="form-group">
                <label for="username">New Username:</label>
                <input type="username" class="form-control" id="username" placeholder="Enter New Username" name="username">
            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" name="ChangeUsernameSubmit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="PasswordChange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
    <form method="POST" action="../Account_Page/PasswordUpdate.php">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-dark">Change Password</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-dark">
            <div class="form-group">
                <label for="password">Current Password:</label>
                <input type="password" class="form-control" id="CurrentPassword" placeholder="Enter Current Password" name="CurrentPassword">
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" class="form-control" id="NewPassword" placeholder="Enter New Password" name="NewPassword">
            </div>
            <div class="form-group">
                <label for="password">Confirm New Password:</label>
                <input type="password" class="form-control" id="ConfirmNewPassword" placeholder="Confirm New Password" name="ConfirmNewPassword">
            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" name="ChangePasswordSubmit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>