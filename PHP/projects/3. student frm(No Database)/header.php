<?php 
if (isset($_GET['accept_cookie'])) {
    setcookie('accept_cookie', 'yes', time() + (86400 * 30), '/');
    // redirect so that cookie is available immediately
    header("Location: ".$_SERVER['PHP_SELF']);
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

    <?php if (!isset($_COOKIE['accept_cookie'])): ?>
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
            window.location.href = "?accept_cookie=true";
        }
    </script>
</body>
</html>
