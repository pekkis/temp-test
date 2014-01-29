<?php

namespace Pekkis\Drawing;

class Textbox implements Shape
{
    /**
     * @var Rectangle
     */
    private $rectangle;

    /**
     * @var string
     */
    private $text;

    /**
     * @param Rectangle $rectangle
     * @param $text
     */
    public function __construct(Rectangle $rectangle, $text)
    {
        $this->rectangle = $rectangle;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return Rectangle
     */
    public function getRectangle()
    {
        return $this->rectangle;
    }

    public function draw()
    {
        return sprintf(
            "Textbox;width=%s;height=%s;text=\"%s\"",
            $this->getRectangle()->getWidth(),
            $this->getRectangle()->getHeight(),
            $this->getText()
        );
    }
}
