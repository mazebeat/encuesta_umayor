<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Texto de ayuda en formularios y validaci&oacute;n en contenedor con jQuery y Validation</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
	<style type="text/css">
		*{font-family:Roboto,sans-serif;font-weight:300;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
		body{background:url(http://www.adwe.es/wp-content/themes/adwe/images/logo.png) 50% 20px no-repeat;}
		form {width:600px;margin:100px auto;box-shadow:0 0 50px rgba(0,0,0,0.50);font-size:1em}
		fieldset{padding:50px 50px 0;border:0}
		legend {text-align:center;padding:20px 0 0 0;font-size:1.5em}
		div {clear:both;padding:0 0 20px 0;position:relative}

		input[type=text],input[type=email],input[type=number] {padding:10px;border:1px solid #ccc;border-radius:4px;display:block;width:100%;font-size:1em;outline:none;transition: all 0.15s ease-in-out;}
		input:focus {box-shadow: 0 0 5px rgba(255,0,0,1);border:1px solid rgba(255,0,0,0.8);}
		input[type=submit] {padding:10px 20px;border:1px solid #666;border-radius:4px;display:table;width:auto;margin:0 auto;font-size:1em;background:#666;color:#fff}

		em.helper{z-index:1001;position:absolute;top:0;left:auto;font-size:0.90em;padding:5px;border-radius:4px 4px 0;color:#FFF;background:rgba(0,0,0,0.80);line-height:100%;text-align:center;margin:0 0 0 15px}

		em.helper:after {content: '';position: absolute;border-style: solid;border-width: 5px 5px 5px 0;border-color: transparent rgba(0,0,0,0.80);display: block;width: 0;z-index: 1;margin-top: -5px;left: -5px;top: 50%;}

		#validate{display:none}

		ul{margin:0;padding:0;list-style:none}
		ul li{color:red;margin:0}

	</style>

</head>
<body>
	<form action="" method="post" class="datos">
		<fieldset>
			<legend>Texto de ayuda en formularios y validaci&oacute;n en contenedor con jQuery y Validation.</legend>
			<div id="validate"><ul></ul></div>
			<div data-helper="Introduce tu nombre">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" class="required" title="Introduce tu nombre" disabled="disabled">
			</div>
			<div data-helper="Introduce tu correo electr&oacute;nico... No spam, I swear!">
				<label for="email">Correo Electr&oacute;nico</label>
				<input type="email" name="email" id="email" class="required email" title="Introduce tu correo electr&oacute;nico" disabled="disabled">
			</div>
			<div data-helper="Indica tu edad">
				<label for="edad">Edad</label>
				<input type="number" name="edad" id="edad" class="required number" title="Indica tu edad" disabled="disabled">
			</div>
			<div data-helper="I don't like bots!">
				<label for="codigo">Y el c&oacute;digo ultrasecreto es... <span id="secret"></span> (<a href="#" class="refresh">cambiar</a>)</label>
				<input type="text" name="codigo" id="codigo" class="required antispam" maxlength="6" minlength="6" title="Ingresa el c&oacute;digo antispam" disabled="disabled">
			</div>
			<div class="submit">
				<input type="submit" value="Simular env&iacute;o">
			</div>
		</fieldset>
	</form>
	<button class="btncls" id="obtan">Obtener ancho</button>
	<button class="btncls" id="obtal">Obtener alto</button>
	<div class="txtcls" id="anvent"> </div>
	<div class="txtcls" id="alvent"> </div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_es.js "></script>
	<script>
		function randomgen()
		{
			var rannumber='';
			for(ranNum=1; ranNum<=6; ranNum++){
				rannumber+=Math.floor(Math.random()*10).toString();
			}
			$('#secret').text(rannumber);
		}
		$(document).ready(function()
		{
			$("form div:not(.submit)").on("tap mouseenter",function() { var mensaje=$(this).data("helper"); if (mensaje) $(this).find("label").append("<em class='helper'>"+mensaje+"</em>").show(); });
			$("form div").on("mouseleave",function() { $(this).find(".helper").remove(); });

			if ($("#secret")) randomgen();

			$(".refresh").bind("click",function(e){ e.preventDefault();randomgen(); })

			var container = $('div#validate');
			$("form.datos").validate({
				errorContainer: container,
				errorLabelContainer: $("ul", container),
				wrapper: 'li'
			});

			$.validator.addMethod("antispam", function(antispam)
			{
				if ( antispam==$("#secret").text() ) return true;
			});

		});

		<!-- Funcion para obtener el Ancho(Height) --> 
		function obtenerAncho( obj, ancho ) {
			$( "#anvent" ).text( "El ancho de la " + obj + " es " + ancho + "px. (Width)" );
		}
		$("#obtan").click(function() {
			obtenerAncho( "ventana", $( window ).width() );
		});

		<!-- Funcion para obtener el Alto(Height) --> 
		function obtenerAlto( obj, alto ) {
			$( "#alvent" ).text( "El alto de la " + obj + " es " + alto + "px. (Height)" );
		}
		$( "#obtal" ).click(function() {
			obtenerAlto( "ventana", $( window ).height() );
		});
	</script>


</body>
</html>