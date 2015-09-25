<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/20/2015
 * Time: 10:30 AM
 */

namespace bootstrap;
include_once 'IPrototype.php';

class Button extends IPrototype
{
    public  $class;
    public  $header;
    public $href;
    public function __construct($href='#',$class='btn-primary',$header='DEFAULT HEADER'){
        $this->href=$href;
        $this->header=$header;
        $this->class=$class;
        $this->html='<a href="%s" class="btn %s" role="button">%s</a>';
    }
    public function _href($link){
        $this->href=$link;
    }
    public function _header($header){
        $this->header=$header;
    }
    public function _class($class){
        $this->class=$class;
    }
   public function __clone(){}
    public function __toString(){
        return sprintf($this->html,$this->href,$this->class,$this->header);
    }

}