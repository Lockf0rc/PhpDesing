<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 9:15 PM
 */

namespace Pipe;



include "PlaceHolder.php";
include "DI.php";

class Client
{
private  $o;
private $o2;
    public  function  __construct(){
        $o= new PlaceHolder();
        $o2= new DI();
        $oo= clone $o2;
        $oo->matterial="Steel";
        $oo->typeEnd="ButtWeld";

        echo $this->display($o);
        echo $this->display($o2);
        echo $this->display($oo);
    }

    function display(IPrototype $n){
        $html=" MATTERIAL:$n->matterial<br/>\n
            Max Cut Lenth: $n->maxCutLength<br>\n
            Type: $n->typeStart by $n->typeEnd \n<hr\>
 ";
        $query= urlencode($n->matterial." Pipe");
        $ln="http://www.google.com/search?q=$query";
        $html.="<a href=$ln>".$n->matterial.'</a>';
        return $html;
    }
}
$work=new Client();

?>