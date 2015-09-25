<?php
//Client.php
include 'FemaleProto.php';
include 'MaleProto.php';
class Client
{
	//for direct instatiation
	private $fly1;//maleproto
	private $fly2;//femaleproto


	//for cloning
	// public $c1Fly;
	// public $c2Fly;
	// public $updatedCloneFly;
	public $input;

	public function __construct()
	{
	$this->fly1= new MaleProto();
	$this->fly2= new FemaleProto();

	// //clone
	// $this->c1Fly= clone $this->fly1;
	// $this->updatedCloneFly= clone $this->fly2;
	
	// $this->c2Fly= clone $this->fly2;
	// //update clones properties
	// $this->c1Fly->mated="truen";
	// $this->c2Fly->fecundity="186n";
	// $this->updatedCloneFly->eyecolor="purplen";
	// $this->updatedCloneFly->wingBeat="220n";
	// $this->updatedCloneFly->unitEyes="750n";
	// $this->updatedCloneFly->fecundity="92n";

	//send through type hinting method

	

	}

public function showFly(){
//produce JSON from fly type objects
//

	echo json_encode($this);

return $this;
	}

	public function compile($filename,$n=true){
		$json= json_encode($this);
		if($n){
		$json=preg_replace('/\"/i', '\"', $json);

		}
		`echo  $reg > $filename`;
		echo "Compiled to $filename, FORMAT :JSON";
		echo $json;
	}


	public function load($json){
	$this->input= file("$json");

	}

}
?>