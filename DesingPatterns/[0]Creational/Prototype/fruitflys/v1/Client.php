<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 7:35 PM
 */
namespace fruitfly;

include 'MaleProto.php';
include 'FemaleProto.php';

class Client{
    //direct instantiation
    private $fly1;
    private $fly2;

    //cloned
    private  $c1Fly;
    private  $c2Fly;
    private  $updatedCloneFly;


    public function __construct()
    {
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->c2Fly;

        //update clone vars
        $this->c1Fly->mated="true";
        $this->c2Fly->fecundity="186";
        $this->updatedCloneFly->eyeColor="purple";
        $this->updatedCloneFly->wingBeat="220";
        $this->updatedCloneFly->unitEyes="750";
        $this->updatedCloneFly->fecundity="92";
        //show through type hinting method
        $this->showFly($this->fly1);
        $this->showFly($this->fly2);
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);
    }

    /**
     * @param IPrototype $fly
     */
    private function showFLy(IPrototype $fly)
    {
        $gen= $fly::gender;
        $s="<hr>
    Eye Color: %s<br/>\n
    Wing Beats/second: %s<br/>\n
            Eye units: %s<br/>\n
            Gender: $gen
";
        $s.=($gen=="FEMALE")?"\n Number of eggs: $fly->fecundity<br/>":"Mated: $fly->mated";
        $str=sprintf($s,$fly->eyeColor,$fly->wingBeat,$fly->unitEyes);
        echo $str;

    }


}
$worker=new Client();
?>


