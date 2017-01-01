<?php


/**
 * Class Keyword_Static Demonstrate static keyword using on variable and method
 */
class Keyword_Static {

    public $object_variable = "I'm variable at object level.";
    static public $static_variable = "I'm variable at class level.";

    public function object_method($param = "I'm method at object level."){
        return $param;
    }

    static public function static_method($param = "I'm method at class level."){
        return $param;
    }

}
