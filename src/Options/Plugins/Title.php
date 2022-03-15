<?php
namespace Diagro\Chart\Options\Plugins;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Font;
use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Padding\Padding;

final class Title implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Positions
     */
    const POSITION_TOP              = 'top';
    const POSITION_LEFT             = 'left';
    const POSITION_BOTTOM           = 'bottom';
    const POSITION_RIGHT            = 'right';

    /**
     * Allignment
     */
    const ALIGN_START               = 'start';
    const ALIGN_CENTER              = 'center';
    const ALIGN_END                 = 'end';


    public ?string $align = null;

    public ?Color $color = null;

    public ?bool $display = null;

    public ?bool $full_size = null;

    public ?string $position = null;

    public ?Font $font = null;

    public ?Padding $padding = null;

    /**
     * @var string|string[]|null
     */
    public $text = null;


}