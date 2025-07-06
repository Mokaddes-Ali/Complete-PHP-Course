<?php 

class User{
protected $age;
protected  function setAge($age){
    $this->age = $age;
}
}

class Admin extends User{


    public function setAdminAge($age){
        $this->age = $age;
    }
}

$admin = new Admin();
 $admin->setAdminAge(25);


?>
