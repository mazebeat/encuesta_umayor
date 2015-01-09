<?php

/**
 * PreguntasDetalle
 *
 * @property integer $id_pregunta_detalle
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 * @property integer $id_estado
 * @property integer $id_encuesta
 * @property integer $id_pregunta
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereIdPreguntaDetalle($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereDescripcion($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereFechaCreacion($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereFechaModificacion($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereIdEncuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereIdPregunta($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\PreguntasDetalle whereUpdatedAt($value)
 */
class PreguntasDetalle extends \Eloquent
{

	protected $table = 'preguntas_detalle';

	// Add your validation rules here
	protected $primaryKey = 'id_pregunta_detalle';

	// Don't forget to fill this array
	protected $fillable = array();

}