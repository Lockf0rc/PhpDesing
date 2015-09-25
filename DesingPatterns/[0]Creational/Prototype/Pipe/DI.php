<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 8:58 PM
 */

namespace Pipe;



class DI extends IPrototype
{
public function __construct()
{
    $this->matterial="Ductile Iron";
    $this->maxCutLength='17\'-6"';
    $this->typeStart="Flanged";
    $this->typeEnd="Grooved";

}

    public  function __clone(){}

}