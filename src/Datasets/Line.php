<?php
namespace Diagro\Chart\Datasets;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Color\RGBA;
use Diagro\Chart\Dataset;
use Diagro\Chart\Options\Elements\Point;

class Line extends Dataset
{


    /**
     * Border cap styles
     */
    const BORDER_CAP_BUTT                   = 'butt';
    const BORDER_CAP_ROUND                  = 'round';
    const BORDER_CAP_SQUARE                 = 'square';

    /**
     * Border join styles
     */
    const BORDER_JOIN_BEVEL                 = 'bevel';
    const BORDER_JOIN_MITER                 = 'miter';
    const BORDER_JOIN_ROUND                 = 'round';

    /**
     * Cubic interpolation mode
     */
    const CUBIC_INTER_MODE_DEFAULT          = 'default';
    const CUBIC_INTER_MODE_MONOTONE         = 'monotone';

    /**
     * Stepped
     */
    const STEPPED_FALSE                     = false;
    const STEPPED_TRUE                      = true;
    const STEPPED_BEFORE                    = 'before';
    const STEPPED_AFTER                     = 'after';
    const STEPPED_MIDDLE                    = 'middle';


    /**
     * @Scriptable
     * @var null|Color|string
     */
    public $background_color = null;

    /**
     * @Scriptable
     * @var string|null
     */
    public ?string $border_cap_style = null;

    /**
     * @Scriptable
     * @var null|Color|string
     */
    public $borderColor = null;

    /**
     * @Scriptable
     * @var int[]|string|null
     */
    public $border_dash = null;

    /**
     * @Scriptable
     * @var null|float|string
     */
    public $border_dash_offset = null;

    /**
     * @Scriptable
     * @var string|null
     */
    public ?string $border_join_style = null;

    /**
     * @Scriptable
     * @var null|int|string
     */
    public $border_width = null;

    /**
     * @Scriptable
     * @var string|null
     */
    public ?string $cubic_interpolation_mode = null;

    /**
     * @Scriptable
     * @var bool|string|null
     */
    public $fill = null;

    /**
     * @Scriptable
     * @var null|Color|string
     */
    public $hover_background_color = null;

    /**
     * @Scriptable
     * @var string|null
     */
    public ?string $hover_border_cap_style = null;

    /**
     * @Scriptable
     * @var null|Color|string
     */
    public ?Color $hover_border_color = null;

    /**
     * @Scriptable
     * @var null|string|int[]
     */
    public $hover_border_dash = null;

    /**
     * @Scriptable
     * @var null|int|string
     */
    public $hover_border_dash_offset = null;

    /**
     * @Scriptable
     * @var string|null
     */
    public ?string $hover_border_join_style = null;

    /**
     * @Scriptable
     * @var null|int|string
     */
    public $hover_border_width = null;

    public ?string $index_axis = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $point_background_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $point_border_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $point_border_width = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $point_hit_radius = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $point_hover_background_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $point_hover_border_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $point_hover_border_width = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $point_hover_radius = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $point_radius = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $point_rotation = null;

    /**
     * @Indexable
     * @Scriptable
     * @see Point
     * @var string|string[]|null
     */
    public ?string $point_style = null;

    /**
     * https://www.chartjs.org/docs/latest/charts/line.html#segment
     * @var array
     */
    public array $segment = [];

    public ?bool $show_line = null;

    /**
     * @var null|bool|int
     */
    public $span_gaps = null;

    /**
     * See STEPPED_ constants
     * @var bool|string|null
     */
    public $stepped = null;

    public ?int $tension = null;

}