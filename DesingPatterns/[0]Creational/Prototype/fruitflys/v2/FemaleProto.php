<?php
//FemaleProto.php
include_once('IPrototype.php');
class FemaleProto extends IPrototype
{
	const gender="FEMALE";
	public $fecundity;

	public function __construct()
	{
 	$this->eyecolor="Red";
  	$this->wingBeat="220";
   	$this->unitEyes="760";
	}
	function __clone(){}
} 
?>