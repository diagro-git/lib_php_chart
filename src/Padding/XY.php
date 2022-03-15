<?php
namespace Diagro\Chart\Padding;

final class XY extends Padding
{


    public int $x;

    public int $y;


    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


}