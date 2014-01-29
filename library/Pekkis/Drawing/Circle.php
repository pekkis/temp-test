<?php

namespace Pekkis\Drawing;

class Circle implements Shape
{
    /**
     * @var int
     */
    private $radius;

    /**
     * @param int $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function draw()
    {
        return sprintf("Circle;radius=%s", $this->getRadius());
    }
}
