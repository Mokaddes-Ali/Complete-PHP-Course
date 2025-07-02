<?php 
class Product{
    public $name;
    public $price;
    public $category;
    public $quantity;
    public $brand;

    public function showProduct(){
        echo "<div class= 'result'>";
        echo "<h2>Product Information</h2>";
        echo "<p><strong>Name:</strong>$this->name</p>";
         echo "<p><strong>Price:</strong>$this->price</p>";
          echo "<p><strong>Category Name:</strong>$this->category</p>";
           echo "<p><strong>Quatity:</strong>$this->quantity</p>";
            echo "<p><strong>Brand Name:</strong>$this->brand</p>";
             echo "</div";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            padding: 30px;
        }
        .form-box {
            max-width: 400px;
            background: white;
            padding: 25px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-box label {
            display: block;
            margin-top: 10px;
        }
        .form-box input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .form-box button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .result {
            max-width: 400px;
            margin: 30px auto;
            background: #e7ffe7;
            padding: 20px;
            border-left: 5px solid green;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Enter Product Details</h2>
    <form method="POST">
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <label for="category">Category:</label>
        <input type="text" name="category" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" required>

        <button type="submit" name="submit">Show Product</button>
    </form>
</div>


<?php 
if($_SERVER['REQUEST_METHOD'] = "POST" && isset($_POST['submit'])){
    $product = new Product();
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->category = $_POST['category'];
    $product->quantity = $_POST['quantity'];
    $product->brand = $_POST['brand'];

    $product->showProduct();
}
?>
    
</body>
</html>