<?php
 $usuarios = array(
	1 => array('ci' => 15531,
				   'nombre' =>  'Juan Perez',
				   'clave' => 15531,
				   'login' => '15531JP',
				   'color' => ''),
	2 => array('ci' => 34312,
				   'nombre' =>  'Pablo Ma',
				   'clave' => 34312,
				   'login' => '34312PM',
				   'color' => ''),
	3 => array('ci' => 75323,
				   'nombre' =>  'Ana BB',
				   'clave' => 75323,
				   'login' => '75323AB',
				   'color' => ''),		 
	   
			   );

class Inicio extends CI_Controller {

	public function index()
	{   
		//Datos de los usuarios
		global $usuarios;

		$error=''; // Variable para almacenar el mensaje de error
		
		if (isset($_POST["Ingreso"])) {

			// Guardamos los datos enviados por el usuario
			// en las siguientes variables 
			$usuario=$_POST["Usuario"]; 
			$clave=$_POST["Clave"];

			//Creamos variables donde se guardaran los resultados
			// de la busqueda en el array de usuarios 
			$resultado= FALSE;
			$id= 0;

			//recorremos el array de usuarios y consultamos si existen esos datos
			for ($i=1; $i <= count($usuarios); $i++) { 
				if ($usuarios[$i]['login']==$usuario and $usuarios[$i]['clave']==$clave ) {
					$resultado=TRUE;
					$id = $i;
				}
			}

			// Verificamos si encontro al usuario
			// Si el resultado es falso entonces no existe el usuario y enviamos el error 
			if ($resultado) {

				//Creamos las variables de sesion con los datos 
				// que necesitamos del usuario
				$_SESSION['id'] = $id;
				$_SESSION['ci'] = $usuarios[$id]['ci'];
				$_SESSION['nombre'] = $usuarios[$id]['nombre'];
				$_SESSION['color'] = $usuarios[$id]['color'];

				//Redirigimos a su perfil
				redirect("inicio/perfil", "refresh");
			}
			else {
				$error = "El usuario o contraseña es incorrecto, vuelva a intentarlo ";
			}

		}
		//Cargado de la vista y enviado de datos	
		$datos["error"] = $error;
		$this->load->view('login', $datos);
	}

	public function perfil()
	{	
		//Datos de los usuarios
		global $usuarios;

		//Guardamos su id del actual usuario
		 $id = $_SESSION['id'];
		
		 if (isset($_SESSION['ci'])) {
			 //Consultamos si el usuario preiono el boton de cambiar color
			 if(isset($_POST['cambio'])){
				 //Guardamos su nuevo color
				 $Ncolor=$_POST["Color"];
				
				 //Actualizamos su nuvo color
				 $usuarios[$id]['color'] = $Ncolor;
			 }
			 
		  }
		 else{
			 //Redirigimos al index si no es ta logeado
			 redirect("inicio");
		 }
		$datos = array(
			'nombre' => $_SESSION['nombre'],
		    'nomP' => explode(" ",$_SESSION['nombre']),
		    'color' => $usuarios[$id]['color']
		);
		 $this->load->view('perfil',$datos);
	}
	public function salir()
	{	
		//Setea y destruye la sesion
		unset($_SESSION);
		session_destroy();
		redirect("inicio","refresh");
	}
}