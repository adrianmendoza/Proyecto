@section('modulo')
<div class="row">
<div class="centered six columns" id="login">
<div class="encabezado">
	Acceda al sistema
</div>
<div class="contenido">
<ul>
<li class="field">
{{ Form::text('usuario', null , array('placeholder'=>'Usuario',
	'class'=>'input wide'));
}}
	</li>
	<li class="field">
{{ Form::text('password', null , array('placeholder'=>'Contraseña',
	'class'=>'input wide'));
}}
	</li>
<li id="final">
<div class="medium primary btn">
{{ Form::submit('Ingresar');}}
 </div>
</li>

	</ul>
	
</div>

</div>

@stop