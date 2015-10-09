<?php

namespace DesingPatterns\Structural\Fluent\Tests;
use DeisingPatterns\Structural\Fuent\Sql;

class FluentTest extends \PHPUnit_Framework_TestCase
{
  public function testBuildSQL()
  {
    $instance = new Sql();
    $query= $instance->select(array('foo', 'bar'))
      ->from('foobar', 'f')
      ->where('f.bar = ?')
      ->getQuery();
      $this->assertEquals('SELECT foo,bar FROM foobar AS f WHERE f.bar = ?', $query);
  }
}
