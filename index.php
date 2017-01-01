<?php

define('DS', DIRECTORY_SEPARATOR);

// Require autoloader
require_once 'bootstrap'.DS.'autoload.php';


/**
 * Database class testing
 */
$db = Database::get_instance();
$connection = $db->get_connection();
echo '<h2>Database instance info:</h2>';
echo '<pre>'; var_dump($db); echo '</pre>';
echo '<h2>Database connection info:</h2>';
echo '<pre>'; var_dump($connection); echo '</pre>';

$db1 = Database::get_instance();
$connection1 = $db1->get_connection();
echo '<h2>Another Database instance info:</h2>';
echo '<pre>'; var_dump($db1); echo '</pre>';
echo '<h2>Another Database connection info:</h2>';
echo '<pre>'; var_dump($connection1); echo '</pre>';


/**
 * Static keyword testing
 */
// Echo variable at class level
echo '<br>' . Keyword_Static::$static_variable;
// Echo method at class level
echo '<br>' . Keyword_Static::static_method();

// Instance
$obj = new Keyword_Static();
// Echo variable at object level
echo '<br>' . $obj->object_variable;
// Echo method at object level
echo '<br>' . $obj->object_method();


/**
 * Magic get testing
 */
// New instance
$test_get_method = new Magic_Get();
// Try to get non existing property
//echo '<pre>non_existing_prop: '; var_dump($test_get_method->non_existing_prop); echo '</pre>';
// Try to get protected property
echo '<pre>protected_prop: '; var_dump($test_get_method->protected_prop); echo '</pre>';
// Try to get private property
echo '<pre>private_prop: '; var_dump($test_get_method->private_prop); echo '</pre>';


/**
 * Magic set testing
 */
// New instance
$test_set_method = new Magic_Set();
// Try to set non existing property
$test_set_method->non_existing_prop = 'test';
// Print object
echo '<pre>'; var_dump($test_set_method); echo '</pre>';


/**
 * Factory testing
 */
$circle_instance = Shape::get_shape('vwvwrvw');
echo 'Circle area with radius 3: ' . $circle_instance->get_area('3');

echo '<br>';

$square_instance = Shape::get_shape('square');
echo 'Square area with side 3: ' . $square_instance->get_area('3');


/**
 * Extending classes testing
 */
$child = new Extender();
echo 'Child class changed variable: ';
$child->the_variable();
