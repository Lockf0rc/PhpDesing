<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 2:12 PM
 */

namespace bootstrap;


abstract class IPrototype
{
   public $html;

   abstract function __clone();
    abstract function  __toString();

}