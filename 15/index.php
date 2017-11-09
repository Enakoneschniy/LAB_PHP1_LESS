<?php
ini_set('display_errors',1);
include './classes/Transport.php';
include './classes/Car.php';
include './classes/Ship.php';
include './classes/Moto.php';
include './classes/Figure.php';
include './classes/Triangle.php';
include './classes/Square.php';
include './classes/Geometry.php';

use Less15\Classes\Transport;
use Less15\Classes\Car;
use Less15\Classes\Ship;
use Less15\Classes\Moto;
use Less15\Classes\Triangle;
use Less15\Classes\Square;
use Less15\Classes\Geometry;

echo "<pre>";

/*$tr = new Transport('Bla bla', 132, 3);
//var_dump($tr);
echo $tr->getInfo(), "<br>";*/


$car = new Car('BMW', 300, 2, 'hatchback');
//var_dump($car);
echo $car->getInfo(), "<br>";

$triangle = new Triangle();
$square = new Square();

echo $triangle->area(), "<br>";
echo $square->area(), "<br>";

$geometry = new Geometry(new Triangle());

echo $geometry->area(), "<br>";

$geometry1 = new Geometry(new Square());

echo $geometry1->area(), "<br>";