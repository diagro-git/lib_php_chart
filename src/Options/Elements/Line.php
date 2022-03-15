<?php
namespace Diagro\Chart\Options\Elements;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Fill;
use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

/**
 * Line elements are used to represent the line in a line chart.
 *
 * @package Diagro\Chart\Options\Elements
 */
final class Line implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Cap styles
     */
    const CAP_STYLE_BUTT                    = 'butt';
    const CAP_STYLE_ROUND                   = 'round';
    const CAP_STYLE_SQUARE                  = 'square';

    /**
     * Line join
     */
    const LINE_JOIN_BEVEL                   = 'bevel';
    const LINE_JOIN_ROUND                   = 'round';
    const LINE_JOIN_MITER                   = 'miter';

    /**
     * Cubic mode
     */
    const CUBIC_MODE_DEFAULT                = 'default';
    const CUBIC_MODE_MONOTONE               = 'monotone';


    public ?int $tension = null;

    public ?Color $background_color = null;

    public ?int $border_width = null;

    public ?Color $border_color = null;

    public ?string $border_cap_style = null;

    /**
     * https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/setLineDash
     *
     * @var int[]
     */
    public array $border_dash = [];

    public ?string $border_join_style = null;

    public ?bool $cap_bezier_points = null;

    public ?string $cubic_interpolation_mode = null;

    public ?bool $stepped = null;

    public Fill $fill;


    public function __construct()
    {
        $this->fill = new Fill();
    }


}