<?php
namespace Diagro\Chart\Options\Plugins\Tooltip;

use Diagro\Chart\JsonSerializePropertiesTrait;

final class Callbacks implements \JsonSerializable
{

    use JsonSerializePropertiesTrait;


    /**
     * @var string|null javascript callback function
     */
    public ?string $before_title = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $title = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $after_title = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $before_body = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $before_label = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $label = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $label_color = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $label_text_color = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $label_point_style = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $after_label = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $after_body = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $before_footer = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $footer = null;

    /**
     * @var string|null javascript callback function
     */
    public ?string $after_footer = null;


}