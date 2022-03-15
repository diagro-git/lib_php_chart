<?php
namespace Diagro\Chart\Options\Elements;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Fill;
use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

/**
 * Bar elements are used to represent the bars in a bar chart.
 *
 * @package Diagro\Chart\Options\Elements
 */
final class Bar implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Border skipped
     */
    const SKIPPED_START                     = 'start';
    const SKIPPED_END                       = 'end';
    const SKIPPED_BOTTOM                    = 'bottom';
    const SKIPPED_LEFT                      = 'left';
    const SKIPPED_TOP                       = 'top';
    const SKIPPED_RIGHT                     = 'right';

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


    public ?Color $background_color = null;

    public ?int $border_width = null;

    public ?Color $border_color = null;

    public ?string $border_skipped = null;

    public ?int $border_radius = null;

    public ?string $point_style = null;


}