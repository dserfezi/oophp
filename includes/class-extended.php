<?php


/**
 * Class Extended Class to be extended
 */
class Extended{

    protected $variable;

    function __construct(){
        $this->variable = 'foo';
    }

    public function the_variable(){
        echo $this->variable;
    }

}
