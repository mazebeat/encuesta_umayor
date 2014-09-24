<?php 

Validator::extend('validate_rut', 'CustomValidator@validateRut');
Validator::extend('existe_rut_cliente', 'CustomValidator@existRut');

class CustomValidator {

	public function validateRut($attribute, $value, $parameters)
	{
		if(Rut::validate(trim(Rut::format($value))))
			return true;
		else
			return false;
	}

	public function existRut($attribute, $value, $parameters)
	{
		if(Cliente::existRut($value))
			return true;
		else
			return false;
	}
}