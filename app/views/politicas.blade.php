@extends('layouts.login')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
<div class="col-md-12">
<h1>Privacidad y uso de la Información</h1>
<p><strong>CustomerTrigger S.A.</strong> en nombre de la Universidad Mayor realiza este proceso de medición de calidad de servicio con el afán de establecer procesos de mejora y transformación del servicio que presta la Universidad Mayor a su comunidad.</p>
<p>Las preferencias registradas por Usted junto a sus datos personales se mantienen en estricta confidencialidad, son de propiedad de la Universidad Mayor y serán utilizados solo para los efectos indicados anteriormente, sin perjuicio que la Universidad pueda utilizar el conocimiento registrado para entregar información personalizada y relevante a Usted.</p>
<p>Si Usted no quiere ser sujeto de este proceso de medición, por favor haga clic {{ HTML::linkRoute('excepciones.add', 'aquí', array(), array('class' => 'text-uppercase')); }} para eliminar su registro del sistema de medición.</p>
<p>Para acceder a información de nuestra compañía y a nuestros canales de contacto, puede visitar <span class="label label-primary"><a href="http://www.customertrigger.com"><i class="fa fa-link fa-fw"></i>www.CustomerTrigger.com</a></span></p>
<ul class="list-unstyled">
<li><i class="fa fa-location-arrow fa-fw"></i>Catedral 1284, Piso 9, Santiago de Chile.</li>
<li><i class="fa fa-phone fa-fw"></i> Teléfono +562 28769500</li>
<li>CustomerTrigger S.A. ©Todos los Derechos Reservados 2014</li>
</ul>
</div>
<div class="clearfix"></div>
@stop

@section('script')
<script type="text/javascript">
</script>
@stop