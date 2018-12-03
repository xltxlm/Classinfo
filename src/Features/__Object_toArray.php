<?php

namespace xltxlm\classinfo\Features;


/**
 * 支持类本身转换成数组;
 */
Trait __Object_toArray
{
    use __Object_toArray\__Object_toArray_implements;

    public function __Object_toArray(): array
    {
        return get_object_vars($this) ?? [];
    }


}