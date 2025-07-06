<?php 
interface PaymentMethod{
    public function processPayment($amount);
}
?>