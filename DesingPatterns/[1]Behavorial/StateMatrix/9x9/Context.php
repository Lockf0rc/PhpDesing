<?php
/* FileName:Context.php
Description:contain context of the State pattern 
*/
function __autoload($class_name){
include "Cells/$class_name.php";
}
class Context {
private $context;
private $cell1;
private $cell2;
private $cell3;
private $cell4;
private $cell5;
private $cell6;
private $cell7;
private $cell8;
private $cell9;
private $scope;
public function __construct($now=2){
$this->cell1=new Cell1($this);
$this->cell2=new Cell2($this);
$this->cell3=new Cell3($this);
$this->cell4=new Cell4($this);
$this->cell5=new Cell5($this);
$this->cell6=new Cell6($this);
$this->cell7=new Cell7($this);
$this->cell8=new Cell8($this);
$this->cell9=new Cell9($this);
$this->scope=array(0,$this->cell1,$this->cell2,$this->cell3,$this->cell4,$this->cell5,$this->cell6,$this->cell7,$this->cell8,$this->cell9);
	$b=(($now>0)&&($now<10))?floor($now):5;//error handeling if not in 1-9 int range default to 5
	$this->context=$this->scope[$b];
	
	
}
/*SETTER */
public function setContext($now){$this->context=$now;}
/*CLient use*/
public function IUp(){$this->context->Up();}
public function IDown(){$this->context->Down();}
public function IRight(){$this->context->Left();}
public function ILeft(){$this->context->Right();}
/*Get Objects*/
public function getc1(){return $this->cell1;}public function setc1(IMatrix $now){$this->cell1=$now;}
public function getc2(){return $this->cell2;}public function setc2(IMatrix $now){$this->cell2=$now;}
public function getc3(){return $this->cell3;}public function setc3(IMatrix $now){$this->cell3=$now;}
public function getc4(){return $this->cell4;}public function setc4(IMatrix $now){$this->cell4=$now;}
public function getc5(){return $this->cell5;}public function setc5(IMatrix $now){$this->cell5=$now;}
public function getc6(){return $this->cell6;}public function setc6(IMatrix $now){$this->cell6=$now;}
public function getc7(){return $this->cell7;}public function setc7(IMatrix $now){$this->cell7=$now;}
public function getc8(){return $this->cell8;}public function setc8(IMatrix $now){$this->cell8=$now;}
public function getc9(){return $this->cell9;}public function setc9(IMatrix $now){$this->cell9=$now;}

	public function Mash(){
		$c1=$this->cell1->getChar();
		$c2=$this->cell2->getChar();
		$c3=$this->cell3->getChar();
		$c4=$this->cell4->getChar();
		$c5=$this->cell5->getChar();
		$c6=$this->cell6->getChar();
		$c7=$this->cell7->getChar();
		$c8=$this->cell8->getChar();
		$c9=$this->cell9->getChar();
		echo $c1.$c2.$c3;
		echo "\n<br/>";
		echo $c4.$c5.$c6;
		echo "\n<br/>";
		echo $c7.$c8.$c9;
		echo "\n<br/>";
	}
}

?>

