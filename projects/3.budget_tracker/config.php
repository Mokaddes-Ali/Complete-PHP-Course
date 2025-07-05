<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php_personal_budget_traker_db";

try{
    // use PDO 
    $pdo = new PDO("mysql:host=$servername; dbname=$database", $username,$password);

    // PDO Error mode set and exception mode G
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br>";
    // if ($conn->connect_error) {
    //     throw new Exception("Connection failed". $conn->connect_error);
    // }
   

    $sql = "CREATE TABLE IF NOT EXISTS entries(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    entry_date Date NOT NULL,
    category VARCHAR(100) NOT NULL,
        amount DECIMAL(10,2) NOT NULL,
        type ENUM('income','expense') NOT NULL,
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
    ";

 $pdo->exec($sql);
         echo "<div style='padding:10px; background-color: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; border-radius: 5px;'>
                🛠️ Table 'students' created successfully or already exists.
              </div>";

}catch(PDOException $e){
    echo "<div style='padding:10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;'>
        ❌ Database Error: " . $e->getMessage() . "
    </div>";
}
?>