<?php


/**
 * Class Magic_Set Trying to set a property that does not exist
 */
class Magic_Set {

    // Array to save non existing variables into
    protected $non_existing_prop_array = array();

    // Magic method set
    function __set($name, $value){
        if(!property_exists($this, $name)){
            $this->non_existing_prop_array[$name] = $value;
        }
    }

}
