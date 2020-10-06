<?php
$cars        = 0;
$city1       = rand(0, 1000);
$city1Radius = 200;
$city1Start  = $city1 - $city1Radius;
$city1End    = $city1 + $city1Radius;
$city2       = rand(0, 1000);
$city2Radius = 100;
$city2Start  = $city2 - $city2Radius;
$city2End    = $city2 + $city2Radius;
//echo $city1 . ' = $city1' . '<br>';
//echo $city2 . ' = $city2' . '<br>';

for ($i = 20; $i > $cars; --$i) {
    $positionCar = rand(0, 1000);
//echo $positionCar . '<br>';

    if ($positionCar >= $city1Start && $positionCar <= $city1End
        || $positionCar >= $city2Start && $positionCar <= $city2End
    ) {
        echo 'Машина ' . ++$cars . ' едет по городу на ' . $positionCar .
            ' км со скоростью не более 70' . '<br>';
    } else {
        echo 'Машина ' . ++$cars . ' едет за городом на ' . $positionCar .
            ' км со скоростью не более 90' . '<br>';
    }
}

