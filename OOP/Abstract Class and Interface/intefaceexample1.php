<?php 

interface Payment{

     public function pay($amount);
}

class Paypal implements Payment{
    public function pay($amount){
        echo "Payment Paid $$amount via Paypal\n";

    }

}
class Stripe implements Payment{
       public function pay($amount){
         echo "Payment Paid $$amount via Stripe\n";
        
    }
    
}


$paypal = new Paypal();
$paypal->pay(200);

$stripe = new Stripe();
$stripe->pay(100);
