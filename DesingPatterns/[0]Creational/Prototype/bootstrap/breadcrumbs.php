<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 7:29 PM
 */
namespace bootstrap;
include_once 'IPrototype.php';
class breadcrumbs extends IPrototype
{
    protected $dirHtml;
    protected $listHtml;
    public $innerHtml;
    public function __construct(){
        $this->list="";
        $this->innerHtml="";
        $this->html='<ol class="breadcrumb">
 %s
</ol>';
        $this->listHtml='<li><a href="%s">%s</a></li>';
        $this->dirHtml='<li class="active">%s</li>';
    }
    public function _dir($dir){
        $this->innerHtml.=sprintf($this->dirHtml,$dir);
    }
    public function _list($li,$url){
        
            $this->innerHtml.=sprintf($this->listHtml,$url,$li);
       
    }
    public function __toString(){
        return sprintf($this->html,$this->innerHtml);
    }
    public function __clone(){}
}
