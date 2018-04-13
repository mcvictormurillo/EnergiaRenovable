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

    <section id="boletin">
        <div class="contenedor">
            <h1>Únete al Cambio!!</h1>
            <form method="POST" action="contactos.php">
                
                <button type="submit" class="boton2" name="btnConsultar">Consultar</button>
        
            </form>
        </div>

    </section>

   

    <footer>
        <p>Desarrollo Web, Copyright &copy; 2018</p>
    </footer>
</body>   
</html>  

<?php


if(isset($_POST['btnConsultar']))
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


?>