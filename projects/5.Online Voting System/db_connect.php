<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php_online_voting_system";

try{
    // use PDO 
    $conn = new PDO("mysql:host=$servername; dbname=$database", $username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br>";
   

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address VARCHAR(255),
    photo VARCHAR(255),
    role INT(1) COMMENT '0 = Voter, 1 = Group, 2 = Admin',
    status INT(1) COMMENT '0 = Inactive, 1 = Active',
    votes INT(11) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


$conn->exec($sql);
echo "<div style='padding:10px; background-color: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; border-radius: 5px;'>
                🛠️ Table 'students' created successfully or already exists.
              </div>";


}catch(PDOException $e){
    echo "<div style='padding:10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;'>
        ❌ Database Error: " . $e->getMessage() . "
    </div>";
}
?>