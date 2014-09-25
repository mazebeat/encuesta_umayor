<?php

/**
 * Canal
 *
 * @property integer $id_canal
 * @property string $descripcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Canal whereIdCanal($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereDescripcion($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Canal whereUpdatedAt($value)
 */
class Canal extends \Eloquent {

	protected $table      = 'canales';
	protected $primaryKey = 'id_canal';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array('codigo', 'descripcion');

}