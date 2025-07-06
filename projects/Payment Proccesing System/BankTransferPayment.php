<?php
require_once 'PaymentMethod.php';

class BankTransferPayment implements PaymentMethod{
    public function processPayment($amount){
        echo "Processing BankTransferPayment payment of $" . $amount . "\n";
    }
}
?>