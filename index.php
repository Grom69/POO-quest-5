<?php
require __DIR__ . '/vendor/autoload.php';

use App\Bicycle;
use App\Car;


$bike = new Bicycle('red', 2);
$car = new Car('blue', 4, 'electric');


// Moving bike
echo $bike->forward();

var_dump($bike->switchOn());

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike->switchOn());

// Moving car
echo $car->forward();

var_dump($car->switchOn());

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

var_dump($car->switchOff());
