<?php

/**
 * Excepcion
 *
 * @property integer $id_excepcion
 * @property string $descripcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Excepcion whereIdExcepcion($value)
 * @method static \Illuminate\Database\Query\Builder|\Excepcion whereDescripcion($value)
 * @method static \Illuminate\Database\Query\Builder|\Excepcion whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Excepcion whereUpdatedAt($value)
 */
class Excepcion extends \Eloquent
{

	public static $rules = array(// 'title'            => 'required'
	);
	protected $table = 'excepciones';

	// Add your validation rules here
	protected $primaryKey = 'id_excepcion';

	// Don't forget to fill this array
	protected $fillable = array();

}