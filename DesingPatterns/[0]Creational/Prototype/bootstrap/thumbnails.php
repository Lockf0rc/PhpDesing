<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/20/2015
 * Time: 10:05 AM
 */

namespace bootstrap;
include_once 'Image.php';
include_once 'IPrototype.php';
class thumbnails extends  IPrototype
{
    public $content;
    protected $image;
    protected $header;
    protected $button;
    public function __construct(Image $im =null,$header="DEFAULT HEADING", $btn='',$content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac convallis est, vitae varius dolor. Nulla sollicitudin felis a magna tempus feugiat. Etiam rhoncus elit a blandit dignissim. Praesent mattis, odio vitae porttitor blandit, sem magna commodo diam, a ornare eros orci vel massa. Suspendisse hendrerit arcu non nisl dapibus finibus. Suspendisse nec tellus leo. "){
        $this->image=$im;
        $this->header=$header;
        $this->content=$content;
        $this->button=$btn;
        $this->html='<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        %s
    <div class="caption">
        <h3>%s</h3>
        <p>%s</p>
           %s
      </div>
    </div>
  </div>
</div>';
    }
    public function _button($button){
        $this->button=$button;
    }
    public function _header($header){
        $this->header=$header;
    }
    public function _image($img){
     $this->image=$img;
    }
    public function _content($content){
        $this->content=$content;
    }
    public function __clone(){}
    public function __toString(){
        return sprintf($this->html,$this->image,$this->header,$this->content,$this->button);
    }

}