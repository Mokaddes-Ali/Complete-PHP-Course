<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid #ddd;
        padding: 10px;
    }
    </style>
</head>

<body style="background-color: aliceblue; font-size: 30px; margin-left: 100px;">
    <table>
        <?php 
        for( $i = 1 ; $i <= 6 ; $i++ ):
        ?>
        <tr>
            <?php  for( $j = 1 ; $j <= 6 ; $j++ ): ?>
            <td>
                <?php echo ($i * $j) ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
    <?php
    $fruits = ['Apple', 'Banana', 'Orange','Jackfruit'];
    ?>
    <ul>
        <?php foreach( $fruits as $fruit):?>
        <li><?php echo $fruit ?></li>
        <?php endforeach;?>
    </ul>
</body>

</html>