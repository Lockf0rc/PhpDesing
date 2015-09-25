<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 4:59 PM
 */

namespace bootstrap;

include_once 'IPrototype.php';
class jumbotron
{
    public $content;

    public function __construct($content="%DEFAULT CONTENT%")
    {
        $this->html='<div class="jumbotron">
    %s
</div>';

      $this->content=$content;
    }
    public function _content($content)
    {
        $this->content=$content;
    }
    public function __clone()
    {

    }
    public function _htmlTemplate($html){
     $this->html=$html;
    }
    public function __toString()
    {
        return sprintf($this->html,$this->content);
    }

}