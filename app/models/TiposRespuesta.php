<?php

/**
 * TiposRespuesta
 *
 * @property integer $id_tipo_respuesta
 * @property string $tipo
 * @property string $opciones
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\TiposRespuesta whereIdTipoRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\TiposRespuesta whereTipo($value)
 * @method static \Illuminate\Database\Query\Builder|\TiposRespuesta whereOpciones($value)
 * @method static \Illuminate\Database\Query\Builder|\TiposRespuesta whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\TiposRespuesta whereUpdatedAt($value)
 */
class TiposRespuesta extends \Eloquent
{

	protected $table = 'tipos_respuesta';

	// Add your validation rules here
	protected $primaryKey = 'id_tipo_respuesta';

	// Don't forget to fill this array
	protected $fillable = array();

}