<?php
namespace xltxlm\classinfo\test\Classinfo;

use xltxlm\classinfo\Classinfo;

/**
*
*/
class Namespacetest_93_0{

    public function __invoke()
    {
        $class = __CLASS__;
        \xltxlm\helper\Util::d($class);
        $Namespace = (new Classinfo($class))
            ->getNamespace();
        \xltxlm\helper\Util::d($Namespace);
        assert($Namespace == 'xltxlm\\classinfo\\test\\Classinfo');
    }

}

