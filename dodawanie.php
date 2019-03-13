<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WITAJ</title>
</head>
<body>
    <?php
    if(isset($_GET['a']) && isset($_GET['b'])) {
        echo '<p>'. $_GET['a'] .' + '. $_GET['b'] .' = '. ($_GET['a']+ $_GET['b']) .'</br>';

        echo $_GET['a'] .' - '. $_GET['b'] .' = '. ($_GET['a'] - $_GET['b']) .'</br>';
        echo $_GET['a'] .' * '. $_GET['b'] .' = '. ($_GET['a'] * $_GET['b']) .'</br>';
        echo $_GET['a'] .' / '. $_GET['b'] .' = '. ($_GET['a'] / $_GET['b']) .'</br>';
        echo $_GET['a'] .' % '. $_GET['b'] .' = '. ($_GET['a'] % $_GET['b']) .'</br></p>';

        $k = $_GET['a'];
        echo '<p>'. $k . '(10) = '. (($k>>7) % 2) . (($k>>6) % 2) . (($k>>5) % 2) . (($k>>4) % 2) . (($k>>3) % 2) . (($k>>2) % 2) . (($k>>1) % 2) . ($k % 2).'(2)</p>';
    }
    ?>
</body>
</html>