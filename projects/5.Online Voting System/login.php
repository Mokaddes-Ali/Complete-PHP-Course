<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 bg-white p-4 rounded shadow-sm">
      
      <!-- Session Error Message -->
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger text-center">
          <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
      <?php endif; ?>

      <h3 class="text-center mb-4 text-dark">Welcome Login</h3>
      <div id="errorMsg"></div>
      <form id="loginForm" method="post">
        <div class="form-group">
          <label for="loginEmail">Email address</label>
          <input
            type="email"
            class="form-control"
            id="loginEmail"
            name="email"
            placeholder="Enter your email"
            required
          />
        </div>
        <div class="form-group">
          <label for="loginPassword">Password</label>
          <input
            type="password"
            class="form-control"
            id="loginPassword"
            name="password"
            placeholder="Password"
            required
          />
        </div>
        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary px-4 py-2">Login</button>
        </div>
      </form>

      <div class="d-flex justify-content-center align-items-center mt-3">
        <p class="mb-0 mr-2">Don't have an account?</p>
        <a href="register.php" style="text-decoration: underline;">Register</a>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('#loginForm').on('submit', function(e){
    e.preventDefault();

    // Clear previous error message
    $('#errorMsg').html('');

    $.ajax({
      url: 'login_action.php',
      method: 'POST',
      data: $(this).serialize(),
      success: function(res) {
        try {
          let data = JSON.parse(res);
          if(data.status === 'error') {
            $('#errorMsg').html(`<div class="alert alert-danger text-center">${data.message}</div>`);
          }
        } catch(e) {
          // Not JSON, so handle normal string response
          if(res === 'admin') {
            window.location.href = 'admin_dashboard.php';
          } else if(res === 'user') {
            window.location.href = 'dashboard.php';
          } else {
            alert(res);
          }
        }
      },
      error: function(){
        $('#errorMsg').html('<div class="alert alert-danger text-center">Something went wrong. Please try again.</div>');
      }
    });
  });
});
</script>

</body>
</html>
