<?php

/* Constant
constant mainly two type 
1.define() function 
2.const 
Normal formula
1.define("Constant_Name", "value");
2.const "Constant_Name" = "value";
*/

/* Example-01:
 Weekly Day Define
 */
define('DAYS_IN_WEEK', '7');

echo "There are" . DAYS_IN_WEEK . "days in a week" . "<br>";

/* Example-02:
 deine Pi value
 */
    define("PI", 3.1416);
    $radius = 5;
    $circumference = 2*PI* $radius;

    echo "The result ofcircumference cirle is: " . $circumference . "<br>"; // concatination


/* Example-02:
product Vat store
 */
define("VAT_RATE", 0.15);

$product_price = 100;
$total_price = $product_price + ($product_price * VAT_RATE);

echo "Total Price including vat is:" . $total_price ." ";

   
    // statement and expression
    
    $animals = "Dogs"; 
    /* here $animals and "Dogs" are both separate expression but 
     $animals = "Dogs"; full is a statement(compelete a verb) */
