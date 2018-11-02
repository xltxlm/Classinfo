<?php
namespace xltxlm\classinfo\Features\__Object_toJson;

/**
 * 支持类本身转换成json;
*/
Trait __Object_toJson_implements
{



    /**
     *   返回类的字符串;
     *   @return :string;
    */
    abstract public function __Object_toJson():string;

}