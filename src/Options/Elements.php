<?php
namespace Diagro\Chart\Options;

use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Options\Elements\Arc;
use Diagro\Chart\Options\Elements\Bar;
use Diagro\Chart\Options\Elements\Line;
use Diagro\Chart\Options\Elements\Point;
use JsonSerializable;

final class Elements implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    public Point $point;

    public Bar $bar;

    public Line $line;

    public Arc $arc;


    public function __construct()
    {
        $this->point = new Point();
        $this->bar = new Bar();
        $this->line = new Line();
        $this->arc = new Arc();
    }


}