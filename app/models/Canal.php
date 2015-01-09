<?php

/**
 * Canal
 *
 * @property integer $id_canal
 * @property string $codigo
 * @property string $descripcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Canal whereIdCanal($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereCodigo($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereDescripcion($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereUpdatedAt($value)
 */
class Canal extends \Eloquent
{
	protected $table = 'canales';

	// Add your validation rules here
	protected $primaryKey = 'id_canal';

	// Don't forget to fill this array
	protected $fillable = array(
		'codigo',
		'descripcion'
	);

}