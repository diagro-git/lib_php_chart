<?php
namespace Diagro\Chart;

final class Font implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    public ?string $family = null;

    public ?int $number = null;

    public ?string $style = null;

    public ?string $weight = null;

    /**
     * @var float|string|null
     */
    public $line_height = null;


}