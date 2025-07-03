<?php 

include_once('person.class.php');
// Make a Father information
$father = new Person;

$father->name = "M. Ali.";
$father->age = 25;
$father->sex = 'Male';
$father->profession = 'Teaching';
$father->weight = 65;

// Make Mother information

$mother = new Person;

$mother->name = "Lina Akther";
$mother->age = 20;
$mother->sex = 'Female';
$mother->profession = 'Teaching';
$mother->weight = 55;

// Make Child information
$child = new Person;

$child->name = "Alina Akther";
$child->age = 7;
$child->sex = 'female';
$child->profession = 'student';
$child->weight = 8;

// print father information
$father->getName();
$father->getWeight();
$father->getAge();
$father->getProfession();
$father->shop();


// Mother Information
echo "<h2>Mother Info</h2>";
$mother->getName();
$mother->getAge();
$mother->getSex();
$mother->getProfession();
$mother->getWeight();
$mother->shop();

//  Child Information
echo "<h2>Child Info</h2>";
$child->getName();
$child->getAge();
$child->getSex();
$child->getProfession();
$child->getWeight();
$child->shop();

?>