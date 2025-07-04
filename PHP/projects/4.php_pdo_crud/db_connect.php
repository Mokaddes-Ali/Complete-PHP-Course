<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php_pdo_crud";

try{
    // use PDO 
    $conn = new PDO("mysql:host=$servername; dbname=$database", $username,$password);

    // PDO Error mode set and exception mode G
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br>";
    // if ($conn->connect_error) {
    //     throw new Exception("Connection failed". $conn->connect_error);
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