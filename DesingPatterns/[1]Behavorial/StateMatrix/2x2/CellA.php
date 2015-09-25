<?php
include_once 'ICell2x2.php';
class CellA extends ICell
{
const Field='[*][B]<br>[C][D]';
  public function up(){
//nofun
}
public function down()
  {
    return CellC::Field;
  }
public function left()
  {
    //
  }
  public function right()
    {
      return CellB:Field;
    }
}

?>
