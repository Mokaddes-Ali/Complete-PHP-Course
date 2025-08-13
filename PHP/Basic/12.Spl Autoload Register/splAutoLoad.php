<?php

// include_once('user.php');
// include_once('product.php');

spl_autoload_register (function ($class){
    $path = 'includes/' . str_replace("\\", "/", $class) . '.php';
include $path;
 if (file_exists($path)) {
        include $path;
    } else {
        echo "File not found: $path<br>";
    }
});

new Product();
new User();
?>