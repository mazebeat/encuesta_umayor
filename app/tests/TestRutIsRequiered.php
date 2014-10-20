<?php

/**
 * Created by PhpStorm.
 * User: DIEGOPC
 * Date: 13-10-2014
 * Time: 17:58
 */
class TestRutIsRequiered extends TestCase
{
	public function setUp()
	{
		parent::setUp(); // Don't forget this!

		$this->prepareForTests();
	}

	public function test()
	{
		//        $this->client->request('GET', '/cr');
		Artisan::call('migrate');
		Mail::pretend(true);
	}
}
