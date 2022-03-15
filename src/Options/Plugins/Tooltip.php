<?php
namespace Diagro\Chart\Options\Plugins;

use Diagro\Chart\Color\Color;
use Diagro\Chart\Color\Hex;
use Diagro\Chart\Color\RGBA;
use Diagro\Chart\Font;
use Diagro\Chart\JsonSerializePropertiesTrait;
use Diagro\Chart\Options\Plugins\Tooltip\Callbacks;
use Diagro\Chart\Padding\Number;
use Diagro\Chart\Padding\Padding;

final class Tooltip implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * X alignments
     */
    const X_ALIGN_LEFT              = 'left';
    const X_ALIGN_CENTER            = 'center';
    const X_ALIGN_RIGHT             = 'right';

    /**
     * Y alignments
     */
    const Y_ALIGN_TOP               = 'top';
    const Y_ALIGN_CENTER            = 'center';
    const Y_ALIGN_BOTTOM            = 'bottom';

    /**
     * Allignment
     */
    const ALIGN_LEFT                = 'left';
    const ALIGN_CENTER              = 'center';
    const ALIGN_RIGHT               = 'right';

    /**
     * Position
     */
    const POSITION_AVERAGE          = 'average';
    const POSITION_NEAREST          = 'nearest';

    /**
     * Text direction
     */
    const TEXT_DIRECTION_LTR        = 'ltr';
    const TEXT_DIRECTION_RTL        = 'rtl';


    public ?bool $enabled = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $external = null;

    public ?bool $intersect = null;

    public ?string $position = null;

    public Callbacks $callbacks;

    /**
     * @var string|null javascript callback function
     */
    public ?string $item_sort = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $filter = null;

    public ?Color $background_color = null;

    public ?Color $title_color = null;

    public ?Font $title_font = null;

    public ?string $title_allign = null;

    public ?int $title_spacing = null;

    public ?int $title_margin_bottom = null;

    public ?Color $body_color = null;

    public ?Font $body_font = null;

    public ?string $body_align = null;

    public ?int $body_spacing = null;

    public ?Color $footer_color = null;

    public ?Font $footer_font = null;

    public ?string $footer_align = null;

    public ?int $footer_spacing = null;

    public ?int $footer_margin_top = null;

    public ?Padding $padding = null;

    public ?int $caret_padding = null;

    public ?int $caret_size = null;

    public ?int $corner_radius = null;

    public ?Color $multi_key_background = null;

    public ?bool $display_colors = null;

    public ?int $box_width = null;

    public ?int $box_height = null;

    public ?bool $use_point_style = null;

    public ?Color $border_color = null;

    public ?int $border_width = null;

    public ?bool $rtl = null;

    public ?string $text_direction = null;

    public ?string $x_align = null;

    public ?string $y_align = null;


    public function __construct()
    {
        $this->callbacks = new Callbacks();
    }


}