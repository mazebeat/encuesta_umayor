<?php


/**
 * BddUmayor
 *
 * @property integer                                                  $id_alumno
 * @property string                                                   $facultad
 * @property string                                                   $escuela
 * @property string                                                   $carrera
 * @property string                                                   $jornada
 * @property string                                                   $sede
 * @property string                                                   $campus
 * @property string                                                   $rut
 * @property string                                                   $apellido_paterno
 * @property string                                                   $apellido_materno
 * @property string                                                   $nombres
 * @property string                                                   $sexo
 * @property integer                                                  $año_ingreso_1año_carrera
 * @property integer                                                  $año_ingreso_carrera
 * @property integer                                                  $año_egreso_plan_regular
 * @property string                                                   $fecha_registro
 * @property \Carbon\Carbon                                           $created_at
 * @property \Carbon\Carbon                                           $updated_at
 * @property-read \Negocio                                            $negocio
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cliente[] $clientes
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereIdAlumno($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereFacultad($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereEscuela($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereCarrera($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereJornada($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereSede($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereCampus($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereRut($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereApellidoPaterno($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereApellidoMaterno($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereNombres($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereSexo($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereAñoIngreso1añoCarrera($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereAñoIngresoCarrera($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereAñoEgresoPlanRegular($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereFechaRegistro($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\BddUmayor whereUpdatedAt($value)
 */
class BddUmayor extends \Eloquent
{
	public static $rules = array(
		'id_negocio'               => 'required',
		'facultad'                 => 'required',
		'escuela'                  => 'required',
		'carrera'                  => 'required',
		'jornada'                  => 'required',
		'sede'                     => 'required',
		'campus'                   => 'required',
		'rut'                      => 'required',
		'apellido_paterno'         => 'required',
		'apellido_materno'         => 'required',
		'nombre'                   => 'required',
		'año_ingreso_1año_carrera' => 'required',
		'año_ingreso_carrera'      => 'required',
		'año_egreso_plan_regular'  => 'required',
		'fecha_registro'           => 'required',
	);
	protected $table = 'bdd_umayor';
	protected $primaryKey = 'id_alumno';
	protected $fillable = array(
		'facultad',
		'escuela',
		'carrera',
		'jornada',
		'sede',
		'campus',
		'rut',
		'apellido_paterno',
		'apellido_materno',
		'nombre',
		'año_ingreso_1año_carrera',
		'año_ingreso_carrera',
		'año_egreso_plan_regular',
		'fecha_registro',
	);

	public function negocio()
	{
		return $this->belongsTo('Negocio', 'id_negocio');
	}

	public function clientes()
	{
		return $this->hasMany('Cliente', 'id_alumno');
	}

	public function existRut($rut)
	{
		$a = $this->whereRut($rut)->count('id_alumno');
		if($a > 0) {
			return true;
		}

		return false;
	}
}