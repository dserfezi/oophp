<?php


/**
 * Class Extender Class that extends another class
 */
class Extender extends Extended{

    function __construct(){
        $this->variable = 'bar';
    }

    public function the_variable(){
        echo $this->variable;
    }

}
