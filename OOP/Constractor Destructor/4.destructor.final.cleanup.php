<?php 

class Cache{
    private $cacheData;
    public function __construct(){
        // $this->cacheData = array();
         $this->cacheData = [];
         echo "Cache initialized. \n";
    }

    public function addData($key, $value){
        $this->cacheData[$key] = $value;
        echo "Data added to cach: {$key} => {$value}\n";
    }

    public function getData($key){
        if(isset($this->cacheData[$key])){
            return $this->cacheData[$key];
        }else{
            return null;
        }
    }

    public function __destruct(){
        $this->cacheData = [];
        echo "Cach cleared.";
    }
}

$cach = new Cache();
$cach->addData("username","Mokaddes Ali");
$cach->addData("email","mokaddes.ru@gmail.com");

echo("Username from cach:" . $cach->getData("username") ."\n");
?>