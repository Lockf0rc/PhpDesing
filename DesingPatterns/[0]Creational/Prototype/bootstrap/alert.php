<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 3:22 PM
 */

namespace bootstrap;

include_once "IPrototype.php";
class alert extends IPrototype
{
    public  $class="alert-success";
    public  $content="ALERT IS NOT SET";
    public function __construct($class,$content)
    {
        $this->class=$class;
        $this->content=$content;
        $this->html='<div class="alert %s" role="alert">%s</div>';
    }
    public function _class($c){
        $this->class=$c;
    }
    public function _content($c){
        $this->content=$c;
    }
    public function _htmlTemplate($s=null)
    {
        $reset=($s=="" ||$s==null)?true:false;
        if($reset){
            $this->html='<div class="alert %s" role="alert">%s</div>';
        }else{$this->html=$s;}

    }
    public function __clone(){}
    public function __toString(){
        return sprintf($this->html,$this->class,$this->content);
    }

}