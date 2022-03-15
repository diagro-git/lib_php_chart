<?php
namespace Diagro\Chart\Options;

use Diagro\Chart\JsonSerializePropertiesTrait;

class Interaction implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Mode
     */
    const MODE_POINT        = 'point';
    const MODE_NEAREST      = 'nearest';
    const MODE_INDEX        = 'index';
    const MODE_DATASET      = 'dataset';
    const MODE_X            = 'x';
    const MODE_Y            = 'y';

    /**
     * Axis
     */
    const AXIS_X            = 'x';
    const AXIS_Y            = 'y';
    const AXIS_XY           = 'xy';


    public ?string $mode = null;

    public ?string $axis = null;

    public ?bool $intersect = null;


}