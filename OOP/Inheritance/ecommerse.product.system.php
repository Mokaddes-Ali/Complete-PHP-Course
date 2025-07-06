<!-- ecommerse.product.system with inhertitance -->
<?php 

class Product {
    public $name;
    public $price;
    public $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getDetails() {
        return "{$this->name} costs {$this->price} and is described as: {$this->description}";
    }
}

class Electronics extends Product {
    public $warranty;

    public function __construct($name, $price, $description, $warranty) {
        parent::__construct($name, $price, $description);
        $this->warranty = $warranty;
    }

    public function getDetails() {
        return parent::getDetails() . ". Warranty: {$this->warranty} Years.";
    }
}

class Book extends Product {
    public $author;
    public $publisher;

    public function __construct($name, $price, $description, $author, $publisher) {
        parent::__construct($name, $price, $description);
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function getDetails() {
        return parent::getDetails() . ". Author: {$this->author}, Publisher: {$this->publisher}.";
    }
}

// Output
$tv = new Electronics("Samsung TV", 500, "24 inch Smart LED TV", 2);
echo $tv->getDetails() . "\n";

$book = new Book("Islamic Book", 200, "Interesting Islamic content", "Ali", "As-Sunnah Publications");
echo $book->getDetails() . "\n";
?>
