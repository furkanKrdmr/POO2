<?php

require_once 'Car.php';
require_once 'Truck.php';


$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->brake();


$truck = new Truck('blue',3, 'gazoil', 1000);
echo $truck->forward();
echo $truck->brake();
echo $truck->getStorage();
/* 
echo $car->forward();
echo $br;
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $br;
echo $car->brake();
echo $br;
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $br;
echo $car->brake();
echo $br; */
