<?php
function inc(){
	$n=func_get_args();
	foreach ($n as $string){
		include_once "$string";
	}
}
inc('Registry.php','static.php');
?>
<?=Registry::INIT;?>
<?= Registry::get('INIT');?>