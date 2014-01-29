<?php

namespace Pekkis\Drawing;

class Drawing implements Shape
{
    private $shapes = [];

    private function getHash(Shape $shape)
    {
        return spl_object_hash($shape);
    }

    public function addShape(Shape $shape, Point $point)
    {
        $this->shapes[$this->getHash($shape)] = [$point, $shape];
    }

    public function removeShape(Shape $shape)
    {
        unset($this->shapes[$this->getHash($shape)]);
    }

    /**
     * @return array
     */
    public function getShapes()
    {
        return $this->shapes;
    }

    /**
     * @return string
     */
    public function draw()
    {
        $lines = [];

        $lines[] = '------------------------------';
        $lines[] = 'Current drawing';
        $lines[] = '------------------------------';

        foreach ($this->getShapes() as $raw)
        {
            list ($point, $shape) = $raw;

            /** @var Shape $shape */
            /** @var Point $point */

            $lines[] = sprintf("(%s,%s) %s", $point->getX(), $point->getY(), $shape->draw());
        }
        return implode("\n", $lines) . "\n";
    }

}
