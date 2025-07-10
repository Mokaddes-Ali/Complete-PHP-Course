<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>

<body>
    <?php

    /* Data Types
             
     ***Scalar Type(single value)
     
              Integer
              Float/Double
              String
              Boolean
             
     ***Compound Types(Multiple Value/Data Store)
            
              Array
              Object
            
            
     ***Special Type
              
              Null
              Resource
    */
    
    // Example Data Type
    $age = 25; //integer data type
    $price = 40.43; //float data type
    $myName = "Mokaddes Ali"; //String data type
    $is_admin = false;  //boolean data type
    
    // Array

    $fruits = ["Mango", "Banana", 27];

    echo "This data come from array:   " . $fruits[2] . "<br>";
    
    // $user1 = new User();
    
    $special_variable = NULL; 
    //Null use for default value for example cupon code
    
    //Resource Data Type
    // $file = fopen("test.txt", "r");
    
    // ***Check Data Type
    
    // echo "is_int($price)"; 
    ?>

</body>

</html>