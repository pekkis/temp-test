<?php

namespace Pekkis\Drawing;

class Square extends Rectangle
{
    /**
     * @param int $size
     */
    public function __construct($size)
    {
        return parent::__construct($size, $size);
    }

    public function draw()
    {
        return sprintf("Square;size=%s", $this->getWidth());
    }
}
