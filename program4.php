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
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        $k = $_GET['k'] ?? 1;
        
        echo '<p>';
        
        if($a < $b) {
            for ($i=$a; $i <= $b; $i += $k) { 
                echo '<span>'. ($i) .'</span> ';
            }
        } else {
            for ($i=$a; $i >= $b; $i -= $k) { 
                echo '<span>'. ($i) .'</span> ';
            }
        }
        echo '</p>';
    ?>
</body>
</html>