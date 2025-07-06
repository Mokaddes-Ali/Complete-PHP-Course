<?php 

class BankAccount{

    private $balance;

    public function deposit($amount){
        $this->balance += $amount;
    }

    public function getBalance(){
        return $this->balance;

    }

}

$account = new BankAccount();
$account->deposit(100);

echo $account->getBalance();
?>