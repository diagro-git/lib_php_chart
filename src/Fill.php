<?php
namespace Diagro\Chart;

use Diagro\Chart\Color\Color;
use JsonSerializable;

/**
 * https://www.chartjs.org/docs/latest/charts/area.html#filling-modes
 *
 * @package Diagro\Chart
 */
final class Fill implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Target boundary choices
     */
    const TARGET_ORIGIN     = 'origin';
    const TARGET_START      = 'start';
    const TARGET_END        = 'end';


    /**
     * @var bool|string|int|null
     *
     */
    public $target = null;

    public ?Color $above = null;

    public ?Color $below = null;


}