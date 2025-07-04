<?php
session_start();

if(isset($_SESSION['success'])){
     echo "<div class='flash-message success'>{$_SESSION['success']}</div>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo "<div class='flash-message error'>{$_SESSION['error']}</div>";
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.flash-message {
    padding: 12px 20px;
    margin: 20px auto;
    max-width: 600px;
    border-radius: 6px;
    font-size: 16px;
    text-align: center;
    font-weight: bold;
}
.flash-message.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.flash-message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
</style>

</head>
<body>
    
</body>
</html>