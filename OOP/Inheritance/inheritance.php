<?php

// DRY => Don't Repeat Yourself
class Model{
    // parent
    protected $dates = [];
    /**
     * @throws Exception
     *
     */
    // previous php Magic Method
    public function __get($property){
        if(in_array($property, $this->dates)){
            return new DateTime($this->{$property});
        }

        // var_dump($this->dates);
        // die($this->{$property});
    }
    
}

class User extends Model{
    // child
protected $dates = ['creatAt', 'upDatedAt'];
    protected $creatAt = "2025-06-24 12:54:55";
    // public function getCreatAt(){
    //     return new DateTime($this->creatAt);
    // }
    
}

class Comment extends Model{
    // child
protected $dates = ['creatAt'];
    protected $creatAt = "2025-06-24 12:54:55";
    
}


$user = new User;

var_dump($user->creatAt->format('H:i'));
// var_dump($user->getCreatAt());

$comment = new Comment;

var_dump($comment->creatAt->format('H:i'));

?>