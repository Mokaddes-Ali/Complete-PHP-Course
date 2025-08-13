<?php


/* 
PHP শুধুমাত্র single inheritance সাপোর্ট করে
PHP-তে trait ব্যবহার করে multiple inheritance সাপোর্ট করা যায়
*/

// ----------- Example 1: Multiple Traits with Different Methods -----------
trait Log {
    public function UserLog($message) {
        echo $message;
    }
}

trait Tracetime {
    public function TrainTime() {
        echo " " . date('Y-m-d') . "\n";
    }
}

class UserInfo {
    use Log, Tracetime;

    public function UserDetail($userName) {
        echo 'The logged user name is: ' . $userName . ' created successfully at';
    }
}

// Test Example 1
$user = new UserInfo();
$user->UserDetail('Mokaddes Ali');
$user->TrainTime();


// ----------- Example 2: Conflict Resolution Between Traits -----------
trait Trait1 {
    public function sayHello() {
        echo "Hello from Trait1\n";
    }
}

trait Trait2 {
    public function sayHello() {
        echo "Hello from Trait2\n";
    }
}

class Test {
    use Trait1, Trait2 {
        Trait1::sayHello insteadof Trait2;  // Trait1 এর method use হবে
        Trait1::sayHello as helloFromTrait1; // Trait1 এর method আলাদা নামে access হবে
    }
}

// Test Example 2
$test = new Test();
$test->sayHello();          // Output: Hello from Trait1
$test->helloFromTrait1();   // Output: Hello from Trait1


// ----------- Example 3: Conflict Resolution with Different Message -----------
trait Log1 {
    public function UserLog($message) {
        echo $message . " from Log1 method\n";
    }
}

trait Tracetimer {
    public function UserLog($message) {
        echo $message . " from Tracetimer method\n";
    }
}

class UserInformation {
    use Log1, Tracetimer {
        Log1::UserLog insteadof Tracetimer; // Log1 method will be used
    }
}

// Test Example 3
$user2 = new UserInformation();
$user2->UserLog('Mokaddes Ali'); // Output: Mokaddes Ali from Log1 method
