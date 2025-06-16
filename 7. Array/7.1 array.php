<?php
// Array => multiple data store variable
/*
$fruits = [
    "Mango", "Banana", "Rice", 12, 13.40,
];
print_r($fruits);
var_dump($fruits);
echo $fruits[0]
*/
/*
$number = [12, 20, 30, 50];
// value add in array last
array_push($number,40,50);
// value add in array first 
array_unshift($number,20,10);
//value from last
array_pop($number);
//value delete from array
array_shift($number);

print_r($number);
var_dump($number);
*/

$students = [
    // 'key' => 'value'
    'name' => 'M. Ali',
    'age' => 26,
    'class' => 12,
    'address' => 'Nilphamari'
];

// print_r($students);
// echo $students['name'];

// convert string to array use explode

$csv = "Mango, Banana, Jackfruit";
$fruits = explode(",", $csv);
print_r($fruits);

//  array to string 

$fruitsStr = implode("-",$fruits);
print_r($fruitsStr);

$studentInfo = [
    ['name' => 'Ab. Khalek', 'age' => 20],
    ['name' => 'Ab. Mokaddes', 'age' => 30],
    ['name' => 'Ab. Ali', 'age' => 40],
];

print_r($studentInfo);
echo $studentInfo[0]['name'];
echo "\n";
echo $studentInfo[1]['name'];
echo "\n";
echo $studentInfo[2]['name'];
echo "\n";
echo $studentInfo[0]['age'];
echo "\n";
echo $studentInfo[1]['age'];
echo "\n";
echo $studentInfo[2]['age'];
echo "\n";

$data = ['name' => 'Ab. Khalek', 'age' => 20];
$serialize = serialize($data);
print_r($serialize);
// string to json data convert
$jsonData = json_encode($data);
print_r($jsonData);