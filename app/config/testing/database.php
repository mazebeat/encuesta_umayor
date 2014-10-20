<?php

return array(
	'default'     => 'sqlite',
	'connections' => array(
		'mysql'  => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'umayor',
			'username'  => 'root',
			'password'  => '1234',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => ':memory:',
			'prefix'   => ''
		),
	),
);
