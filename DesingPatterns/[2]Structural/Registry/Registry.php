<?php

abstract class Registry
{
	const INIT='subject';
	protected static $storage= array();
	
	public static function set($key,$val)
	{
		self::$storage[$key]=$val;
	}
	public static function get($key)
	{
		return self::$storage[$key];
	}
}
?>