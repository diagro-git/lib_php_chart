<?php
namespace Diagro\Chart\Padding;

final class Number extends Padding implements \JsonSerializable
{


    public int $padding;


    public function __construct(int $padding)
    {
        $this->padding = $padding;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return $this->padding;
    }


}