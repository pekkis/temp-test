<?php

namespace Pekkis\Drawing;

class Rectangle implements Shape
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @param int $width
     * @param int $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function draw()
    {
        return sprintf("Rectangle;width=%s;height=%s", $this->getWidth(), $this->getHeight());
    }

}
