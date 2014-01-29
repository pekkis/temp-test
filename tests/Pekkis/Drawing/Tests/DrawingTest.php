<?php

use Pekkis\Drawing\Drawing;
use Pekkis\Drawing\Shape;
use Pekkis\Drawing\Point;

class DrawingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $drawing = new Drawing();

        $this->assertInternalType('array', $drawing->getShapes());
        $this->assertCount(0, $drawing->getShapes());
    }

    /**
     * @test
     */
    public function addsShape()
    {
        $drawing = new Drawing();

        $shape = $this->getMock('Pekkis\Drawing\Shape');
        $point = new Point(0, 0);

        $drawing->addShape($shape, $point);

        $shapes = $drawing->getShapes();

        $this->assertCount(1, $shapes);

        $added = array_pop($shapes);

        $this->assertArrayHasKey(0, $added);
        $this->assertArrayHasKey(1, $added);

        $this->assertSame($point, $added[0]);
        $this->assertSame($shape, $added[1]);
    }

    /**
     * @test
     */
    public function removesShape()
    {
        $drawing = new Drawing();

        $shape = $this->getMock('Pekkis\Drawing\Shape');
        $point = new Point(0, 0);

        $drawing->addShape($shape, $point);

        $this->assertCount(1, $drawing->getShapes());

        $drawing->removeShape($shape);

        $this->assertCount(0, $drawing->getShapes());
    }

    /**
     * @test
     */
    public function drawsEmpty()
    {
        $drawing = new Drawing();
        $expected =  "------------------------------\nCurrent drawing\n------------------------------\n";
        $this->assertSame($expected, $drawing->draw());
    }

    /**
     * @test
     */
    public function drawsAllShapes()
    {
        $drawing = new Drawing();

        $shape = $this->getMock('Pekkis\Drawing\Shape');
        $shape->expects($this->atLeastOnce())->method('draw')->will($this->returnValue('Imaiseppa bansku'));

        $shape2 = $this->getMock('Pekkis\Drawing\Shape');
        $shape2->expects($this->atLeastOnce())->method('draw')->will($this->returnValue('Lussutappa ankka'));

        $drawing->addShape($shape, new Point(0, 0));
        $drawing->addShape($shape2, new Point(2, 3));

        $expected =  "------------------------------\nCurrent drawing\n------------------------------\n";
        $expected .= "(0,0) Imaiseppa bansku\n(2,3) Lussutappa ankka\n";
        $this->assertSame($expected, $drawing->draw());
    }
}

