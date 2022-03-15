<?php
namespace Diagro\Chart;

use Diagro\Chart\Options\Animation;
use Diagro\Chart\Options\Animations;
use Diagro\Chart\Options\Elements;
use Diagro\Chart\Options\Interaction;
use Diagro\Chart\Options\Parsing;
use Diagro\Chart\Options\Plugins;
use Diagro\Chart\Options\Transitions;
use Diagro\Chart\Padding\Padding;
use JsonSerializable;

final class Options implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Events
     */
    const EVENT_MOUSEMOVE               = 'mousemove';
    const EVENT_MOUSEOUT                = 'mouseout';
    const EVENT_CLICK                   = 'click';
    const EVENT_TOUCHSTART              = 'touchstart';
    const EVENT_TOUCHMOVE               = 'touchemove';


    public ?bool $responsive = null;

    public ?bool $maintain_aspect_ratio = null;

    public ?int $aspect_ratio = null;

    /**
     * Javascript callback functions
     *
     * @var null|string
     */
    public ?string $on_resize = null;

    public ?string $on_hover = null;

    public ?string $on_click = null;

    public ?int $resize_delay = null;

    public ?int $device_pixel_ratio = null;

    /**
     * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/NumberFormat/NumberFormat
     *
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * See EVENT_* constants.
     *
     * @var string[]
     */
    public array $events;

    public ?Parsing $parsing;

    public ?Elements $elements;

    public ?Interaction $interaction;

    /**
     * @var Animation|false|null
     */
    public $animation = null;

    /**
     * @var Animations[] HashMap<animation:string, Animations|false>
     */
    public array $animations;

    /**
     * Modes: active, hide, reset, resize, show
     *
     * @var Transitions[] HashMap<mode:string, Transitions>
     */
    public array $transitions;

    public ?Padding $padding;

    public ?Plugins $plugins;


    public function __construct()
    {
        $this->events = [];
        $this->animations = [];
        $this->transitions = [];

        $this->parsing = new Parsing();
        $this->elements = new Elements();
        $this->interaction = new Interaction();
        $this->animation = new Animation();
        $this->plugins = new Plugins();
    }


}