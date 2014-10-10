<?php

/**
 * Cliente
 *
 * @property integer $id_cliente
 * @property integer $id_estado
 * @property integer $id_alumno
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \BddUmayor $bddumayor
 * @method static \Illuminate\Database\Query\Builder|\Cliente whereIdCliente($value)
 * @method static \Illuminate\Database\Query\Builder|\Cliente whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\Cliente whereIdAlumno($value)
 * @method static \Illuminate\Database\Query\Builder|\Cliente whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Cliente whereUpdatedAt($value)
 */
class Cliente extends \Eloquent
{
	public static $rules = array(
		'id_negocio' => 'required',
		'estado'     => 'required',
		'id_alumno'  => 'required',
	);
	protected $table = 'clientes';
	protected $primaryKey = 'id_cliente';
	protected $fillable = array(
		'id_negocio',
		'estado',
		'id_alumno',
	);

	public function bddumayor()
	{
		return $this->belongsTo('BddUmayor', 'id_alumno');
	}
}