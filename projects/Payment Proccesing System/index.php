<?php 
require_once 'CreditCardPayment.php';
require_once 'PayPalPayment.php';
require_once 'BankTransferPayment.php';
require_once 'PaymentProcessor.php';

$creditCardPayment = new CreditCardPayment();
$paymentProcessor = new PaymentProcessor($creditCardPayment);
$paymentProcessor->makePayment(100.00);



$payPalPayment = new PayPalPayment();
$paymentProcessor = new PaymentProcessor($payPalPayment);
$paymentProcessor->makePayment(50);



$bankTransferPayment = new BankTransferPayment();
$paymentProcessor = new PaymentProcessor($bankTransferPayment);
$paymentProcessor->makePayment(200);


?>