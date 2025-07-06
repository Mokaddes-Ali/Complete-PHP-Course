<?php 
class PaymentProcessor{
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod){
        $this->paymentMethod = $paymentMethod;
}

public function makePayment($amount){
    $this->paymentMethod->processPayment($amount);
}
}
?>