<?php

/**
 * RespuestasDetalle
 *
 * @property integer $id_respuesta_detalle
 * @property integer $valor1
 * @property string $valor2
 * @property integer $id_respuesta
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\RespuestasDetalle whereIdRespuestaDetalle($value)
 * @method static \Illuminate\Database\Query\Builder|\RespuestasDetalle whereValor1($value)
 * @method static \Illuminate\Database\Query\Builder|\RespuestasDetalle whereValor2($value)
 * @method static \Illuminate\Database\Query\Builder|\RespuestasDetalle whereIdRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\RespuestasDetalle whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\RespuestasDetalle whereUpdatedAt($value)
 */
class RespuestasDetalle extends \Eloquent
{
	protected $table = 'respuestas_detalle';

	// Add your validation rules here
	protected $primaryKey = 'id_respuesta_detalle';

	// Don't forget to fill this array
	protected $fillable = array(
		'valor1',
		'valor2',
		'id_respuesta'
	);

}