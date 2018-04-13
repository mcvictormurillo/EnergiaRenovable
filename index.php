<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio|IV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=desvice-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/styles.css">
</head> 
<body>
    <header>
        <div class="contenedor">
            <div id="marca">
                <h1>
                    <span class="resaltado">Renewable Energy </span>
                    
                </h1>
            </div>
            <nav>
                <ul>
                <li class="actual"><a href="index.php">Inicio</a></li>
                <li ><a href="register.php">Nosotros</a></li>
                <li ><a href="contactos.php">Contactos</a></li>
                <li ><a href="index.php">Servicios</a></li>
                                        
                </ul>
            </nav>
        </div>
    </header>

    <section id="cabecera">
        <div class="contenedor">
            <h1>Energías Renovables</h1>
            <h3>El sol provee 1400 veces más energía en un día de la que consumimos en un año
            <br>Vivek Wadhwa
            </h3>
            <p>Se Diferente!</p>
        </div>

    </section>

    <section id="boletin">
        <div class="contenedor">
            <h1>Únete al Cambio!!</h1>
            <form method="POST" action="index.php">
                <input type="text" name="username" placeholder="User-Name" >
                
                <input type="password" name="pass" placeholder="Password">
                <button type="submit" class="boton1" name="btnInicioSesion">Inicia Sesión</button>
                <button type="submit" class="boton2" name="btnRegistrar">Registrate</button>
                <button type="submit" class="boton2" name="btnConsultar">Consultar</button>
        
            </form>
        </div>

    </section>
    <section id="cajas">
        <div class="contenedor">
            <div class="caja">
                <img src="img/cerebro.png" alt="">
                <h3>¿QUIENES SOMOS?</h3>
                <p>Somos estudiantes del programa de Ingeniería en Eectrónica y Telecomunicaciones que proponemos una solución factible: utilizar sistemas de iluminación  con paneles solares, los cuales no necesitan una infraestructura eléctrica cableada extendida, garantizando su ubicación en diferentes zonas. En este sentido, se expondrán y analizarán los diferentes requerimientos para la creación de un sistema de iluminación que utilice como fuente de alimentación la energía solar.
                </p>
            </div>

            <div class="caja">
                <img src="img/pasos.png" alt="">
                <h3>SERVICIOS</h3>
                <p>servicio luz (día- noche)<br>
                   Climatización HORA PM (si hay neblina )<br>
                   Porcentaje de iluminación según la intensidad lumínica (ahorro eficiente energía )<br>
                   Datos registrados en una base de datos del sistema(estadísticos)<br>
                   servicios página web (mostrar datos en tiempo real)<br>
                    </p>
            </div>

            <div class="caja">
                <img src="img/objetivo.png" alt="">
                <h3>INFRAESTRUCTURA</h3>
                <p>Celda Fotovoltaica<br>
                    Regulador de tensión<br>
                    Batería recargable<br>
                    Tarjeta NodeMCU <br>
                </p>
            </div>
        </div>
    </section>

    <footer>
        <p>Desarrollo Web, Copyright &copy; 2018</p>
    </footer>
</body>   
</html>  

<?php



if(isset($_POST['btnInicioSesion']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        
        $sql= "SELECT * FROM usuarios WHERE 1;";
        if ($result = mysqli_query($conexion,$sql)) {
                                                        while($consulta = mysqli_fetch_array($result))
                                                        {
                                                            echo"
                                                            <section id='tabla'>
                                                                <table border-collapse= 'collapse';
                                                                width='100%'; color='red'>
                                                                <thead >
                                                                    <tr>    
                                                                        <th>Nombre</th>
                                                                        <th>Apellidos</th>
                                                                        <th>id</th>
                                                                        <th>celular</th>
                                                                        <th>email</th>
                                                                        <th>direccion</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>    
                                                                        <td>".$consulta['nombre']."</td>
                                                                        <td>".$consulta['apellidos']."</td>
                                                                        <td>".$consulta['id']."</td>
                                                                        <td>".$consulta['celular']."</td>
                                                                        <td>".$consulta['email']."</td>
                                                                        <td>".$consulta['direccion']."</td>
                                                                                    
                                                                    </tr>
                                                                    </tbody>
                                                                </table> 
                                                                
                                                                <p></p> 
                                                            </section>  
                                                            ";               
                                                        }       
                                                    } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        } 
        mysqli_close($conexion);      
}

if(isset($_POST['btnRegistrar'])){

$url="http://localhost:8080/laboratorio-IV/register.php"; 
echo "<SCRIPT>window.location='$url';</SCRIPT>";

}

?>