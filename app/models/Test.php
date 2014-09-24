<?php

class Test extends \Eloquent {
	protected $table      = 'test';
	protected $primaryKey = 'id';

	public function clientes()
	{
		return $this->hasMany('Cliente', 'bdd_umayor_id_alumno');
	}
}