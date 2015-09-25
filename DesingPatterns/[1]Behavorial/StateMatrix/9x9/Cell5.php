<?php
/*FileName:Cell5.php*/
class Cell5 implements IMatrix{
const Char= "[5]";
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
  $this->context->setContext($this->getc2());
  $this->context->setc5($this->context->getc8());
  $this->context->setc2($this->context->getc5());
  $this->context->setc8($this->context->getc2());
  $this->context->Mash();
}
public function Down(){
    $this->context->setContext($this->context->getc8());
    $this->context->setc5($this->context->getc2());
    $this->context->setc2($this->context->getc8());
    $this->context->setc8($this->context->getc2());
    $this->context->Mash();
}
public function Left(){
  $this->context->setContext($this->getc4());
  $this->context->setc5($this->context->getc6());
  $this->context->setc4($this->context->getc5());
  $this->context->setc6($this->context->getc4());
  $this->context->Mash();
}
public function Right(){
  $this->context->setContext($this->getc6());
  $this->context->setc5($this->context->getc4());
  $this->context->setc4($this->context->getc6());
  $this->context->setc6($this->context->getc5());
  $this->context->Mash();
}

}
?>
