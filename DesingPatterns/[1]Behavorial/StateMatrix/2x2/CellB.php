<?php
include_once 'ICell2x2.php';
class CellB extends ICell
{
const Field='[A][*]<br>[C][D]';
  public function up(){
//nofun
}
public function down()
  {
    return CellD::Field;
  }
public function left()
  {
    return CellA::Field;
  }
  public function right()
    {
      
    }
}

?>
