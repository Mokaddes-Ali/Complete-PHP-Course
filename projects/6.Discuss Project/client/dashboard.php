<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}else{
        include('header.php');
}
?>

<h1>Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>!</h1>
<p>This is your dashboard.</p>
<a href="logout.php">Logout</a>

<?php include('footer.php');?>
