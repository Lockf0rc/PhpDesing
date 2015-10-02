<?php
$Path = '/home3/lockf0rc/bin';
require "$Path/PHP/Registry.php";
Registry::set('~','/home3/lockf0rc/bin');
Registry::set('TITLE','TEMPLATE_STANDERD');
Registry::set('LINK','');
Registry::set('BOOTSTRAPCDN','<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/darkly/bootstrap.min.css">');
Registry::set('STYLE','*{}');
$Path=Registry::get('~');
include("$Path/SQL/dbAdapter.php");
include "/home3/lockf0rc/bin/PHP/Inc/STD_HD.inc.php";
class Client
{

}
?>