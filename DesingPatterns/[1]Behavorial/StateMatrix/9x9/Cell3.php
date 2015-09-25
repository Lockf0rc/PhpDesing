<?php
/*FileName:Cell3.php*/
class Cell3 implements IMatrix{
const Char= "[3]";
  
private $context;
public function __construct(Context $now){
$this->context=$now;
}
/*(Absolute Ref)
[1][2][3]
[4][5][6]
[7][8][9]
*/
public function getChar(){return self::Char;}
public function Up(){/*Invaled move*/$this->context->Mash();}
public function Down(){/*
[1][5][2]
[4][8][3]
[7][9][6]
*/
  $this->context->setContext($this->context->getc6());
  $this->context->setc3($this->context->getc2());
  $this->context->setc6($this->context->getc3());
  $this->context->setc9($this->context->getc6());
  $this->context->setc8($this->context->getc9());
  $this->context->setc5($this->context->getc8());
  $this->context->setc2($this->context->getc5());

  $this->context->Mash();
}
public function Left(){/*
[1][3][6]
[4][2][9]
[7][5][8]
*/
 $this->context->setContext($this->context->getc2());
  $this->context->setc3($this->context->get6());
  $this->context->setc6($this->context->get9());
  $this->context->setc9($tis->context->get8());
  $this->context->setc8($this->context->get5());
  $this->context->setc5($this->context->get2());
  $this->context->setc2($this->context->get3());
 
  $this->context->Mash();
}
public function Right(){/*Invaled move*/$this->context->Mash();}

}
?>
