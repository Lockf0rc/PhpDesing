<?php
/*FileName:Cell2.php*/

class Cell2 implements IMatrix{
const Char= "[2]";
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
public function Up(){/*invalled move*/$this->context->Mash();}
public function Down(){/*
[1][8][3]
[4][2*][6]
[7][5][9]
*/
$this->context->setContext($this->context->getc5());
$this->context->setc2($this->context->getc8());
$this->context->setc5($this->context->getc2());
$this->context->setc8($this->context-getc5());

$this->context->Mash(); 
}
public function Left(){/*
[3][1][2*]
[4][5][6]
[7][8][9]
*/
 $this->context->setContext($this->context->getc3());
  $this->context->setc2($this->context->getc1());
  $this->context->setc3($this->context->getc2());
  $this->context->setc1($this->context->getc3());

  $this->context->Mash();
}
public function Right(){/*
[2*][3][1]
[4][5][6]
[7][8][9]
*/
 $this->context->setContext($this->context->getc1());
  $this->context->setc2($this->context->getc3());
  $this->context->setc3($this->context->getc1());
  $this->context->setc1($this->context->getc2());
 
  $this->context->Mash();
}

}

?>
