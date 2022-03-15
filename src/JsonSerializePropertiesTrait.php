<?php
namespace Diagro\Chart;

/**
 * Implements the jsonSerialize method of the JsonSerialize interface.
 * All public properties with non-null values are returned as key => value array.
 * The key is camelized.
 *
 * @package Diagro\Chart
 */
trait JsonSerializePropertiesTrait
{

    use JsonPropertiesTrait;


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        $json = $this->addPublicPropertiesForJson($this);
        if(count($json) > 0) {
            return $json;
        }

        return null;
    }


}