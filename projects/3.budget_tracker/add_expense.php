<?php
include 'config.php';
include 'classes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $expense = new Expense($pdo);
    $category = $_POST['expense_category'];
    $amount = $_POST['expense_amount'];
    $expense->addExpense($category, $amount);
    echo "success";
}
?>
