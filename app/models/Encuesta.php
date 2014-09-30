<?php

/**
 * Encuesta
 *
 * @property integer $id_encuesta
 * @property string $titulo
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 * @property integer $id_estado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereIdEncuesta($value) 
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereTitulo($value) 
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereFechaCreacion($value) 
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereFechaModificacion($value) 
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereIdEstado($value) 
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Encuesta whereUpdatedAt($value) 
 */
class Encuesta extends \Eloquent
{

	public static $rules = array(
		'titulo'             => 'required',
		'estado'             => 'required',
		'fecha_Creacion'     => 'required',
		'fecha_Modificacion' => 'required'
	);
	protected $table = 'encuestas';

	// Add your validation rules here
	protected $primaryKey = 'id_encuesta';

	// Don't forget to fill this array
	protected $fillable = array(
		'id_Negocio',
		'titulo',
		'estado',
		'fecha_Creacion',
		'fecha_Modificacion'
	);

}