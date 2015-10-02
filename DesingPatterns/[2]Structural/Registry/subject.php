<?php
class subject{
	public $name=null;
	public function __construct($name=null){
		$this->name=$name;
	}
	public function getname(){
		return $this->name;
	}
}
?>