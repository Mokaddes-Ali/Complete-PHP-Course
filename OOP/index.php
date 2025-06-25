<?php 

class User{
    public $username = "Mokaddes Ali";
    public $password = "12345678";

    public function getUserInfo(){
        return "User Name :" . $this->username ."\n" . "Your Password:" . $this->password ."\n";
    }
    public function avatar($size = 50){
        return $size;
    }  
}

$user = new User();

echo $user->getUserInfo();
echo $user->avatar(80);

var_dump($user);
var_dump($user->avatar(80));




?>