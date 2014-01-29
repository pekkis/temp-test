<?php

use Pekkis\Drawing\Square;

class SquareTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $shape = new Square(123);
        $this->assertSame(123, $shape->getWidth());
        $this->assertSame(123, $shape->getHeight());
    }

    /**
     * @test
     */
    public function draws()
    {
        $shape = new Square(551);
        $this->assertSame('Square;size=551', $shape->draw());
    }
}
