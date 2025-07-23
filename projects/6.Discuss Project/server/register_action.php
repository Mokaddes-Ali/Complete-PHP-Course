<?php
session_start();
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill all required fields.";
        echo "error";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        echo "error";
        exit;
    }

    // Email exists check
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['error'] = "Email already registered!";
        echo "error";
        exit;
    }

    // Password hash
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    // Insert user
    $insert = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    if ($insert->execute([$name, $email, $hashedPass])) {
        $_SESSION['success'] = "Registration successful! You can now login.";
        echo "success";
    } else {
        $_SESSION['error'] = "Something went wrong. Please try again.";
        echo "error";
    }
}
?>
