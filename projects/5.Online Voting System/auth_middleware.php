<?php 

if(!isset($_SESSION['auth']) || $_SESSION["auth"] !== true || !isset( $_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>