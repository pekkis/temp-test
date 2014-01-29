<?php

use Pekkis\Drawing\Circle;

class CircleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $shape = new Circle(55);
        $this->assertSame(55, $shape->getRadius());
    }

    /**
     * @test
     */
    public function draws()
    {
        $shape = new Circle(36);
        $this->assertSame('Circle;radius=36', $shape->draw());
    }
}
