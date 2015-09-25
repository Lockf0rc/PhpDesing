<?php
include_once 'ICell2x2.php';
class CellC extends ICell
{
const Field='[A][B]<br>[*][D]';
  public function up(){
return CellA::Field;
}
public function down()
  {
  //
  }
public function left()
  {
    return CellD::Field;
  }
  public function right()
    {
      //
    }
}

?>
