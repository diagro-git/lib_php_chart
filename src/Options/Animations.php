<?php
namespace Diagro\Chart\Options;

use Diagro\Chart\Color\Color;
use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

final class Animations extends Animation implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * @var string[]
     */
    public array $properties = [];

    public ?string $type = null;

    /**
     * @var int|Color|boolean|null
     */
    public $from = null;

    /**
     * @var int|Color|boolean|null
     */
    public $to = null;

    public ?string $fn = null;


}