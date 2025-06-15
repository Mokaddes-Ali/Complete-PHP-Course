<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body style="background-color: aliceblue; font-size: 40px; margin-left: 100px;">
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
    echo PI;



   ?>

</body>

</html>