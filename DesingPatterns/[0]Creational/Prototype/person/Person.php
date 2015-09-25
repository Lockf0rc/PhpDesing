<?php

/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 6:38 PM
 */
include 'CloneMe.php';
class Person extends CloneMe
{
    public function __construct()
    {
    $this->picture="http://localhost/moc/DesingPatterns/%5b0%5dCreational/Prototype/prototypeUML.svg";
    $this->name="Original";
    }
    public function display()
    {
        $s="<img src='%s'>\n<br/><p>%s</p>";
        echo sprintf($s,$this->picture,$this->name);
    }
    function __clone(){}
}
