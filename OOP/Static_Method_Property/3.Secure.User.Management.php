<?php 

class User{

    private static $users = [];
     private static $totalUsers = 0;

     public static function register($username, $email, $password){
        if(
            !self::isValidUsername($username) ||
             !self::isValidEmail($email) ||
              !self::isValidPassword($password)
              ){
            return false;
              }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            self::$users[$username] = [
                'username' => $username,
                "email"=> $email,
                "hashPassword"=> $hashedPassword
            ];
            self::$totalUsers++;
            return true;

}

public static function authenticate($username, $password){
    if(isset(self::$users[$username])){
            $hashedPassword = self::$users[$username] ['hashPassword'];
            if(password_verify($password, $hashedPassword)){
                return true;
            }
        }
        return false;
    }

    public static function getTotalUsers(){
        return self::$totalUsers;

    }

    private static function isValidUsername($username){
        return strlen($username) >= 4;
    }
    private static function isValidEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    private static function isValidPassword($password){
        return strlen($password) >= 8;
    }
}



// uses the above code

if(
    User::register('Mokaddes', 'moka@gmail.com','12345678')
){
    echo "Register successfuly!\n";
}else{
    echo "Register Failed!. Invalid Data";
}

if(User::authenticate('Mokaddes', '12345678')){
    echo "Authentication successfully!\n";
}else{
    echo "Authentication Faild!";
}

$totalUsers = User::getTotalUsers();

echo "Total Registered Users: $totalUsers";
?>