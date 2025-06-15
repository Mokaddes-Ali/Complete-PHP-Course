<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body style="background-color: aliceblue; font-size: 30px; margin-left: 100px;">
    <?php
    // variable
    $personName = "Mokaddes Ali<br>";
    
    echo $personName;

    // Best Practise
    
    // $person_name............... SnakeCase(variable/function);
    // $myName................ camelCase(Method)
    // $MyName................ PascalCase(Class)
    $name = "Mokaddes Ali Devloper <br>";
    echo $name;
    
    // Constant

    define("PI", 3.1416);
    echo PI . "<br>"; // concatination

    // statement and expression
    
    $animals = "Dogs"; 
    /* here $animals and "Dogs" are both separate expression but 
     $animals = "Dogs"; full is a statement(compelete a verb) */

    
    
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
    

    // ***Operators

    //***Arithmetic Operators
    
    $num1 = 45;
    $num2 = 30;
    
    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num1 / $num2;
    $modulas = $num1 % $num2;
    $exponentiation = $num1 ** $num2; // find power

    echo "Addition is: " . $addition . "<br>";
    echo "subtraction is: " . $subtraction . "<br>";
    echo "multiplication is: " . $multiplication . "<br>";
    echo "division is: " . $division . "<br>";
    echo "modulas is: " . $modulas . "<br>";
    echo "exponentiation is: " . $exponentiation . "<br>";


    //Assingment Operator
    
    $num1 += 5; // $num1 = $num1 +5;
    echo "addition value: " . $num1 . "<br>"; 
     $num1 -= 5; // $num1 = $num1 -5;
     echo "subtracvtion value: " . $num1 . "<br>"; 
      $num1 *= 5; // $num1 = $num1 *5; 
      echo "multiplication value: " . $num1 . "<br>"; 
       $num1 /= 5; // $num1 = $num1 /5;
       echo "divisional value: " . $num1 . "<br>"; 
        $num1 %= 5; // $num1 = $num1 %5;
        echo "modulas value: " . $num1 . "<br>"; 
      

    
    echo "Last value: " . $num1;
        
   

   ?>

</body>

</html>