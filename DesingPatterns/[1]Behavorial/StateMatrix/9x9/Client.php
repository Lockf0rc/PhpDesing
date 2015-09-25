<?
/*
FileName:Client.php
*/
include "IMatrix.php";
include "Context.php";

class Client{
public $Tnow;
public construct(){
$this->Tnow = new Context(2);

$this->Tnow->Mash();
$this->Tnow->IRight();
$this->Tnow->ILeft();

}
}
$nw= new Client();
?>
