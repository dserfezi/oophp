<?php


/**
* Class Database Connection to database and query functions
*/
class Database {

    private $_connection;
    static private $_instance;


    /**
    * Get an instance of the Database
    * @return Database
    */
    static public function get_instance(){

        // If instance is not created already
        if(!self::$_instance){
            // Create an instance of the Database class
            self::$_instance = new self();
            // If there is no connection object
            if(!self::$_instance->_connection){
                // Create connection object
                self::$_instance->_connection = new mysqli('localhost', 'oop_testing', 'oop_testing', 'oop_testing');
                // Trigger error if connection unsuccessful
                if(mysqli_connect_error()) trigger_error('Failed to connect to MySQL: ' . mysqli_connect_error(), E_USER_ERROR);
               // Set charset to connection object
                self::$_instance->_connection->set_charset('utf8');
            }
        }

        // Expose private property $_instance
        return self::$_instance;

    }


    /**
    * Get a connection object
    * @return mixed
    */
    public function get_connection(){

        return $this->_connection;

    }


    function __construct(){}
    function __clone(){}

}
