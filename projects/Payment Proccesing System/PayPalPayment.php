<?php
require_once 'PaymentMethod.php';

class PayPalPayment implements PaymentMethod{
    public function processPayment($amount){
        echo "Processing PayPalPayment payment of $" . $amount . "\n";
    }
}
?>