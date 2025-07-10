<?php 

interface Payment{
    public function pay($amount);
}

class PayPal implements Payment{
    public function pay($amount){
        echo "Paid Amount $amount via PayPal\n ";
    }
}

class Stripe implements Payment{
    public function pay($amount){
        echo "Paid Amount $amount via Stripe\n ";
    }
}

$gatways = [new Paypal(), new Stripe()];

foreach ($gatways as $gatway){
    $gatway->pay(800); 
}
?>