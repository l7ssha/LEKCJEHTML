<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 'ABC\nXYZ';
        $b = "ABC\nXYZ";

        echo $a . "\n" . $b;

        echo '<p>' . $_GET['a'] . ' + ' .$_GET['b']. ' = ' . ($_GET['a'] + $_GET['b']) + '</p>';
    ?>
</body>
</html>