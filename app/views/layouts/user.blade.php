<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
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
	{{-- iCheck.JS style --}}
    {{ HTML::style('css/skins/all.css') }}
    {{ HTML::style('css/select2.css') }}
    {{ HTML::style('css/select2-bootstrap.css') }}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
	{{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/fonts/fontawesome-webfont.woff') }}
	{{ HTML::style('css/frontend.css') }}
	{{-- Custom style --}}
	{{ HTML::style('css/custom.css') }}
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    @yield('style')

</head>
<body>
	<header class="container user"></header>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="text-center">
						<h4><span class="label label-primary"><a href="{{ URL::to('politicas') }}"><i class="fa fa-lock"></i> Politicas de Privacidad</a></span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<footer class="container user"></footer>
	<a href="#" id="go-top" role="button" title="Click para ir al comienzo!" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-4x"></i></a>
	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{-- Latest compiled and minified JavaScript --}}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
	{{-- iCheck.JS Plugin --}}
    {{ HTML::script('js/icheck.min.js') }}
    {{ HTML::script('js/select2.min.js') }}
    {{ HTML::script('js/select2_locale_es.js') }}
	{{-- Main script --}}
	{{ HTML::script('js/frontend.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js') }}
	{{-- Custom script --}}
	@yield('script')
</body>
</html>