<?php 

abstract class IFactory
{
  abstract function FactoryMethod();
  
  public function startFactory()
  {
    $this->FactoryMethod();
  }
}

?>
