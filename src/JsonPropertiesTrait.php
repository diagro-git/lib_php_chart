<?php
namespace Diagro\Chart;

use Illuminate\Support\Str;
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
                $json[Str::camel($name)] = $value;
            }
        }

        return $json;
    }


}