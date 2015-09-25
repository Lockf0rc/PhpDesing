<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/16/2015
 * Time: 6:48 PM
 */
include_once "Person.php";
include_once "CloneMe.php";

$worker=new Person();
$worker->display();

$slacker= clone $worker;
$slacker->name="NEW NAME";
$slacker->display();

