<?php

namespace xltxlm\classinfo\test\Classinfo;

use xltxlm\classinfo\Classinfo;

/**
 *
 */
class Name_no_Namespace_92_0
{

    public function __invoke()
    {
        $class = __CLASS__;
        \xltxlm\helper\Util::d($class);
        $getName_no_Namespace = (new Classinfo($class))
            ->getName_no_Namespace();
        \xltxlm\helper\Util::d($getName_no_Namespace);
        assert($getName_no_Namespace == 'Name_no_Namespace_92_0');
    }

}

