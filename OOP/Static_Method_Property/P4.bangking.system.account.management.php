<?php
// <-- banking.system.account.management. -->
class BankAccount{
    public static $interestRate = 0.05;
    const MIN_BALANCE = 500;
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function calculateInterest($amount){
        return $amount * self::$interestRate;
    }

    public function showAccountDetails(){
        return "Account Number: {$this->accountNumber}, Balance: {$this->balance} BDT";
    }

    public function checkMinBalance(){
        if ($this->balance < self::MIN_BALANCE) {
            return " Warning: Balance is below the minimum required balance of " . self::MIN_BALANCE . " BDT.";
        } else {
            return "Great! Your balance is sufficient.";
        }
    }
}


$account1 = new BankAccount("ACC12345", 1200);
$account2 = new BankAccount("ACC67890", 300);


echo " Account 1 Details:\n";
echo $account1->showAccountDetails() . "\n";
echo "Interest on 1000 BDT: " . $account1->calculateInterest(1000) . " BDT\n";
echo $account1->checkMinBalance() . "\n\n";

// Displaying Account 2 Details
echo "Account 2 Details:\n";
echo $account2->showAccountDetails() . "\n";
echo " Interest on 1000 BDT: " . $account2->calculateInterest(1000) . " BDT\n";
echo $account2->checkMinBalance() . "\n";
?>
