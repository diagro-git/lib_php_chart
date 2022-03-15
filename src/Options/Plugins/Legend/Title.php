<?php
namespace Diagro\Chart\Options\Plugins\Legend;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Font;
use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Options\Elements\Point;
use Diagro\Chart\Padding\Number;
use Diagro\Chart\Padding\Padding;

final class Title implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    public ?Color $color = null;

    public ?bool $display = null;

    public ?Font $font = null;

    public ?Padding $padding = null;

    public ?string $text = null;


}