<?php 

class Income{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function addIncome($source, $amount){
        $sql = "INSERT INTO entries (entry_date, category, amount, type, description) VALUES(CURDATE(),?,?,'income', ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['Income', $amount,$source]);

    }

    public function getTotalIncome(){
        $sql = "SELECT SUM(amount) as total_income FROM entries WHERE type='income'";
        $stmt = $this->pdo->prepare($sql);
       $stmt->execute(); // এই লাইনটা তোমার কোডে ছিল না
    $row = $stmt->fetch();
    return $row["total_income"] ?? 0;

    }
}


class Expense{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function addExpense($category, $amount){
         $sql = "INSERT INTO entries (entry_date, category, amount, type) VALUES(CURDATE(),?,?,'expense')";
         $stmt = $this->pdo->prepare($sql);
         $stmt->execute([ $category, $amount]);
    }
    public function getTotalExpense(){
        $sql = "SELECT SUM(amount) as total_expense FROM entries WHERE type='expense'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(); // এই লাইনটা অবশ্যই দরকার
    $row = $stmt->fetch();
    return $row['total_expense'] ?? 0;
    }
}

function calculateSavings($income, $expense){
    return $income - $expense;
}
?>