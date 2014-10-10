<?php

/**
 * Negocio
 *
 * @property integer $id_negocio
 * @property string $descripcion
 * @property integer $id_estado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\BddUmayor[] $bddumayor
 * @method static \Illuminate\Database\Query\Builder|\Negocio whereIdNegocio($value)
 * @method static \Illuminate\Database\Query\Builder|\Negocio whereDescripcion($value)
 * @method static \Illuminate\Database\Query\Builder|\Negocio whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\Negocio whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Negocio whereUpdatedAt($value)
 */
class Negocio extends \Eloquent
{

	public static $rules = array(
		'descripcion' => 'required',
		'estado'      => 'required'
	);
	protected $table = 'negocios';

	// Add your validation rules here
	protected $primaryKey = 'id_negocio';

	// Don't forget to fill this array
	protected $fillable = array(
		'descripcion',
		'estado'
	);

	public function bddumayor()
	{
		return $this->hasMany('BddUmayor', 'id_negocio');
	}

}