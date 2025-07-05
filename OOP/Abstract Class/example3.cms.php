<?php 

abstract class Content{
    protected $title;
    protected $author;

    public function __construct($title, $author){
        $this->title = $title;
        $this->author = $author;

    }
    abstract public function display();

    public function getInfo(){
        return "Title:{$this->title}, Author: {$this->author}";
    }
}
?>