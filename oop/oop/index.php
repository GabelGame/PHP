<?php

require_once 'classes/CarClass.php';

function debug($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car = new CarClass('черный', 5, 180, 'bmw');
$car2 = new CarClass('белый', 5, 200, 'bmw');
debug($car);
debug($car2);
echo $car->getCarInfo();
echo $car2->getCarInfo();

// $car->color = 'черный';
// $car->brand = 'bmw';
// $car->speed = 200;
// $car->colour = 'красный';

// debug($car);

// $car2->color = 'белый';
// $car2->brand = 'bmw';
// $car2->speed = 200;
