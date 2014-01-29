<?php

namespace Pekkis\Drawing;

class Ellipse implements Shape
{
    /**
     * @var int
     */
    private $diameterWidth;

    /**
     * @var int
     */
    private $diameterHeight;

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
        return sprintf("Ellipse;diameterH=%s;diameterV=%s", $this->getWidth(), $this->getHeight());
    }

}
