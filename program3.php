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
        /*isset($_GET['a1']) or die("a missing");
        isset($_GET['b1']) or die("b missing");
        isset($_GET['c1']) or die("c missing");
        isset($_GET['a2']) or die("a2 missing");
        isset($_GET['b2']) or die("b2 missing");*/

        $a1 = $_GET['a1'];
        $b1 = $_GET['a2'];
        $c1 = $_GET['a3'];

        $a2 = $_GET['b1'];
        $b2 = $_GET['b2'];
        $c2 = $_GET['b3'];

        $a2 = $a1 * $a3 + $a2;
        $a1 = 0;

        $b2 = $b1 * $b3 + $b2;
        $b1 = 0;

        echo $a2 . "/" . $a3 . ' + ' . $b2 . '/' . $b3;

    ?>
</body>
</html>