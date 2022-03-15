<?php
namespace Diagro\Chart\Color;

final class RGBA extends Color
{


    public int $red;

    public int $green;

    public int $blue;

    public float $alpha = 0.1;


    public function __construct(int $red, int $green, int $blue, float $alpha = 0.1)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
        $this->alpha = $alpha;
    }


    public function __toString() : string
    {
        return sprintf('rgba(%d,%d,%d,%f)', $this->red, $this->green, $this->blue, $this->alpha);
    }


}