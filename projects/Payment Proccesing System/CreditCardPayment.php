<?php
require_once 'PaymentMethod.php';

class CreditCardPayment implements PaymentMethod{
    public function processPayment($amount){
        echo "Processing credit card payment of $" . $amount . "\n";
    }
}
?>