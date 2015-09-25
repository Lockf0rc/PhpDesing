<?php 
/* 
 * 	Absract Factory Pattern
 *
 */
 incude "IBOOKFACTORY.php";

 class ConcreateFactory extends IBOOKFACTORY
{
	private $_author;
	private $_title;
	
	function __construct()
	{
		$this->_author='SAMPLE NAME ,SAMPLE LASTNAME';
		$this->_title='TITLE VALUE';
	}
	
	function get_author()
	{
	return $this->_author;
	}
	
	function get_title()
	{
		return $this->_title;
	}
}