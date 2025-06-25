<?php 
class person {
    public $name;
    public $weight;
    public $age;
    public $sex;
    public $profession;

    public function eat(){
        echo $this->name . " is eating...<br>";
    }
    public function shop(){
        echo $this->name . " is shopping...<br>";
    }
    public function cook(){
        echo $this->name . " is cooking...<br>";
    }
    public function sleep(){
        echo $this->name . " is sleeping...<br>";
    }

    public function getName(){
        echo "Name: " . $this->name . "<br>";
    }
    public function getWeight(){
        echo "Weight: " . $this->weight . " kg<br>";
    }
    public function getAge(){
        echo "Age: " . $this->age . " years<br>";
    }
    public function getSex(){
        echo "Sex: " . $this->sex . "<br>";
    }
    public function getProfession(){
        echo "Profession: " . $this->profession . "<br>";
    }
}

?>