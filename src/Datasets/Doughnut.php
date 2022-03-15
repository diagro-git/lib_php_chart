<?php
namespace Diagro\Chart\Datasets;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Color\Hex;
use Diagro\Chart\Color\RGBA;
use Diagro\Chart\Dataset;
use Diagro\Chart\Options\Elements\Point;

class Doughnut extends Dataset
{


    /**
     * Border alginment
     */
    const BORDER_ALIGN_CENTER               = 'center';
    const BORDER_ALIGN_INNER                = 'inner';


    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $background_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var string|null|string[]
     */
    public $border_align = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $border_color = null;

    /**
     * Array is key => int.
     * Possible keys are outerStart, outerEnd, innerStart and/or innerRight.
     *
     * @Indexable
     * @Scriptable
     * @var int|int[]|string|null
     */
    public $border_radius = null;

    /**
     * @Indexable
     * @Scriptable
     * @var int|int[]|string|null
     */
    public $border_width = null;

    public ?float $circumference = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $hover_background_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $hover_border_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var int|null|int[]|string
     */
    public $hover_border_width = null;

    /**
     * @Indexable
     * @Scriptable
     * @var int|null|int[]|string
     */
    public $hover_offset = null;

    /**
     * @Indexable
     * @Scriptable
     * @var int|null|int[]|string
     */
    public $offset = null;

    public ?float $rotation = null;

    public ?float $weight = null;


}