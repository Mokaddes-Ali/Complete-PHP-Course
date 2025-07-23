<?php
session_start();
include('db_connect.php');

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['auth'] = true;
    $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'role' => $user['role']
    ];

    if ($user['role'] == 2) {
        echo 'admin';
    } else {
        echo 'user';
    }
} else {
    $_SESSION['error'] = "Invalid email or password.";
    echo 'error';
    exit;
}
?>
