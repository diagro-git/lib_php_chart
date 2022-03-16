<?php
namespace Diagro\Chart;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;

class Dataset implements ArrayAccess, JsonSerializable
{

    use JsonPropertiesTrait;


    /**
     * Chart types
     */
    const TYPE_LINE     = 'line';
    const TYPE_BAR      = 'bar';


    public string $label;

    public ?string $type = null;

    /**
     * @var int|Clip|null
     */
    public $clip = null;

    public ?int $order = null;

    public ?string $stack = null;

    public ?bool $hidden = null;

    public array $data = [];

    public ?string $x_axis_id = null;

    public ?string $y_axis_id = null;

    public Options $options;


    public function __construct(string $label, ?string $type = null)
    {
        $this->label = $label;
        $this->type = $type;

        //set global options to null objects.
        $this->options = new Options();
        $this->options->elements = null;
        $this->options->plugins = null;
        $this->options->padding = null;
        $this->options->interaction = null;
    }


    public function setClip($clip) : self
    {
        if(is_int($clip) || $clip instanceof Clip) {
            $this->clip = $clip;
        }
        return $this;
    }


    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }


    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        return (isset($this->data[$offset]));
    }


    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        if($this->offsetExists($offset)) {
            return (string) $this->data[$offset];
        }

        throw new InvalidArgumentException("Offset $offset is not found in the data!");
    }


    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }


    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        if($this->offsetExists($offset)) {
            unset($this->data[$offset]);
        }
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        $json = $this->addPublicPropertiesForJson($this, ['options']);
        $options = $this->addPublicPropertiesForJson($this->options);
        if(count($options) > 0) {
            $json = array_merge($json, $options);
        }

        return $json;
    }


}