<?php
namespace Diagro\Chart\Options;

use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Options\Plugins\Decimation;
use Diagro\Chart\Options\Plugins\Legend;
use Diagro\Chart\Options\Plugins\Title;
use Diagro\Chart\Options\Plugins\Tooltip;

class Plugins implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    public Legend $legend;

    public Decimation $decimation;

    public Title $title;

    public Tooltip $tooltip;


    public function __construct()
    {
        $this->legend = new Legend();
        $this->decimation = new Decimation();
        $this->title = new Title();
        $this->tooltip = new Tooltip();
    }


}