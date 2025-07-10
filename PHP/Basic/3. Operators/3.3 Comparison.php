<?php
$num1 = 20;
$num2 = 30;

// 1. Equal To ==
#example1
$equal = $num1 == $num2;

echo "Checking if \$num1 == \$num2: ";
var_dump($equal);
#example2
$price1 = 15;
$price2 = 20;
if($price1 == $price2) {
   echo "The prices is equal\n";
} else {
   echo "The prices are not equal\n";
}


// 2. Not Equal To !=;
#example1
if($price1 != $price2) {
   echo "The prices is equal\n";
} else {
   echo "The prices are not equal\n";
}
#example2
$notEqual = $num1 != $num2;
echo "Checking if \$num1 != \$num2: ";
var_dump($notEqual);

// 3. Identical Operator
#example1
$number1 = 500; # A number type value
$number2 = '500'; # A string type value

/*  == value true return krbe ata data type check kre na

if($number1 == $number2) {
   echo  "The values and their types are identical\n";
}else{
    echo  "The values and their types are not identical\n";
}
*/

#same data and same vule must be
if($number1 === $number2) {
   echo  "The values and their types are identical\n";
}else{
    echo  "The values and their types are not identical\n";
}

#example2
$identical = $num1 === $num2;
echo "Checking if \$num1 === \$num2 (Identical): ";
var_dump($identical);


// 4. Not Identical Operator
#example1
if($number1 !== $number2) {
   echo  "The values and their types are identical\n";
}else{
    echo  "The values and their types are not identical\n";
}

#example2
$status1 = 'Active';
$status2 = 'active';
if($status1 !== $status2) {
   echo "Status bars are not identical\n";
}else{
   echo "Status bars are identical\n";
}
#example3
$notIdentical = $num1 !== $num2;
echo "Checking if \$num1 !== \$num2 (Not Identical): ";
var_dump($notIdentical);

//5. Greater Than: >
$greater = $num1 > $num2;
echo "Checking if \$num1 > \$num2: ";
var_dump($greater);

//6. Less Than: <
$less = $num1 < $num2;
echo "Checking if \$num1 < \$num2: ";
var_dump($less);

// 7. Greater than or equal to 

#example1
$salary = 50000;
$minimumSalary = 45000;
if($salary >= $minimumSalary) {
   echo "Salary meets the criteria\n";
}else{
   echo "Salary does not meets the criteria\n";
}

#example2
$greaterEqual = $num1 >= $num2;
echo "Checking if \$num1 >= \$num2: ";
var_dump($greaterEqual);

// 8. Less than or equal to 

#example1
$fee =150;
$budget = 200;
if($fee <= $budget) {
   echo "Fee is within budget\n";
}else{
   echo "Fee is not within budget\n";
}
#example2
$lessEqual = $num1 <= $num2;
echo "Checking if \$num1 <= \$num2: ";
var_dump($lessEqual);


//9. Spaceship operator (<=>)
// <=> ($a <=> $b === 0) spaceship operator

$gustAge = 28;
$ageLimit = 30;
$result = $gustAge <=> $ageLimit;

if($result < 0) {
   echo "Guest join the party.";
}elseif($result === 0){
   echo "Guest join the party. equal value";
}else{
   echo "Guest can not join the party.";
}

$spaceship1 = 3 <=> 5; //-1 output first value small
echo "$spaceship1\n"; 

$spaceship2 = 5 <=> 5; //0 output two value same
echo "$spaceship2\n"; 

$spaceship3 = 6 <=> 5; //1 output first value big
echo "$spaceship3\n"; 