<?php

class CanalesTableSeeder extends Seeder
{

	public function run()
	{
		Canal::create([
			'codigo'      => 'em',
			'descripcion' => 'Emails'
		]);
		Canal::create([
			'codigo'      => 'fa',
			'descripcion' => 'Facebook'
		]);
		Canal::create([
			'codigo'      => 'ba',
			'descripcion' => 'Banner portal estudiantil'
		]);
		Canal::create([
			'codigo'      => 'ap',
			'descripcion' => 'APP InfoUMayor'
		]);
		Canal::create([
			'codigo'      => 'ca',
			'descripcion' => 'Call center'
		]);
		Canal::create([
			'codigo'      => 'ce',
			'descripcion' => 'Centros de atención presencial'
		]);
	}

}