<?php

/**
 * ExcepcionesCliente
 *
 * @property integer $id_excepcion_cliente
 * @property string $fecha
 * @property integer $id_cliente
 * @property integer $id_excepcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\ExcepcionesCliente whereIdExcepcionCliente($value)
 * @method static \Illuminate\Database\Query\Builder|\ExcepcionesCliente whereFecha($value)
 * @method static \Illuminate\Database\Query\Builder|\ExcepcionesCliente whereIdCliente($value)
 * @method static \Illuminate\Database\Query\Builder|\ExcepcionesCliente whereIdExcepcion($value)
 * @method static \Illuminate\Database\Query\Builder|\ExcepcionesCliente whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\ExcepcionesCliente whereUpdatedAt($value)
 */
class ExcepcionesCliente extends \Eloquent
{

	public static $rules = array(// 'title'            => 'required'
	);
	protected $table = 'excepciones_cliente';

	// Add your validation rules here
	protected $primaryKey = 'id_excepcion_cliente';

	// Don't forget to fill this array
	protected $fillable = array();

}