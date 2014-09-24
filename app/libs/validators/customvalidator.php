<?php

	use Illuminate\Validation\Validator as IlluminateValidator;
	use Freshwork\ChileanBundle\Validations\Rut;
	use Freshwork\ChileanBundle\Exceptions\InvalidFormatException;


	/**
	 * Class CustomValidator
	 */
	class CustomValidator extends IlluminateValidator
	{

		/**
		 * @var array
		 */
		private $_custom_messages = array(
			"rut"      => "El :attribute no es correcto.",
			"existRut" => "El :attribute ingresado no existe.",
		);

		/**
		 * @param \Symfony\Component\Translation\TranslatorInterface $translator
		 * @param array                                              $data
		 * @param array                                              $rules
		 * @param array                                              $messages
		 * @param array                                              $customAttributes
		 */
		public function __construct($translator, $data, $rules, $messages = array(), $customAttributes = array())
		{
			parent::__construct($translator, $data, $rules, $messages, $customAttributes);
			$this->_set_custom_stuff();
		}

		/**
		 * Setup any customizations etc
		 *
		 * @return void
		 */
		protected function _set_custom_stuff()
		{
			//setup our custom error messages
			$this->setCustomMessages($this->_custom_messages);
		}

		/**
		 * @param $attribute
		 * @param $value
		 * @param $parameters
		 *
		 * @return bool
		 */
		public static function validateRut($attribute, $value, $parameters)
		{
			try {
				Rut::$use_exceptions = false;
				return Rut::isValid($value);
			} catch(InvalidFormatException $e) {
				return false;
			}
		}

		/**
		 * @param $attribute
		 * @param $value
		 * @param $parameters
		 *
		 * @return bool
		 */
		public static function validateExistRut($attribute, $value, $parameters)
		{
			if(Cliente::existRut($value))
				return true; else
				return false;
		}
	}