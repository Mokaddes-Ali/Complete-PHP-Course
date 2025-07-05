<?php

include 'db_connect.php';
session_start();

try{
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id=$id";
    $result = $conn->query($sql);

    if($result === false){
        throw new Exception("Delete Failed:" . $conn->error);
}
else{
    $_SESSION['success'] = "Student deleted successfully!";
    header("Location: index.php");
    exit();
}
}catch(Exception $e){
    // die("". $e->getMessage());
    $_SESSION["error"] = $e->getMessage();
    header("Location: index.php");
    exit();
}
?>