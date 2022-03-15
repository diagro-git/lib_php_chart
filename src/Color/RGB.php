<?php
namespace Diagro\Chart\Color;

final class RGB extends Color
{


    public int $red;

    public int $green;

    public int $blue;


    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }


    public function __toString() : string
    {
        return sprintf('rgb(%d,%d,%d)', $this->red, $this->green, $this->blue);
    }


}