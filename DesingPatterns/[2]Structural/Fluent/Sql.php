<?php
namespace DesingPatterns\Structural\Fluent

class Sql
{
  protected $fields = array();
  protected $from = array();
  protected $were = array();
  /*
    adds a select fields
    @param array $fields
    @return Sql
  */
  public function select(array $fields = array())
  {
    $this->fields=$fields;
    return $this;
  }
  /*
    adds FROM clause
    @param string $table
    @param string $alias
    @return Sql
  */
  public function from($table, $alias)
  {
    $this->from[]=$table.'AS'.$alias;
    return $this;
  }
  
  public function where($condition)
  {
    $this->where[]=$condition;
    return $this;
  }
  /*
    gets the query
    @return string
   */
  public function getQuery()
   {
     return 'SELECT '.implode(',', $this->fields)
       .' FROM ' . implode(',', $this->from)
       .' WHERE ' . implode(' AND ',$this->where);
   } 
}

?>
