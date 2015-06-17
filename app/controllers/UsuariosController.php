<?php  
	class UsuariosController extends BaseController {

		protected $layout = 'layouts.master';

		function acceder(){

			$this->layout ->modulo = View::make('usuarios.acceder');
		}

	}



?>