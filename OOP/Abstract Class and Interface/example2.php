<?php

abstract class PaymentGateWay{

    abstract public function pay($amount);
    // must use this method for every step

//    abstract public function pay(){
//      abstract class ar method not allow body
//     }

public function refund(){
    // not abstract than have body
}


}

class Paypal extends PaymentGateWay{
    public function pay($amount){
        echo "Payment Paid $$amount via Paypal\n";

    }

}
class Stripe extends PaymentGateWay{
       public function pay($amount){
         echo "Payment Paid $$amount via Stripe\n";
        
    }
    
}

class Bkash extends PaymentGateWay{
       public function pay($amount){
         echo "Payment Paid $$amount via Bkash\n";
        
    }
    
}

$paypal = new Paypal();
$paypal->pay(200);

$stripe = new Stripe();
$stripe->pay(100);

$bkash = new Bkash();
$bkash->pay(500);