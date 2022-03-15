<?php
namespace Diagro\Chart\Options\Plugins\Legend;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Font;
use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Options\Elements\Point;

final class Labels implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Allignment
     */
    const ALIGN_LEFT            = 'left';
    const ALIGN_RIGHT           = 'right';
    const ALIGN_CENTER          = 'center';


    public ?int $box_width = null;

    public ?int $box_height = null;

    public ?Color $color = null;

    public ?Font $font = null;

    public ?int $padding = null;

    /**
     * @var string|null callback javascript function
     */
    public ?string $generate_labels = null;

    /**
     * @var string|null callback javascript function
     */
    public ?string $filter = null;

    /**
     * @var string|null callback javascript function
     */
    public ?string $sort = null;

    /**
     * @see Point
     * @var string
     */
    public ?string $point_style = null;

    public ?string $text_align = null;

    public ?bool $use_point_style = null;


}