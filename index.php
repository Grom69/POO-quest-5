<?php
require __DIR__ . '/vendor/autoload.php';

use App\Bicycle;
use App\Car;


$bike = new Bicycle('red', 2);
$car = new Car('blue', 4, 'electric');


// Moving bike
echo $bike->forward() . '<br>';

echo 'Light : ';
echo var_export($bike->switchOn());

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

echo 'Light : ';
echo var_export($bike->switchOn()) . '<br>';
echo '<br>';
echo '<br>';


// Moving car
echo $car->forward() . '<br>';

echo 'Light : ';
echo var_export($car->switchOn());

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake() . '<br>';

echo 'Light : ';
echo var_export($car->switchOff()) . '<br>';
