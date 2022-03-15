<?php
namespace Diagro\Chart\Datasets;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Dataset;
use Diagro\Chart\Options\Elements\Point;

class Bar extends Dataset
{


    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $background_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|string
     */
    public $base = null;

    public ?float $bar_percentage = null;

    /**
     * @var null|string|float
     */
    public $bar_thickness = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|Color[]|Color|string
     */
    public $border_color = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|string[]|string
     */
    public $border_skipped = null;

    /**
     * Array is key/value. Keys are: top, left, right, bottom.
     *
     * @Indexable
     * @Scriptable
     * @var int|int[]|string|null
     */
    public $border_width = null;

    /**
     * Array is key/value. Keys are: topLeft, topRight, bottomLeft, bottomRight.
     *
     * @Indexable
     * @Scriptable
     * @var int|int[]|string|null
     */
    public $border_radius = null;

    public ?float $category_percentage = null;

    public ?bool $grouped = null;

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
     * @var null|int[]|int|string
     */
    public $hover_border_width = null;

    /**
     * @Indexable
     * @Scriptable
     * @var null|int[]|int|string
     */
    public $hover_border_radius = null;

    public ?string $index_axis = null;

    public ?int $max_bar_thickness = null;

    public ?int $min_bar_length = null;

    /**
     * @Scriptable
     * @see Point
     * @var string|null
     */
    public ?string $point_style = null;

    public ?bool $skip_null = null;


}