<?php

namespace xltxlm\classinfo\test\Features\__Object_toJson;

use xltxlm\classinfo\Features\__Object_toJson;

/**
 *
 */
class __Object_toJson_67
{

    public function __invoke()
    {
        $b = new class extends \stdClass
        {
            protected $b1 = __LINE__;
            protected $b2 = __LINE__;
            //外部引入的类,只有公共属性才能被看到
            public $b3 = __LINE__;
        };

        $a = new class($b) extends \stdClass
        {
            protected $a1 = __LINE__;
            protected $a2 = __LINE__;
            public $a3 = __LINE__;
            public $a4 = __LINE__;

            /**
             *  constructor.
             * @param int $a4
             */
            public function __construct($a4)
            {
                $this->a4 = $a4;
            }

            use __Object_toJson;
        };

        \xltxlm\helper\Util::d($a->__Object_toJson());
        assert($a->__Object_toJson() =='{"a1":25,"a2":26,"a3":27,"a4":{"b3":20}}');

    }

}

