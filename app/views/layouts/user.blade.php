<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{{ $title or 'Encuesta Universidad Mayor' }}}</title>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	{{ HTML::script('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}
	{{ HTML::script('//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
	<![endif]-->

	{{-- Latest compiled and minified CSS --}}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
	{{ HTML::style('css/frontend.min.css') }}
	{{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css') }}
    {{ HTML::style('css/skins/all.css') }}
    {{ HTML::style('css/select2.min.css') }}
    {{ HTML::style('css/select2-bootstrap.min.css') }}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
	@yield('style')

</head>
<body>
	<header class="container user">
		<div class="row">
    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    			{{--{{ HTML::image('image/v3/header-2.png', null, array('class' => 'img-responsive')) }}--}}
    		</div>
    	</div>
	</header>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
		@include('layouts.politicas_tmp')
	</div>
	<div class="clearfix"></div>
	<footer class="container user">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{--{{ HTML::image('image/v3/footer-2.png', null, array('class' => 'img-responsive')) }}--}}
			</div>
		</div>
	</footer>
	<a href="#" id="go-top" role="button" title="Click para ir al comienzo!" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-3x"></i></a>
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js') }}
    {{ HTML::script('js/icheck.min.js') }}
    {{ HTML::script('js/select2.min.js') }}
    {{ HTML::script('js/select2_locale_es.js') }}
	{{ HTML::script('js/frontend.min.js') }}
	@yield('script')
</body>
</html>