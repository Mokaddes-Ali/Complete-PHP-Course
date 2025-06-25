<?php

class User{
    public $email; 
    public function setEmail($email){
        //setEmail
        //add condition
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return;
        }
        $this->email = $email;
        // var_dump($this->email);
    }
    public function getEmail(){
        //getEmail
        return strtolower( $this->email);
    }
}

$user = new User;
$user->setEmail('Mokoka@gmail.com');
echo $user->getEmail();
// var_dump($user);
echo $user->email;

?>