<?php

namespace xltxlm\classinfo\test\Features\__Object_toArray;

use xltxlm\classinfo\Features\__Object_toArray;

/**
 *
 */
class 对象转换成数组_172_0
{

    public function __invoke()
    {
        $arr = (new abc())
            ->__Object_toArray();
        p($arr);
        assert(count($arr) == 3);
    }

}
