<?php

/**
 * Pregunta
 *
 * @property integer $id_pregunta
 * @property string $descripcion_1
 * @property string $descripcion_2
 * @property string $descripcion_3
 * @property string $numero_pregunta
 * @property integer $id_pregunta_padre
 * @property integer $id_tipo_respuesta
 * @property integer $id_estado
 * @property integer $id_encuesta
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereIdPregunta($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereDescripcion1($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereDescripcion2($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereDescripcion3($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereNumeroPregunta($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereIdPreguntaPadre($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereIdTipoRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereIdEncuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Pregunta whereUpdatedAt($value)
 */
class Pregunta extends \Eloquent
{

	public static $rules = array(
		'estado'        => 'required',
		'descripcion_1' => 'required',
		'descripcion_2' => 'required',
		'descripcion_3' => 'required',
	);
	protected $table = 'preguntas';

	// Add your validation rules here
	protected $primaryKey = 'id_pregunta';

	// Don't forget to fill this array
	protected $fillable = array(
		'estado',
		'descripcion_1',
		'descripcion_2',
		'descripcion_3'
	);
}

	