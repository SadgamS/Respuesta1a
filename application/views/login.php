<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/estilos.css">
    <title>Login</title>
</head>
<body >
    <!-- Titulo de la pagina -->
    <div class="titulo">
        <h1>Inf-324 UMSA</h1>
    </div>
    <!-- Contenedor de elementos -->
     <div class="contenedor">
        <!-- Foto de login  -->
        <div class="foto">
            <img src="<?php echo  base_url(); ?>assets/img/user.png" alt="usuarioDefecto">
        </div>
        <h1>Iniciar Sesión</h1>

        <!-- Formulario  -->
        <form action="" method="post">
           
            <input class="entradas" name="Usuario" type="text" placeholder="Ingrese su Usuario" required>
            <input class="entradas" name="Clave" type="password" placeholder="Ingrese su Contraseña" required>
            <input class="btn-ing" name="Ingreso" type="submit" value="Ingresar">
        </form>
        <!-- Mensajes para el usuario -->
        <p>
            Tu usuario es tu ci seguido de la inicial de tu nombre y
            apellido en mayuscula sin espacios
        </p>
        <p>
            Tu contraseña es tu ci
        </p>

        <!-- Mensaje de Error al validar usuario -->
		<?php
            // Verificamos si el mensaje de error tiene algo
            //si es asi lo mostramos 
            if ($error != "")  {
                echo  '<span>'. $error. '</span>';
            }
        
        ?>
       
		
     </div>

</body>
</html>