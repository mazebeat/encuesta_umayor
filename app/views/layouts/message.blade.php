<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{{ $title or 'DEMO' }}}</title>

	{{-- Latest compiled and minified CSS --}}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
	{{-- Custom style --}}
	{{ HTML::style('css/custom.css') }}
	@yield('style')

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ HTML::script('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}
    {{ HTML::script('//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
    <![endif]-->
</head>
<body>
	<header class="container">
	</header>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	<footer class="container">
		<p>Copyright 2014 Intelidata - Universidad Mayor</p>
	</footer>
	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{-- Latest compiled and minified JavaScript --}}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
    {{-- Custom script --}}
 	@yield('script')
</body>
</html>