<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysqli_crud_db";

try{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Connection failed". $conn->connect_error);
    }
    // else{
    //     echo "<div style='padding:10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 10px;'>
    //             Database connection successful!
    //           </div>";
    // }

    $sql = "CREATE TABLE IF NOT EXISTS students(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20),
        address VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
    ";

    if($conn->query($sql) === TRUE){
        //  echo "<div style='padding:10px; background-color: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; border-radius: 5px;'>
        //         🛠️ Table 'students' created successfully or already exists.
        //       </div>";
    }else {
        echo "<div style='padding:10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;'>
                ❌ Error creating table: " . $conn->error . "
              </div>";
    }
}catch(Exception $e){
    die("Database Connection Error:". $e->getMessage());
}
?>