<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 6:55 PM
 */

namespace bootstrap;

include_once 'IPrototype.php';
class modal extends IPrototype
{
    public $id;
    public $btn;
    public $title;
    public $content;
    public function __construct($id="myModal",$btn="clickMe",$title="NEW MODAL",$content="Loripsum ipsun"){
        $this->id=$id;
        $this->btn=$btn;
        $this->title=$title;
        $this->content=$content;
        $this->html='<div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#%s">%s</button>

    <!-- Modal -->
    <div class="modal fade" id="%s" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">%s</h4>
                </div>
                <div class="modal-body">
                    %s
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>';

    }
    public function  _id($id){
        $this->id=$id;
    }
    public function _btn($name){
        $this->name;
    }
    public function  _title($title){
        $this->title=$title;
    }
    public function _content($content)
    {
        $this->content=$content;
    }
    public function __toString(){
        return sprintf($this->html,$this->id,$this->btn,$this->id,$this->title,$this->content);
    }
    public function __clone(){}
}
