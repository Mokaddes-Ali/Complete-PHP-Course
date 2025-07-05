<?php
include 'config.php';
include 'classes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $income = new Income($pdo);
    $source = $_POST['income_source'];
    $amount = $_POST['income_amount'];
    $income->addIncome($source, $amount);
    echo "success";
}
?>
