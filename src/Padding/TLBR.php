<?php
namespace Diagro\Chart\Padding;

final class TLBR extends Padding
{


    public int $top;

    public int $left;

    public int $bottom;

    public int $right;


    public function __construct(int $top, int $left, int $bottom, int $right)
    {
        $this->top = $top;
        $this->left = $left;
        $this->bottom = $bottom;
        $this->right = $right;
    }


}