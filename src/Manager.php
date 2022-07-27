<?php
namespace Diagro\Chart;

use ArrayAccess;

class Manager implements ArrayAccess
{


    /**
     * @var Chart[]
     */
    private array $charts = [];


    public function render(string $id, int $width = 400, string $width_unit = 'px', int $height = 400, string $height_unit = 'px') : string
    {
        if($this->offsetExists($id)) {
            $json = json_encode($this[$id]);
            //https://stackoverflow.com/a/15953991/356691
            $json = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $json);
            $chart_data = base64_encode($json);
            return '<div style="width:' . $width . $width_unit . ';height:' . $height . $height_unit . ';"><canvas id="chart_' . $id . '" data-chart="' . $chart_data . '"></canvas></div>';
        }

        return '';
    }


    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        return isset($this->charts[$offset]);
    }


    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        if($this->offsetExists($offset)) {
            return $this->charts[$offset];
        }

        return null;
    }


    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
       if($value != null && is_object($value) && $value instanceof Chart) {
           $this->charts[$value->id] = $value;
       }
    }


    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        if($this->offsetExists($offset)) {
            unset($this->charts[$offset]);
        }
    }


}