<?php
namespace Diagro\Chart\Options;

use Diagro\Chart\JsonSerializePropertiesTrait;
use JsonSerializable;

class Animation implements JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * Animation easing
     */
    const LINEAR                = 'linear';
    const EASE_IN_QUAD          = 'easeInQuad';
    const EASE_OUT_QUAD         = 'easeOutQuad';
    const EASE_IN_OUT_QUAD      = 'easeInOutQuad';
    const EASE_IN_CUBIC         = 'easeInCubic';
    const EASE_OUT_CUBIC        = 'easeOutCubic';
    const EASE_IN_OUT_CUBIC     = 'easeInOutCubic';
    const EASE_IN_QUART         = 'easeInQuart';
    const EASE_OUT_QUART        = 'easeOutQuart';
    const EASE_IN_OUT_QUART     = 'easeInOutQuart';
    const EASE_IN_QUINT         = 'easeInQuint';
    const EASE_OUT_QUINT        = 'easeOutQuint';
    const EASE_IN_OUT_QUINT     = 'easeInOutQuint';
    const EASE_IN_SINE          = 'easeInSine';
    const EASE_OUT_SINE         = 'easeOutSine';
    const EASE_IN_OUT_SINE      = 'easeInOutSine';
    const EASE_IN_EXPO          = 'easeInExpo';
    const EASE_OUT_EXPO         = 'easeOutExpo';
    const EASE_IN_OUT_EXPO      = 'easeInOutExpo';
    const EASE_IN_CIRC          = 'easeInCirc';
    const EASE_OUT_CIRC         = 'easeOutCirc';
    const EASE_IN_OUT_CIRC      = 'easeInOutCirc';
    const EASE_IN_ELASTIC       = 'easeInElastic';
    const EASE_OUT_ELIASTIC     = 'easeOutElastic';
    const EASE_IN_OUT_ELASTIC   = 'easeInOutElastic';
    const EASE_IN_BACK          = 'easeInBack';
    const EASE_OUT_BACK         = 'easeOutBack';
    const EASE_IN_OUT_BACK      = 'easeInOutBack';
    const EASE_IN_BOUNCE        = 'easeInBounce';
    const EASE_OUT_BOUNCE       = 'easeOutBounce';
    const EASE_IN_OUT_BOUNCE    = 'easeInOutBounce';


    public ?int $duration = null;

    public ?string $easing = null;

    public ?int $delay = null;

    public ?bool $loop = null;

}