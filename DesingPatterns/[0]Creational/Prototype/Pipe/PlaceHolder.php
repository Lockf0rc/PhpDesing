<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 8:36 PM
 */

namespace Pipe;

include "IPrototype.php";
class PlaceHolder extends  IPrototype
{

    public function __construct( )
    {
            $this->matterial="PVC SHC 80";
            $this->maxCutLength="20'-0\"";
            $this->typeStart="Plain End";
            $this->typeEnd="Plain End";


    }
    function __clone(){}

}
?>