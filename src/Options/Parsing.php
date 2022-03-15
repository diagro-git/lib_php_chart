<?php
namespace Diagro\Chart\Options;

use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

final class Parsing implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    public ?string $xAxisKey = null;

    public ?string $yAxisKey = null;


}