<?php 

class DatabaseConnection{
    private $connection;

    public function __construct($host, $username, $password, $database){
        $this->connection = new mysqli($host, $username, $password, $database);
        if($this->connection->connect_error){
            die("Database Connection Failed:". $this->connection->connect_error);
        }
        echo "Database Connected Successfully.\n";
    }

    public function getConnection(){
        return $this->connection;
    }
}

$dbConnection = new DatabaseConnection("localhost","root","","testdb");
$dbConnection->getConnection();
?>