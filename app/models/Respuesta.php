<?php

/**
 * Respuesta
 *
 * @property integer $id_respuesta
 * @property string $fecha
 * @property integer $id_estado
 * @property integer $id_canal
 * @property integer $id_encuesta
 * @property integer $id_pregunta
 * @property integer $id_pregunta_detalle
 * @property integer $id_cliente
 * @property integer $id_cliente_respuesta
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereFecha($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdCanal($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdEncuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdPregunta($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdPreguntaDetalle($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdCliente($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereIdClienteRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Respuesta whereUpdatedAt($value)
 */
class Respuesta extends \Eloquent
{
	protected $table = 'respuestas';

	// Add your validation rules here
	protected $primaryKey = 'id_respuesta';

	// Don't forget to fill this array
	protected $fillable = array(
		'fecha',
		'id_estado',
		'id_canal',
		'id_encuesta',
		'id_pregunta',
		'id_pregunta_detalle',
		'id_cliente',
		'id_cliente_respuesta'
	);
}