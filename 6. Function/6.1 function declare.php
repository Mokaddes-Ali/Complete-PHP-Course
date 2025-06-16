<?php
/* function greet(){
    echo "Hello, Function of PHP!\n";
}

greet();
greet();
greet();
greet();
greet();
*/

// Build in function : the function make previouse this function called build in function

// function addition($number1,$number2){
//     return $number1 + $number2;
// }
// echo addition(10,5);


//***default parameter pass
/*
function addition($number1,$number2 = 10){
    return $number1 + $number2;
}
echo addition(10, 20);
*/

/*
kono parameter na pele default parameter kaj krbe
but user parameter dile seta kaj krbe */

// ***Global and Local variable in function

// $globalVar = "Global"; // Global Variable this use out in function
// function testScope(){
    
//     $local = "Local"; // Local variable use in function block
//    global $globalVar; // use global variable in block
//                       // than must use global, it is called Scope
//     echo $globalVar . "\n";
//     echo $local;
// }

// testScope();


// Anonymous Function
// *** j function ar kono name thake na take anonymous function ble
 //variable diye anonymous function called krte hy
/*
 $greet = function(){
    echo "Hello, Function of PHP!\n";
};

 $greet();
 */


// *** Arrow Function
/*
 $add = fn($number1,$number2)=>
  $number1 + $number2;

echo $add (10, 20);
*/

// *** Call Back function

function process($callback){
    return $callback("Future Developer!");
}

$result = process(function($name){
    return "Hello, $name!";
});

echo $result;


?>