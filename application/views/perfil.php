<?php   
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/estilos.css">
    <title>Perfil de <?php echo $nombre;?></title>
</head>
<!-- Color de fondo dependiendo del usuario -->
<body style="background-color: <?php echo $color ?> ">
    <div class="contenedor">
        <h1> Bienvenido <?php echo $nombre?> </h1>
        <div class="foto">
            <!-- Imagen persunalizada del usuario -->
            <img class="<?php echo $nomP[0]?>"  src="img/user.png"  />
        </div>

        <h4> Eliga un color de su agrado</h4>
        <!-- Formulario para cambiar su color -->
        <form method="post" >
            <select class="selec" name="Color" id="">
            <?php
                // Consulta que color esta activo 
                switch ($color) {
                    case 'blue':
                        echo '   <option value="">Color por defecto</option>
                                    <option value="blue" selected>Azul</option>
                                    <option value="red">Rojo</option>
                                    <option value="green">Verde</option>
                                    <option value="yellow">Amarrillo</option>';
                        break;
                    case 'red':
                        echo '   <option value="">Color por defecto</option>
                                    <option value="blue" >Azul</option>
                                    <option value="red" selected>Rojo</option>
                                    <option value="green">Verde</option>
                                    <option value="yellow">Amarrillo</option>';
                        break;
                    case 'green':
                        echo '   <option value="">Color por defecto</option>
                                    <option value="blue" >Azul</option>
                                    <option value="red" >Rojo</option>
                                    <option value="green" selected>Verde</option>
                                    <option value="yellow">Amarrillo</option>';
                                    
                        break;
                    case 'yellow':
                        echo '   <option value="">Color por defecto</option>
                                    <option value="blue" >Azul</option>
                                    <option value="red">Rojo</option>
                                    <option value="green">Verde</option>
                                    <option value="yellow" selected>Amarrillo</option>';
                        break;
                    
                    default:
                    echo '   <option value="">Color por defecto</option>
                                <option value="blue">Azul</option>
                                <option value="red">Rojo</option>
                                <option value="green">Verde</option>
                                <option value="yellow">Amarrillo</option>';
                        break;
                }
            ?>
             
            
            </select>
            <input class="btn-cam" type="submit" name="cambio" value="Cambiar">
        </form>
        <!-- boton para cerrar la sesion  -->
        <a class="btn-ing" href="salir">Cerrar Sesion</a>
        

    </div>
</body>
</html>