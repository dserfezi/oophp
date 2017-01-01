<?php


/**
 * Class Circle
 */
class Circle
{
    /**
     * Calculate circle area
     * @param float $radius
     * @return float
     */
    public function get_area($radius)
    {
        return $radius * $radius * pi();
    }
}


/**
 * Class Square
 */
class Square
{
    /**
     * Calculate square area
     * @param float $side
     * @return float
     */
    public function get_area($side)
    {
        return $side * $side;
    }
}


/**
 * Class Shape Factory class for shape classes
 */
class Shape
{
    /**
     * Return instance of a given shape class
     * @param $shape
     * @return Circle|Square
     * @throws Exception
     */
    static public function get_shape($shape)
    {
        try {
            switch ($shape) {
                case 'circle':
                    return new Circle();
                case 'square':
                    return new Square();
                default:
                    throw new Exception('Unrecognized shape.');
            }
        } catch (Exception $e) {
            echo '<h2>' . $e->getMessage() . '</h2>';
        }
    }
}