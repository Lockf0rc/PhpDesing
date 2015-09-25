<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/20/2015
 * Time: 10:10 AM
 */

namespace bootstrap;

include_once 'IPrototype.php';
class Image extends IPrototype
{
    public $href;
    public $alt;
    public function __construct($href='#IMG',$alt='...'){
        $this->href=$href;
        $this->alt=$alt;
        $this->html='<img src="%s" alt="%s">';

    }
    public function __clone(){}
    public function __toString(){
        return sprintf($this->html,$this->href,$this->alt);
    }

}