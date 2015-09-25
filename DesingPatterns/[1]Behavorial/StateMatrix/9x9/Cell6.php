<?php
/*FileName:Cell6.php*/
class Cell6 implements IMatrix{
const Char= "[6]";
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
public function Up(){
  $this->context->setContext($this->context->getc3());
  $this->context->setc6($this->context->getc9());
  $this->context->setc3($this->context->getc6());
  $this->context->setc2($this->context->getc3());
  $this->context->setc5($this->context->getc2());
  $this->context->setc8($this->context->getc5());
  $this->context->setc9($this->context->getc8());
  $this->context->Mash();
  
}
public function Down(){
  $this->context->setContext($this->context->getc9());
  $this->context->setc6($this->context->getc3());
  $this->context->setc9($this->context->getc6());
  $this->context->setc8($this->context->getc9());
  $this->context->setc5($this->context->getc8());
  $this->context->setc2($this->context->getc5());
  $this->context->setc3($this->context->getc2());
  $this->context->Mash();
}
public function Left(){
  $this->context->setContext($this->context->getc5());
  $this->context->setc6($this->context->getc4());
  $this->context->setc5($this->context->getc6());
  $this->context->setc4($this->context->getc5());
  $this->context->Mash();
}
public function Right(){
   //invalid move
 //!idea make state jump to c4
   $this->context->Mash();
}
}
?>
