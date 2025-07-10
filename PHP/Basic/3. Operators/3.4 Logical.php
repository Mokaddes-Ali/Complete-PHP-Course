<?php 

$t = true;
$f = false;
$number1 = 10;
$number2 = 30;

//1. Logical And(&&)
#example1
if($number1 > 0 && $number2 > 0){
    echo "Both Values are positive\n";
}else{
    echo "At least one value in not positive\n";
}
#example2
$and = $t && $f;
var_dump($and);

#example3
$hasTicket = true;
$isOnTime = true;
if($hasTicket && $isOnTime ){
    echo "Both Values are required. You can pass the get.\n";
}else{
    echo "At least one value is not required.You can not pass the get.\n";
}

//2. Logical OR(||)
#example1
$or = $t || $f;

var_dump($or);

#example2
$hasCar = true;
$hasOnBus = false;
if($hasCar || $hasOnBus ){
     echo "You can pass the get.\n";
}else{
     echo "You can not pass the get.\n";
}

#example3
$hasFriend = true;
$isWeatherGood = true;
if($hasFriend || $isWeatherGood ){
    echo "I am going play game.\n";
}else{
    echo "I am not going play game.\n";
}

$not = !$f;
var_dump($not);

$not = !$t;
var_dump($not);

var_dump($t && $f);
var_dump($t || $f);
var_dump(!$f);
var_dump(!$t);


//3. Logical XOR(^)
# At least one true and another must be false.
$likesPizza = true;
$likesIceCream = false;

if($likesPizza ^ $likesIceCream){
    echo "You can eat pizza or icecream but not both!\n";
}else{
    echo "You can eat both.\n";
}
?>