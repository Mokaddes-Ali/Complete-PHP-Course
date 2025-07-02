<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    if($username){
        setcookie("username", $username, time() + (8640*30), "/");
        $message = "Login Successfull! Cookie set for $username";
    }else{
        $message = "Please enter a username";
    }
}elseif (isset($_COOKIE["username"])){
    $message = "Welcome back, " . $_COOKIE["username"];
}else{
    $message = "No user is login";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Cookies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 30px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"] {
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            margin: 20px 0;
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Welcome Cookies</h1>
    <h2>Cookie Practice</h2>
    
    <div class="message">
        <?php echo $message; ?>
    </div>

    <form method="POST" action="">
        Username: <input type="text" name="username">
        <input type="submit" value="Login">
    </form>
</body>
</html>
