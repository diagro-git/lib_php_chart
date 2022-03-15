<?php
namespace Diagro\Chart\Options\Plugins;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Font;
use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Padding\Number;
use Diagro\Chart\Padding\Padding;

final class Decimation implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Algorithm
     */
    const ALGO_LTTB                 = 'lttb';
    const ALGO_MIN_MAX              = 'min-max';


    public ?bool $enabled = null;

    public ?string $algorithm = null;

    public ?int $samples = null;


}