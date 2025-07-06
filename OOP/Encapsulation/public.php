<?php 

class Person{
    public $name;
    public $email;

    public function sayHello(){
        return "Hello," . $this->name;

}
}

$person = new Person();
$person->name = "Mokaddes Ali";
echo $person->sayHello();
?>