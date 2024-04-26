<!DOCTYPE HTML>
<html>
    <head>
</head>
<body>
    <h2> Sorting Array </h2>
    <?php
    $numbers = array(8, 4, 1, 9, 23, 54, 17, 30);
    sort($numbers);

    $arrLenght = count($numbers);
    for($x = 0; $x < $arrLenght; $x++){
        echo $numbers[$x] . "<br>";
    }
?>
</body>
</html>