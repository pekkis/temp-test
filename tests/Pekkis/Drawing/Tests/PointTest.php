<?php

use Pekkis\Drawing\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $point = new Point(10, 5);
        $this->assertSame(10, $point->getX());
        $this->assertSame(5, $point->getY());
    }


}
