<?php
namespace Diagro\Chart\Options\Elements;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Fill;
use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

/**
 * Arcs are used in the polar area, doughnut and pie charts.
 * 
 * @package Diagro\Chart\Options\Elements
 */
final class Arc implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Border align
     */
    const ALIGN_CENTER                      = 'center';


    public ?Color $background_color = null;

    public ?int $border_width = null;

    public ?Color $border_color = null;

    public ?string $border_align = null;

    public ?int $angle = null;


}