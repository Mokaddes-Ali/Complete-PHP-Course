<?php session_start();?>
<?php include('header.php');?>

<!-- Success Message -->
<?php if (isset($_SESSION['success'])): ?>
  <div class="alert alert-success text-center">
    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
  </div>
<?php endif; ?>

<!-- Error Message -->
<div id="errorMsg" class="alert alert-danger text-center d-none"></div>

    <!-- Register Form -->
     <div class="mt-3 px-5 bg-white p-4 rounded">
  <form id="registerForm" enctype="multipart/form-data">
    <h3 class="text-center mb-4 text-primary">Welcome Register</h3>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
        <label>Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Address</label>
        <input type="text" name="address" class="form-control">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Upload Photo</label>
        <input type="file" name="photo" class="form-control-file">
      </div>
      <div class="form-group col-md-6">
        <label>Role</label>
        <select name="role" class="form-control" required>
          <option value="">---Select---</option>
          <option value="0">Voter</option>
          <option value="1">Group</option>
        </select>
      </div>
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-success px-4 py-2">Register</button>
    </div>
  </form>

  <div class="d-flex justify-content-center align-items-center mt-2">
    <p class="text-success mb-0 mr-3">Already have an account?</p>
    <a href="index.php" class="px-1 py-2" style="text-decoration: underline;">Login</a>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#registerForm').on('submit', function(e){
    e.preventDefault();
    $('#errorMsg').addClass('d-none').text('');

    var formData = new FormData(this);

    // Check password match before sending
    let password = $('input[name="password"]').val();
    let cpassword = $('input[name="cpassword"]').val();
    if (password !== cpassword) {
      $('#errorMsg').removeClass('d-none').text("Passwords do not match.");
      return;
    }

    $.ajax({
      url: 'register_action.php',
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
        if (response.trim() === 'success') {
          window.location.href = 'register.php';
        } else {
          $('#errorMsg').removeClass('d-none').text(response);
        }
      }
    });
  });
</script>


    <?php include('footer.php');?>