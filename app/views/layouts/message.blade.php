<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{{ $title or 'Encuesta Universidad Mayor' }}}</title>

	{{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	{{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
	{{--[if lt IE 9]>
	{{ HTML::script('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}
	{{ HTML::script('//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
	<![endif]--}}

	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
	{{ HTML::style('css/frontend.css') }}
	{{ HTML::style('css/login.css') }}
	@yield('style')
</head>
<body>
	<header class="container login"></header>
	<div class="container content">
		<div class="row">
			@yield('content')
		</div>
	</div>
	@if(Session::has('user_id'))
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="text-center politicas">
					<h4><span class="label label-primary"><a href="{{ URL::to('politicas') }}"><i class="fa fa-lock"></i> Politicas de Privacidad</a></span></h4>
				</div>
			</div>
		</div>
	</div>
	@endif
	<div class="clearfix"></div>
	<footer class="container login"></footer>
	<a href="#" id="go-top" role="button" title="Click para ir al comienzo!" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-3x"></i></a>
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
	{{ HTML::script('js/frontend.js') }}
	@yield('script')
</body>
</html>