<?php

/**
 * Estado
 *
 * @property integer $id_estado
 * @property string $tipo
 * @property string $descripcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Estado whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\Estado whereTipo($value)
 * @method static \Illuminate\Database\Query\Builder|\Estado whereDescripcion($value)
 * @method static \Illuminate\Database\Query\Builder|\Estado whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Estado whereUpdatedAt($value)
 */
class Estado extends \Eloquent
{

	public static $rules = array(// 'title'            => 'required'
	);
	protected $table = 'estados';

	// Add your validation rules here
	protected $primaryKey = 'id_estado';

	// Don't forget to fill this array
	protected $fillable = array();

}