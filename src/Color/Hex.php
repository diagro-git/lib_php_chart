<?php
namespace Diagro\Chart\Color;

class Hex extends Color
{


    public string $hex;


    public function __construct(string $hex)
    {
        $this->hex = $hex;
    }


    public function __toString() : string
    {
        $str = $this->hex;
        if(! str_contains($str, '#')) {
            $str = '#' . $str;
        }

        return $str;
    }


}