<?php
/**
 * Created by PhpStorm.
 * User: DIEGOPC
 * Date: 15-09-2014
 * Time: 11:35
 */

class Func {

	public static function printr($a)
	{
		echo "<pre>" . htmlspecialchars(print_r($a, true)) . "</pre>";
		die();
	}
} 