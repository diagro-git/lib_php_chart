<?php
namespace Diagro\Chart\Color;

use Stringable;
use JsonSerializable;

abstract class Color implements Stringable, JsonSerializable
{


    public static function blue() : Color
    {
        return new Hex("#1565C0");
    }


    public static function red() : Color
    {
        return new Hex("#f44");
    }


    public static function green() : Color
    {
        return new Hex("#00c851");
    }


    public static function orange() : Color
    {
        return new Hex("#fb3");
    }


    public static function purple() : Color
    {
        return new Hex("#abc");
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return $this->__toString();
    }


}