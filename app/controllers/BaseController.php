<?php

class BaseController extends Controller
{

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if(!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}
	}

	protected function verify_login()
	{
		if(!(Session::has('user_id') && Session::get('user_id') != null)) {
			$msg = array(
				'data'    => array(
					'type'  => 'danger',
					'title' => 'Atención',
					'text'  => 'Usuario no logueado'
				),
				'options' => array(
					'left' => HTML::link(URL::previous(), 'Volver', array('class' => 'col-md-3 btn btn-default btn-lg pull-right text-uppercase'))
				)
			);
			Session::flush();

			return Redirect::route('home.index');
		}
	}

}
