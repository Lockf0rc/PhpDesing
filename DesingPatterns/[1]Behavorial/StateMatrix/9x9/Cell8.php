<?php
/*FileName:Cell8.php*/
class Cell8 implements IMatrix{
private $Char= "[8]";
private $context;
public function __construct(Context $now){
$this->context=$now;
}
/*(Absolute Ref)
[1][2][3]
[4][5][6]
[7][8][9]
*/
public function getChar(){return $this->Char;}
public function Up(){
  $this->context->setContext($this->context->getc5());
  $this->context->setc8($this->context->getc2());
  $this->context->Mash();
}
public function Down(){
  $this->context->setContext($this->context->getc2());
  $this->context->setc8($this->context->getc5());
  $this->context->setc2($this->context->getc8());
}
public function Left(){}
public function Right(){}

}
?>
