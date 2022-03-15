<?php
namespace Diagro\Chart;

use Stringable;

trait JsonPropertiesTrait
{


    private function addPublicPropertiesForJson(object $obj, array $skip_properties = []) : array
    {
        $json = [];
        $me = new class() {
            function getPublicVars($obj) : array {
                return get_object_vars($obj);
            }
        };

        $fields = $me->getPublicVars($obj);
        foreach($fields as $name => $value) {
            if($value !== null && ! in_array($name, $skip_properties)) {
                if($value instanceof Stringable) {
                    $value = (string) $value;
                } elseif(is_array($value) && count($value) == 0) {
                    continue;
                }
                $json[$this->camelizeNotFirst($name)] = $value;
            }
        }

        return $json;
    }


    private function camelizeNotFirst(string $str) : string
    {
        $str = strtolower($str);
        $parts = explode('_', $str);
        $new_str = $parts[0];
        $c = count($parts);
        if($c > 1) {
            for($i = 1 ; $i < $c ; $i++) $new_str .= ucfirst($parts[$i]);
        }
        return $str;
    }


}