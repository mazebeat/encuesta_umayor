<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
	/**
	 * Default preparation for each test
	 */
	public function setUp()
	{
		parent::setUp();

		$this->prepareForTests();
	}

	/**
	 * Migrates the database and set the mailer to 'pretend'.
	 * This will cause the tests to run quickly.
	 */
	public function prepareForTests()
	{
		Artisan::call('migrate');
		Artisan::call('db:seed');
		$this->migrated = true;
	}

	/**
	 * Creates the application.
	 *
	 * @return Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__ . '/../../start.php';
	}
}