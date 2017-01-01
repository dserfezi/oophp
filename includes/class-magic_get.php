<?php


/**
* Class Magic_Get Trying to get a property that does not exist and property that is protected or private
*/
class Magic_Get {

    // Protected property
    protected $protected_prop = "<br>I'm protected property.";
    // Private property
    private $private_prop = "<br>I'm private property.";

    // Magic method get
    function __get($name){

        // Return protected or private property if exists
        if(property_exists($this, $name)){
            return $this->$name;
        }

        // If property does not exist trigger error...
        $trace = debug_backtrace();
        trigger_error(
        'Undefined property via __get(): ' . $name .
        ' in ' . $trace[0]['file'] .
        ' on line ' . $trace[0]['line'],
        E_USER_NOTICE);

        // ...and return NULL
        return null;
    }

}
