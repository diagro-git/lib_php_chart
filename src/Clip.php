<?php
namespace Diagro\Chart;

use JsonSerializable;

/**
 * How to clip relative to chartArea.
 * Positive value allows overflow, negative value clips that many pixels inside chartArea.
 * 0 = clip at chartArea.
 * Clipping can also be configured per side: clip: {left: 5, top: false, right: -2, bottom: 0}
 *
 * @package Diagro\Chart
 */
class Clip implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    public int $left;

    public int $top;

    public int $right;

    public int $bottom;


    public function __construct(int $left, int $top, int $right, int $bottom)
    {
        $this->left = $left;
        $this->top = $top;
        $this->right = $right;
        $this->bottom = $bottom;
    }


}