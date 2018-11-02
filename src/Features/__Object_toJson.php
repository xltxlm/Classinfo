<?php

namespace xltxlm\classinfo\Features;


/**
 * 支持类本身转换成json;
 */
Trait __Object_toJson
{
    use __Object_toJson\__Object_toJson_implements;

    public function __Object_toJson(): string
    {
        $get_object_vars = get_object_vars($this);
        array_walk_recursive($get_object_vars, function (&$item, $index) {
            if (is_object($item) && method_exists($item, '__Object_toJson')) {
                $item = json_decode($item->__Object_toJson(), true);
            }
        });
        return json_encode($get_object_vars, JSON_UNESCAPED_UNICODE) ?: '[]';
    }


}