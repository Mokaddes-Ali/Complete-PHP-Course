<?php 

namespace MyProject\Database;

class Connection {
    public function connect(){
     echo "Connecting to the database";
    }
    
}

namespace MyProject\User;

class Profile{
    public function showProfile(){
        echo "Showing user profile";
    }
}

?>