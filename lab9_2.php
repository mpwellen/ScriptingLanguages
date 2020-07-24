<!DOCTYPE html>
<html>
<body>

<h1>lab9_2.php</h1>

<?php
$intArray = [random_int(0, 1000), random_int(0, 1000), random_int(0, 1000), random_int(0, 1000),random_int(0, 1000),random_int(0, 1000),random_int(0, 1000),random_int(0, 1000),random_int(0, 1000),random_int(0, 1000)];

    print_r("Random values: ");
    print_r($intArray[0]);
    print_r(" ");
    print_r($intArray[1]);
    print_r(" ");
    print_r($intArray[2]);
    print_r(" ");
    print_r($intArray[3]);
    print_r(" ");
    print_r($intArray[4]);
    print_r(" ");
    print_r($intArray[5]);
    print_r(" ");
    print_r($intArray[6]);
    print_r(" ");
    print_r($intArray[7]);
    print_r(" ");
    print_r($intArray[8]);
    print_r(" ");
    print_r($intArray[9]);

    echo '<br/>';

    sort($intArray);

    print_r("minimum: ");
    print_r($intArray[0]);
    echo '<br/>';

    print_r("maximum: ");
    print_r($intArray[9]);
    echo '<br/>';

    print_r("low to high: ");
    print_r($intArray[0]);
    print_r(" ");
    print_r($intArray[1]);
    print_r(" ");
    print_r($intArray[2]);
    print_r(" ");
    print_r($intArray[3]);
    print_r(" ");
    print_r($intArray[4]);
    print_r(" ");
    print_r($intArray[5]);
    print_r(" ");
    print_r($intArray[6]);
    print_r(" ");
    print_r($intArray[7]);
    print_r(" ");
    print_r($intArray[8]);
    print_r(" ");
    print_r($intArray[9]);
    echo '<br/>';

    print_r("high to low: ");
    print_r($intArray[9]);
    print_r(" ");
    print_r($intArray[8]);
    print_r(" ");
    print_r($intArray[7]);
    print_r(" ");
    print_r($intArray[6]);
    print_r(" ");
    print_r($intArray[5]);
    print_r(" ");
    print_r($intArray[4]);
    print_r(" ");
    print_r($intArray[3]);
    print_r(" ");
    print_r($intArray[2]);
    print_r(" ");
    print_r($intArray[1]);
    print_r(" ");
    print_r($intArray[0]);
    echo '<br/>';

    print_r("average: ");
    print_r(($intArray[0]+$intArray[1]+$intArray[2]+$intArray[3]+$intArray[4]+$intArray[5]+$intArray[6]+$intArray[7]+$intArray[8]+$intArray[9])/10);



?>

</body>
</html>
