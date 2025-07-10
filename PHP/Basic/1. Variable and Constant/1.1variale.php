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
    $age = 25;
    $salary = 50000;
    
    echo "Name:" . $personName . "<br>";
    echo "Age:" .  $age . "<br>";
    echo "Salary:" . $salary . "<br>";

    // Best Practise
    
    // $person_name............... SnakeCase(variable/function);
    // $myName................ camelCase(Method)
    // $MyName................ PascalCase(Class)
    $name = "Mokaddes Ali Devloper <br>";
    echo $name;
   ?>

</body>

</html>