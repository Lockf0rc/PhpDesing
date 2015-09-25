<?php
/*Filename:Cell1.php */

class Cell1 implements IMatrix{
 const Char= "[1]";
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
public function Up(){/*invaled move*/ $this->context->Mash();}
public function Down(){
/*swap (cell2->cell1,cell1->cell4) clockwise*/
/*
[2][5][3]
[1][8][6]
[4][7][9]
*/
$this->context->setContext($this->context->getc4());
$this->context->setc1($this->context->getc2());
$this->context->setc4($this->context->getc1());
$this->context->setc7($this->context->getc4());
$this->context->setc8($this->context->getc7());
$this->context->setc5($this->context->getc8());
$this->context->setc2($this->context->getc1());

$this->context->Mash();
 }
public function Right(){ /*swap
[4][1][3]
[7][2][6]
[8][5][9]
*/
$this->context->setContext($this->context->getc2());
$this->context->setc1($this->context->getc4());
$this->context->setc4($this->context->getc7());
$this->context->setc7($this->context->getc8());
$this->context->setc8($this->context->getc5());
$this->context->setc5($this->context->getc2());
$this->context->setc2($this->context->getc1());

$this->context->Mash();
}
public function Left(){/*invaled move*/$this->context->Mash();}

}

 ?>

