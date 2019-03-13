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
        if(!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c'])) {
            die("Cannot run script without a,b,c parameters");
            //return;
        }

        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        echo max($a, $b, $c);

        echo '<br>';

        if($c > $a) {
            if($c > $b) {
                echo $c;
            } else {
                echo $b;
            }
        } else
            echo $a;

        echo '<br>';

        if($c > $a && $c > $b) {
            echo $c;
        } else if ($b > $a) {
            echo $b;
        }
        else
            echo $a;

        echo '<br>';

        if(($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) {
            if (($a * $a + $b * $b == $c*$c) ||
                ($a * $a + $c*$c == $b*$b) ||
                ($b*$b + $c*$c == $a*$a)) {
                    echo "TROJKAT PROSTOKATNY";
            } else {
                echo 'TO JEST TROJKAT';
            }
        } else {
            echo "TO NIE JEST TROJKAT";
        }
    ?>
</body>
</html>