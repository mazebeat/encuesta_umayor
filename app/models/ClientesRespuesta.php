<?php

/**
 * ClientesRespuesta
 *
 * @property integer        $id_cliente_respuesta
 * @property integer        $id_cliente
 * @property string         $ultima_respuesta
 * @property integer        $id_estado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\ClientesRespuesta whereIdClienteRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\ClientesRespuesta whereIdCliente($value)
 * @method static \Illuminate\Database\Query\Builder|\ClientesRespuesta whereUltimaRespuesta($value)
 * @method static \Illuminate\Database\Query\Builder|\ClientesRespuesta whereIdEstado($value)
 * @method static \Illuminate\Database\Query\Builder|\ClientesRespuesta whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\ClientesRespuesta whereUpdatedAt($value)
 */
class ClientesRespuesta extends \Eloquent
{

	protected $table = 'clientes_respuesta';
	protected $primaryKey = 'id_cliente_respuesta';

	// Add your validation rules here
	//	public static $rules  = array(
	// 'title'            => 'required'
	//	);

	// Don't forget to fill this array
	protected $fillable = array(
		'id_cliente',
		'ultima_respuesta',
		'id_estado'
	);

	public static function hasRequests()
	{
		if(!Auth::guest()) {
			$count = ClientesRespuesta::whereIdCliente(array(Auth::user()->id_cliente))->whereRaw('MONTH(ultima_respuesta) = MONTH(CURRENT_DATE) AND YEAR(ultima_respuesta) = YEAR(CURRENT_DATE)')->orderBy('id_cliente_respuesta', 'DESC')->count(array('id_cliente'));
			if($count) {
				return true;
			}
		}

		return false;
	}

	protected static function boot()
	{
		parent::boot();

		static::saving(function ($model) {
			if(!Auth::guest() && Session::get('ya_respondio', false)) {
				ClientesRespuesta::whereIdCliente(array(Auth::user()->id_cliente))->whereRaw('MONTH(ultima_respuesta) = MONTH(CURRENT_DATE) AND YEAR(ultima_respuesta) = YEAR(CURRENT_DATE)')->whereIdEstado(15)->update(array('id_estado' => 16));
			}
		});
	}
}
