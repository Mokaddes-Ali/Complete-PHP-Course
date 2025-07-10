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


//associative array

/*
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


//Multi Dimensional Array

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
*/


// ForEach => In array all elements check by foreach

/*
//index array 
$fruits = ["Mango", "Banana", "Rice"];
// as means accept
foreach($fruits as $fruit){
    echo $fruit . " ";
    
};

echo "\n";
echo "\n";
*/


/*
//associative array
$personInforms = [
    'name' => 'Mokaddes Ali',
    'age' => 24,
    'address' => 'Rajshahi',
    'phone' => '01402967304',
];
foreach ( $personInforms as $key => $value ){
    echo "$key : $value\n";
};
 print_r($personInforms);
 */

 
/*
 $personInforms = [
    'name' => 'Mokaddes Ali',
    'age' => 24,
    'address' => 'Rajshahi',
    'phone' => '01402967304',
];

// use unset function delete first element of array

// unset($personInforms['name']);
print_r($personInforms);

*/

/*
//Array Filter Data

$data = ['Mango', '', null];

$filtered = array_filter($data);
print_r($filtered ); 

*/


$user =[
    'name' => 'Mokaddes Ali',
    'age' => 24,
    'address' => 'Rajshahi',
    'phone' => '01402967304',
    'email' => 'mokaddes.ru2000gmail.com',
];

//use extract built in function than array all key working as a variable
extract($user);
 echo $name; 
 
 // a array divided in defferent part by array_slice built in function 
 $numbers = range(1,15);
 $sliced = array_slice($numbers, 5,5);
 print_r($numbers);
 print_r($sliced);
 

 // merge => merge multiple array in one array
 $arr1 = ['mango', 'jackfruit'];
 $arr2 = ['Banana','Pineapple'];

 $merged = array_merge( $arr1, $arr2);
 print_r($merged );

//  search by in_array built in function
 $fruits = ['mango', 'jackfruit','Banana'];
 
 if(in_array('mango',$fruits)){
    echo "Found this fruit";
 }else{
    echo"Not Found this serach!";
 }
echo "\n";

 $arr1 = ['mango', 'jackfruit'];
 $arr2 = ['mango','Pineapple'];

 $difference = array_diff( $arr1,  $arr2);
 
//  print_r($difference);
// number 1 theke 15 prjnto jabe but difference 3 hbe
$numbers = range(1,15, 3); 
print_r($numbers);