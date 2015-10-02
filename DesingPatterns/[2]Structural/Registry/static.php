<?php
include_once 'Registry.php';
include_once 'subject.php';
$x=Registry::INIT;
Registry::set('INIT', 'THIS IS THE NAME');
echo Registry::get('INIT');
?>