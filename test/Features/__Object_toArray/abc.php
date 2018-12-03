<?php
/**
 * Created by PhpStorm.
 * User: xialintai
 * Date: 2018/12/3
 * Time: 下午1:17
 */

namespace xltxlm\classinfo\test\Features\__Object_toArray;

use xltxlm\classinfo\Features\__Object_toArray;

class abc
{
    use __Object_toArray;
    private $a1 = __LINE__;
    protected $a2 = __LINE__;
    public $a3 = __LINE__;
}