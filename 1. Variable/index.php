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

   ?>

</body>

</html>