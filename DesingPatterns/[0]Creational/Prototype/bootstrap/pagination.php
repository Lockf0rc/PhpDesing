<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/20/2015
 * Time: 8:03 AM
 */

namespace bootstrap;
#todo
# an easy method for  assigning hrefs to list items
include_once 'IPrototype.php';
class pagination extends IPrototype
{
    protected $innerHtml;
    protected $listHtml;
public function __construct(){
  $this->listHtml='<li><a href="#%s">%s</a></li>';
    $this->innerHtml='';
    $this->html='<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
 %s
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>';

}
    public function _list($rlow,$rupper){
        $args=range($rlow,$rupper);
        foreach($args as $key=>$val) {
        $this->innerHtml .= sprintf($this->listHtml,$key, $val);
     }
    }

    public function __clone(){}
    public function  __toString(){
        return sprintf($this->html,$this->innerHtml);
    }

}