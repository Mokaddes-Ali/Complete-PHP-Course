<?php
session_start();
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $phone    = trim($_POST['phone']);
    $address  = trim($_POST['address']);
    $role     = $_POST['role'];
    $status   = 1;
    $votes    = 0;

    // ✅ Validation
    if (empty($name) || empty($email) || empty($password) || $role === "") {
        echo "Please fill all required fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // ✅ Email Exists?
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "Email already registered!";
        exit;
    }

    // ✅ File Upload
    $photo = '';
    if (!empty($_FILES['photo']['name'])) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $photo = $uploadDir . time() . '_' . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    }

    // ✅ Password Hash
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Insert Query
    $insert = $conn->prepare("INSERT INTO users (name, email, password, phone, address, photo, role, status, votes)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($insert->execute([$name, $email, $hashedPass, $phone, $address, $photo, $role, $status, $votes])) {
        $_SESSION['success'] = "Registration successful!";
        echo "success";
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>
