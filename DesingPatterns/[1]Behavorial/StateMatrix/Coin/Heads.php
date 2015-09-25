<?php
include_once 'ICoin.php';
class Heads extends ICoin{
const current="HEADS";
private $toss;
private $Token;

public function flip(){
   $n=rand(0,1);
   $res=($n>=.5)1:0;
   $this->toss=$res;
   return $res;
}
public function getTok(){
return $this->toss;
}
  

}
