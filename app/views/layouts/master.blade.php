<!DOCTYPE html>
<html>
<head>
	<title>Iniciar</title>
	{{ HTML::style('css/gumby.css'); }}
	{{ HTML::style('css/main.css'); }}
	{{ HTML::script('js/jquery.min.js'); }}
	{{ HTML::script('js/modernizr-2.6.2.min.js'); }}
	{{ HTML::script('js/gumby.js'); }}
	{{ HTML::script('js/gumby.init.js'); }}
	{{ HTML::script('js/gumby.toggleswitch.js'); }}
	{{ HTML::script('js/plugins.js'); }}


</head>
<body>
<div class="navbar" id="navegacion">
<ul style="float:right">
	<li>
		<a href="{{ url('/acceder') }}"><span>Acceder</span><i class="icon-user"></i></a>
	</li>
	<li>
		<a href="{{ url('/registrar') }}"><span>Registrarse</span><i class="icon-plus"></i></a>
	</li>

</ul>
</div>
@yield('modulo')
	


<footer></footer>
</body>
</html>