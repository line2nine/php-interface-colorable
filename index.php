<?php
include_once 'class/Circle.php';
include_once 'class/Cylinder.php';
include_once 'class/Rectangle.php';
include_once 'class/Square.php';

$shapes[0] = new Circle('Circle 1', 3);
$shapes[1] = new Cylinder('Cylinder 1', 3, 4);
$shapes[2] = new Rectangle('Rectangle 1', 3, 4);
$shapes[3] = new Square('Square 1', 5);

foreach ($shapes as $shape) {
    echo $shape->name . "<br>" . "Area: " . $shape->getArea() . "<br><br>";
    if ($shape instanceof Square) {
        echo $shape->howToColor();
    }
}