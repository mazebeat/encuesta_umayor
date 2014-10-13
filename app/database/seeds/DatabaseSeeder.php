<?php

class DatabaseSeeder extends Seeder
{

	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('CanalesTableSeeder');
		$this->call('EstadosTableSeeder');
		$this->call('TiposRespuestaTableSeeder');
		$this->call('NegociosTableSeeder');
		//		$this->call('BddUmayorTableSeeder');
		$this->call('EncuestasTableSeeder');
		//		$this->call('ClientesTableSeeder');
		// $this->call('ClientesRespuestaTableSeeder');
		$this->call('ExcepcionesTableSeeder');
		// $this->call('ExcepcionesClienteTableSeeder');
		$this->call('PreguntaTableSeeder');
		$this->call('PreguntasDetalleTableSeeder');
		// $this->call('RespuestaTableSeeder');
		// $this->call('RespuestasDetalleTableSeeder');
	}

}
