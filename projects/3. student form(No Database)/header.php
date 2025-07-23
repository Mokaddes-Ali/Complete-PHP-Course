<?php 
if (isset($_GET['accept_cookie'])) {
    setcookie('cookie_accepted', 'yes', time() + (86400 * 30), '/');
    // header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student System</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>

<body>

    <div class="nav-buttons">
        <a href="form.php">Add Student</a>
        <a href="show.php">Show Students</a>
    </div>

    <?php if (!isset($_COOKIE['cookie_accepted'])): ?>
        <div class="cookie-box" id="cookieBox">
            <div>
                We use cookies to improve your experience. By continuing, you agree to our cookie policy.
            </div>
            <div>
                <button onclick="acceptCookie()">Allow</button>
            </div>
        </div>
    <?php endif; ?>

    <script>
        function acceptCookie(){
            // window.location.href = "?accept_cookie=true";
            fetch('?accept_cookie=true').then(() => {
               document.getElementById('cookieBox').style.display="none";
            })
        }
    </script>
</body>
</html>
