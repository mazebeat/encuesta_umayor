<?php

Event::listen('canal', function ($canal) {
	Session::forget('canal');
	$c = Canal::whereCodigo(array(array_get($canal, 'canal')))->first(array('id_canal'));
	if($c != '' && $c != null) {
		Session::put('canal', array_get($c, 'id_canal'));
	}
});

Event::listen('carga_cliente', function ($rut) {
	$alumno  = BddUmayor::whereRut(array($rut))->orderBy('id_alumno', 'DESC')->first(array(
		'id_alumno',
		'nombres'
	));
	$cliente = Cliente::whereIdAlumno(array($alumno->id_alumno))->whereIdEstado(array('2'))->first(array('id_cliente'));

	Session::put('user_id', $cliente->id_cliente);
	Session::put('user_name', $alumno->nombres);

	unset($alumno);
	unset($cliente);
});

Event::listen('ya_respondio', function () {
	if(ClientesRespuesta::hasResquests()) {
		$resp = ClientesRespuesta::whereIdCliente(array(Session::get('user_id')))->whereRaw('MONTH(ultima_respuesta) = MONTH(CURRENT_DATE) AND YEAR(ultima_respuesta) = YEAR(CURRENT_DATE)')->orderBy('id_cliente_respuesta', 'DESC')->first(array('ultima_respuesta'));
		if(!is_null($resp->ultima_respuesta)) {
			Session::put('ya_respondio', true);

			return $last_responsed = new Carbon($resp->ultima_respuesta);
		}
		unset($resp);
	}

	return null;
});

Event::listen('form_error', function () {
	$msg = array(
		'data' => array(
			'type' => 'danger',
			'text' => 'Error al enviar el formulario'
		)
	);

	return Redirect::back()->with('msg', $msg)->withInput(Input::all());
});