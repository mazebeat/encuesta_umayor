<?php

	/**
	 * Cliente
	 *
	 * @property integer         $id_cliente
	 * @property integer         $id_estado
	 * @property integer         $id_negocio
	 * @property integer         $bdd_umayor_id_alumno
	 * @property \Carbon\Carbon  $created_at
	 * @property \Carbon\Carbon  $updated_at
	 * @property-read \Test      $test
	 * @property-read \BddUmayor $bddumayor
	 * @method static \Illuminate\Database\Query\Builder|\Cliente whereIdCliente($value)
	 * @method static \Illuminate\Database\Query\Builder|\Cliente whereIdEstado($value)
	 * @method static \Illuminate\Database\Query\Builder|\Cliente whereIdNegocio($value)
	 * @method static \Illuminate\Database\Query\Builder|\Cliente whereBddUmayorIdAlumno($value)
	 * @method static \Illuminate\Database\Query\Builder|\Cliente whereCreatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|\Cliente whereUpdatedAt($value)
	 */
	class Cliente extends \Eloquent
	{
		public static $rules = array(
			'id_negocio'           => 'required',
			'estado'               => 'required',
			'bdd_umayor_id_alumno' => 'readdir()quired',
		);
		protected $table = 'clientes';
		protected $primaryKey = 'id_cliente';
//		protected $fillable = array(
//			'id_negocio',
//			'estado',
//			'bdd_umayor_id_alumno',
//			'excepciones_clientes_clientes_id_negocio',
//			'excepciones_clientes_clientes_id_cliente',
//			'excepciones_clientes_clientes_bdd_umayor_id_alumno',
//		);

		public function bddumayor()
		{
			return $this->belongsTo('BddUmayor', 'bdd_umayor_id_alumno');
		}

	}