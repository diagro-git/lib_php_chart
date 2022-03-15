<?php
namespace Diagro\Chart\Options\Elements;

use Diagro\Chart\Color\Color;
use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

/**
 * Point elements are used to represent the points in a line, radar or bubble chart.
 *
 * @package Diagro\Chart\Options\Elements
 */
final class Point implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Point styles
     */
    const STYLE_CIRCLE          = 'circle';
    const STYLE_CROSS           = 'cross';
    const STYLE_CROSS_ROT       = 'crossRot';
    const STYLE_DASH            = 'dash';
    const STYLE_LINE            = 'line';
    const STYLE_RECT            = 'rect';
    const STYLE_RECT_ROUNDED    = 'rectRounded';
    const STYLE_STAR            = 'star';
    const STYLE_TRIANGLE        = 'triangle';


    public ?int $radius = null;

    public ?string $point_style = null;

    public ?int $rotation = null;

    public ?Color $background_color = null;

    public ?int $border_width = null;

    public ?Color $border_color = null;

    public ?int $hit_radius = null;

    public ?int $hover_radius = null;

    public ?int $hover_border_width = null;


}