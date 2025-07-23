
<div class="container form-style">
  <form id="loginForm">
    <div class="form-group mb-4">
      <label for="email">Email address</label>
      <input type="email" id="email" name="email" class="form-control" required />
    </div>

    <div class="form-group mb-4">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control" required />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <div class="text-center">
      <p>Not a member? <a href="/projects/6.Discuss%20Project/client/register.php">Register</a></p>
    </div>

    <div id="errorMsg" class="text-danger"></div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#loginForm').on('submit', function(e) {
    e.preventDefault();
    $('#errorMsg').text('');

    $.ajax({
      url: '/projects/6.Discuss%20Project/server/login_action.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        if (response.trim() === 'success') {
          window.location.href = '/projects/6.Discuss%20Project/index.php';
        } else {
          $('#errorMsg').text(response);
        }
      }
    });
  });
</script>
