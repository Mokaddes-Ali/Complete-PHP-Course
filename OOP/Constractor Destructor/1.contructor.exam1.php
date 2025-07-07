<?php 

class person{
    public $name;
     public $age;
     public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
     }

     public function displayInfo(){
        echo "Name: ".$this->name. " " . "Age: ".$this->age."\n";
     }

}

$person1 = new Person("Mokadddes Ali","25" . "\n");
$person1->displayInfo();

$person2 = new Person("Naimur Rahman","30" . "\n");
$person2->displayInfo();


?>