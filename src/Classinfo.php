<?php

namespace xltxlm\classinfo;

use xltxlm\str\Str;

/**
 * 获取类的基本信息;
 */
class Classinfo extends Classinfo\Classinfo_implements
{


    /**
     * Classinfo constructor.
     */
    public function __construct(string $Full_Class_Name = '')
    {
        if ($Full_Class_Name) {
            $this->setFull_Class_Name($Full_Class_Name);
        }
    }

    public function getName_no_Namespace(): string
    {
        return (new Str())
            ->setValue($this->getFull_Class_Name())
            ->Split('\\')
            ->getLast();
    }


    public function getNamespace(): string
    {
        $classArray = (new Str())
            ->setValue($this->getFull_Class_Name())
            ->Split('\\');
        $array = $classArray->getValues();
        array_pop($array);
        return join('\\', $array);
    }


}