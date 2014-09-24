<?php

class Encuesta extends Eloquent
{
	protected $table = 'surveys';
	protected $primaryKey = 'id';
	protected $fillable = array();

	public function preguntas()
	{
		return $this->hasMany('Pregunta');
	}
}