<!-- The Modal -->
<div class="modal fade" id="EmailChange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-dark">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-dark">
        <form action="/action_page.php">
            <div class="form-group">
                <label>Email:</label>
                <label class="form-control"><?php echo $_SESSION['email']; ?></label>            </div>
            <div class="form-group">
                <label for="email">New Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter New Email" name="email">
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="UsernameChange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-dark">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-dark">
        <form action="/action_page.php">
            <div class="form-group">
                <label>Username:</label>
                <label class="form-control"><?php echo $_SESSION['username']; ?></label>           
            </div>
            <div class="form-group">
                <label for="username">New Username:</label>
                <input type="username" class="form-control" id="username" placeholder="Enter New Username" name="username">
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="PasswordChange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-dark">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-dark">
        <form action="/action_page.php">
            <div class="form-group">
            <label>Password:</label>
            <label class="form-control"><?php echo "********"; ?></label>
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter New Password" name="password">
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>

    </div>
  </div>
</div>