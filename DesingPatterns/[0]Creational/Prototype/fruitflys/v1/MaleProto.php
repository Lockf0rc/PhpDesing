<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 7:25 PM
 */

namespace fruitfly;

include_once 'IPrototype.php';
class MaleProto extends IPrototype
{
    const gender="MALE";
   /*bool*/ public  $mated;

    public function __construct()
    {
        $this->eyeColor="red";
        $this->wingBeat="220";
        $this->unitEyes="760";
    }
    function __clone(){}
}