<?php
include 'IFactory.php';
class ConcreateFactory extends IFactory
{
  /*
  products listing
  */
  private $desktop;
  private $laptop;
  private $tablet;
  public function __construct(){
    $this->desktop=new desktop();
    $this->laptop=new laptop();
  }
  
 private function FactoryMethod()
  {
   $this->format($this->desktop);
   $this->format($this->labtop);
   $this->formatt($this->tablet);
  }
  /*
   function startFactory();
  */
  
  public function formatt( IProduct $P )
  {
  echo var_dump($P);
  }
  
}
?>
