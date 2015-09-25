<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 2:20 PM
 */

namespace bootstrap;

include_once 'IPrototype.php';
class panel extends IPrototype
{
   protected $class="panel-default";
   protected $heading="Panel heading without title";
   public $content="Panel content";
public function __construct($class="panel-default",$heading="PANEL",$content="NEWS STUFF")
{
    $this->class=$class;
    $this->heading=$heading;
    $this->content=$content;
    $this->html='<div class="panel %s ">
  <div class="panel-heading">%s</div>
  <div class="panel-body">
%s
</div>
</div>';

}
    public function _class($c){ $this->class=$c;}
    public function _heading($h){$this->heading=$h;}
    public function _content($c){$this->content=$c;}
    public function _htmlTemplate($template){
        if(($template=="")||($template==null))
        {
            $this->html='<div class="panel %s ">
  <div class="panel-heading">%s</div>
  <div class="panel-body">
%s
</div>
</div>';}else{  $this->html=$template;}

    }
    public function __toString()
    {
        //toString implicitly is called when the class instance is echo'd;
        //this function binds the property to the html template  and output the html;

        return sprintf($this->html,$this->class,$this->heading,$this->content);
    }
   public  function __clone(){}
}