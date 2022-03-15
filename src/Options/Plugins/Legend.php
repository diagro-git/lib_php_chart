<?php
namespace Diagro\Chart\Options\Plugins;

use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Options\Plugins\Legend\Labels;
use Diagro\Chart\Options\Plugins\Legend\Title;

final class Legend implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Positions
     */
    const POSITION_TOP              = 'top';
    const POSITION_LEFT             = 'left';
    const POSITION_BOTTOM           = 'bottom';
    const POSITION_RIGHT            = 'right';
    const POSITION_CHART_AREA       = 'chartArea';

    /**
     * Allignment
     */
    const ALIGN_START               = 'start';
    const ALIGN_CENTER              = 'center';
    const ALIGN_END                 = 'end';

    /**
     * Text direction
     */
    const TEXT_DIRECTION_LTR        = 'ltr';
    const TEXT_DIRECTION_RTL        = 'rtl';


    public ?bool $display = null;

    public ?string $position = null;

    public ?string $align = null;

    public ?int $max_height = null;

    public ?int $max_width = null;

    public ?bool $full_size = null;

    public ?string $on_click = null;

    public ?string $on_hover = null;

    public ?string $on_leave = null;

    public ?bool $reverse = null;

    public ?bool $rtl = null;

    public ?string $text_direction = null;

    public Labels $labels;

    public Title $title;


    public function __construct()
    {
        $this->labels = new Labels();
        $this->title = new Title();
    }


}