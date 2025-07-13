<?php

/* 
PHP শুধুমাত্র single inheritance সাপোর্ট করে
PHP-তে trait ব্যবহার করে multiple inheritance সাপোর্ট করে ।
*/
trait Log{
    public function UserLog($message){
        echo "".$message."";
    }
}

trait Tracetime{
    public function TraintTime(){
        echo " ". date('Y-m-d') . "\n";
    }
}

class UserInfo{
    use Log, Tracetime;
    public function UserDetail($userName){
        echo 'The Loger user name is:'.$userName.'created successfully at';
    }

}

$user = new UserInfo();
$user->UserDetail('Mokaddes Ali');
$user->TraintTime();

/*
 Give Prioty of same method in multiple trait

 যদি দুইটি trait-এ একই নামের method থাকে, তাহলে insteadof এবং as দিয়ে handle করতে হয়
 */

#Example-01
 trait Trait1 {
    public function sayHello() {
        echo "Traits from Trait1\n";
    }
}

trait Trait2 {
    public function sayHello() {
        echo "Traits from Trait2";
    }
}

class Test {
    use Trait1, Trait2 {
        Trait1::sayHello insteadof Trait2; // Trait1 এর method use হবে
        // Trait2::sayHello insteadof Trait1; // Trait2 এর method use হবে
        Trait1::sayHello as helloFromTrait1; // Trait1 এর method আলাদা নামে access হবে
    }
}

$test = new Test();
$test->sayHello();
$test->helloFromTrait1();

#Example 02

trait Log1{
    public function UserLog($message){
        echo "".$message."from Log1 method";
    }
}

trait Tracetimer{
   public function UserLog($message){
        echo "".$message."from Tracetimer method";
    }
}

class UserInformation{
    use Log1, Tracetimer{
        Log1::UserLog insteadof Tracetimer;
    }
   

}

$user = new UserInformation();
$user->UserLog('Mokaddes Ali');
