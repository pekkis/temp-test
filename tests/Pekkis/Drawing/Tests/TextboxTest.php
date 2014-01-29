<?php

use Pekkis\Drawing\Textbox;
use Pekkis\Drawing\Rectangle;

class TextboxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function instantiates()
    {
        $rectangle = new Rectangle(11, 22);
        $shape = new Textbox($rectangle, 'Tenhunen imaiseepi mehevää');

        $this->assertSame($rectangle, $shape->getRectangle());
        $this->assertSame('Tenhunen imaiseepi mehevää', $shape->getText());
    }

    /**
     * @test
     */
    public function draws()
    {
        $shape = new Textbox(new Rectangle(72, 27), 'Kvaak sanoi ankka');
        $this->assertSame('Textbox;width=72;height=27;text="Kvaak sanoi ankka"', $shape->draw());
    }
}
