<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{{ $title or 'Encuesta Universidad Mayor' }}}</title>

	{{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	{{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
	{{--[if lt IE 9]>
	{{ HTML::script('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}
	{{ HTML::script('//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
	<![endif]--}}

	{{-- Latest compiled and minified CSS --}}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
	{{ HTML::style('css/frontend.css') }}
	{{-- Custom style --}}
	{{ HTML::style('css/login.css') }}
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
	@yield('style')
</head>
<body>
	<header class="container login"></header>
	<div class="container content">
		<div class="row">
			@yield('content')
		</div>
	</div>
	<div class="clearfix"></div>
	<footer class="container login"></footer>
	<a href="#" id="go-top" role="button" title="Click para ir al comienzo!" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-4x"></i></a>
	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{-- Latest compiled and minified JavaScript --}}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
	{{-- Main script --}}
	{{ HTML::script('js/frontend.js') }}
	{{-- Custom script --}}
	@yield('script')
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js') }}
    {{ HTML::script('js/jquery.rut.min.js') }}
</body>
</html>
