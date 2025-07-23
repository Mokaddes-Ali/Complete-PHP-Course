<?php
session_start();
 include('header.php'); ?>

<div class="container mt-2 px-5 p-4 rounded" style="max-width: 600px;">

  <!-- Flash Messages -->
  <?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
      <?= $_SESSION['success']; unset($_SESSION['success']); ?>
    </div>
  <?php endif; ?>

  <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
      <?= $_SESSION['error']; unset($_SESSION['error']); ?>
    </div>
  <?php endif; ?>

  <form id="registerForm" enctype="multipart/form-data">
    <div id="errorMsg" class="text-danger mb-2 d-none"></div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" name="cpassword" class="form-control" required>
    </div>

    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
    </div>
  </form>

  <div class="text-center">
    <p class="text-success">Already have an account?
      <a href="../index.php" style="text-decoration: underline;">Login</a>
    </p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#registerForm').on('submit', function (e) {
    e.preventDefault();
    $('#errorMsg').addClass('d-none').text('');

    let password = $('input[name="password"]').val();
    let cpassword = $('input[name="cpassword"]').val();
    if (password !== cpassword) {
      $('#errorMsg').removeClass('d-none').text("Passwords do not match.");
      return;
    }

    const formData = new FormData(this);
    $.ajax({
      url: '/projects/6.Discuss%20Project/server/register_action.php',
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function (res) {
        if (res.trim() === 'success') {
          // Redirect to same page to show session flash success message
          window.location.href = 'register.php';
        } else if(res.trim() === 'error') {
          // Redirect to same page to show session flash error message
          window.location.href = 'register.php';
        } else {
          $('#errorMsg').removeClass('d-none').text(res);
        }
      }
    });
  });
</script>

<?php include('footer.php'); ?>
