<?php

use Pekkis\Drawing\Ellipse;

class EllipseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $shape = new Ellipse(22, 11);
        $this->assertSame(22, $shape->getWidth());
        $this->assertSame(11, $shape->getHeight());
    }

    /**
     * @test
     */
    public function draws()
    {
        $shape = new Ellipse(555, 666);
        $this->assertSame('Ellipse;diameterH=555;diameterV=666', $shape->draw());
    }
}
