<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pekkis\Drawing\Drawing;
use Pekkis\Drawing\Ellipse;
use Pekkis\Drawing\Circle;
use Pekkis\Drawing\Rectangle;
use Pekkis\Drawing\Textbox;
use Pekkis\Drawing\Point;
use Pekkis\Drawing\Square;

$drawing = new Drawing();

$drawing->addShape(new Rectangle(30, 40), new Point(10, 10));
$drawing->addShape(new Square(35), new Point(15, 30));
$drawing->addShape(new Ellipse(300, 200), new Point(100, 150));
$drawing->addShape(new Circle(300), new Point(1, 1));

$drawing->addShape(
    new Textbox(new Rectangle(200, 100), 'sample text'),
    new Point(5, 5)
);

echo $drawing->draw();
