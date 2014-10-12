@extends('layouts.login')

@section('content')
<div class="col-md-12">
	<h1><strong>Privacidad y uso de la Información</strong></h1>
	<p>CustomerTrigger S.A. en nombre de la Universidad Mayor realiza este proceso de medición de calidad de servicio.</p>
	<p>Las preferencias registradas por usted junto a sus datos personales se mantienen en estricta confidencialidad, son de propiedad de la Universidad Mayor y serán utilizados solo para los efectos indicados anteriormente, sin perjuicio que la Universidad pueda utilizar el conocimiento registrado para entregar información personalizada y relevante a usted.</p>
	<p>Si usted no quiere ser sujeto de este proceso de medición, por favor haga clic {{ HTML::link('#', 'aquí', array('class' => '',  'data-toggle' => 'modal', 'data-target' => '#modal1')); }} para eliminar su registro del sistema de medición.</p>
	<p>Para acceder a información de nuestra compañía y a nuestros canales de contacto, puede visitar <a href="http://www.customertrigger.com"><i class="fa fa-link fa-fw"></i>www.CustomerTrigger.com</a></p>
	<ul class="list-unstyled">
		<li><i class="fa fa-location-arrow fa-fw"></i>Catedral 1284, Piso 9, Santiago de Chile.</li>
		<li><i class="fa fa-phone fa-fw"></i> Teléfono +562 28769500</li>
		<li>CustomerTrigger S.A. ©Todos los Derechos Reservados 2014</li>
	</ul>
</div>
<div class="clearfix"></div>
{{ HTML::link(URL::previous(), 'VOLVER ATRÁS', array('class' => 'col-xs-4 col-sm-4 col-md-2 col-lg-2 text-uppercase btn btn-hot btn-md')) }}

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1lavel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="modal1lavel">Atención!</h4>
			</div>
			<div class="modal-body">
				<p>¿Estas seguro que deseas ser eliminado de este proceso de medición?</p>
			</div>
			<div class="modal-footer">
				<ul class="list-inline">
					<li>
						{{ Form::button('NO', array('class' => 'btn btn-hot btn-md', 'data-dismiss' => 'modal')) }}
					</li>
					<li>
						{{ Form::button('SÍ', array('class' => 'btn btn-sky btn-md', 'id' => 'modal1_ok', 'data-toggle' => 'modal', 'data-target' => '#modal2')) }}
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2lavel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h3>Tú solicitud ha sido registrada, Gracias por tu Tiempo. <i class="fa fa-spinner fa-spin"></i></h3>
			</div>
		</div>
	</div>
</div>
@stop