

<?php
 //<-- bangking.system.account.management. -->
class Account{
    public $accountNumber;
    public $balance;
    public function __construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function getBalance(){
        return "Account Number:{$this->accountNumber}, Balance:{$this->balance}";
    }
    
}

class SavingsAccount extends Account{

    public $interestRate;
    public function __construct($accountNumber, $balance ,$interestRate){
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;

    }

    public function calculateInterest(){
        return $this->balance * $this->interestRate / 100;
    }

    public function getBalance(){
        $interest = $this->calculateInterest();

        return parent::getBalance() . " ," . "Interest Eraned: $interest";
    }
}

class CurrentAccount extends Account{
    public $overdraftLimit;
    public function __construct($accountNumber, $balance, $overdraftLimit){
        parent::__construct($accountNumber, $balance);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function getBalance(){
        return parent::getBalance() . " ," . "OverDraftLimit: {$this->overdraftLimit}";
    }
}

$savings = new SavingsAccount("SA123",340,20);
echo $savings->getBalance() . "\n";

$current = new CurrentAccount("Ali123",200,10);
echo $current->getBalance();
?>