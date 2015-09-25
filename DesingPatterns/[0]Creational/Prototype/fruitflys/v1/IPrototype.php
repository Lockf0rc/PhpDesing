<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 7:14 PM
 */

namespace fruitfly;


abstract class IPrototype
{
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;
    abstract function __clone();
}
?>

