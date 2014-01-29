<?php

use Pekkis\Drawing\Rectangle;

class RectangleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $shape = new Rectangle(123, 321);
        $this->assertSame(123, $shape->getWidth());
        $this->assertSame(321, $shape->getHeight());
    }

    /**
     * @test
     */
    public function draws()
    {
        $shape = new Rectangle(551, 552);
        $this->assertSame('Rectangle;width=551;height=552', $shape->draw());
    }
}
