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
        return "Title:{$this->title}, Author: {$this->author}\n ";
    }
}

class Article extends Content{
    private $content;

    public function __construct($title, $author, $content){
        parent::__construct($title, $author);
        $this->content = $content;

    }

    public function display(){
        echo "Displaying article: {$this->title} by {$this->author}\n";
        echo $this->content . "\n";
    }
}


class Vedio extends Content{
    private $duration;
    public function __construct($title, $author, $duration){
        parent::__construct($title, $author);
        $this->duration = $duration;
    }
    public function display(){
        echo "Playing Video: {$this->title} by {$this->author} Duration:{$this->duration} seconds \n";
    }
}

class Image extends Content{
    private $resulation;

    public function __construct($title, $author, $resulation){
        parent::__construct($title, $author);
        $this->resulation = $resulation;
    }
    public function display(){
        echo("Displaying Image: {$this->title} by {$this->author}, Resulation: {$this->resulation} ");
}
}


$article = new Article("PHP Abstract Example", "Mokaddess", "This dhfhdgjkdhfghdh fg h hfjghhjgjj");
$article->display();
echo $article->getInfo();

$vedio = new Vedio("PHP Abstract Example", "Mokaddess", 120);
$vedio->display();
echo $vedio->getInfo();
$image = new Image("PHP Abstract Example", "Mokaddess", "1920px*1200px");
$image->display();
echo $image->getInfo();
?>