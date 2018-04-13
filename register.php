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

  

    <section id="registro">
        <div class="contenedor">
            <h1>Nuevo Resgistro</h1>
            <form method="POST" action="register.php">
                <input type="text" name="nombre" placeholder="Nombre"  maxlength="50" required> 
                <input type="text" name="apellidos" placeholder="Apellidos" maxlength="50" required> 
                <input type="text" name="id" placeholder="ID" maxlength="12" required> 
                <input type="password" name="password" placeholder="Pass"maxlength="30" required> 
                <input type="number" name="celular" placeholder="Celular"  maxlength="10" required> 
                <input type="email" name="email" placeholder="E-mail" minlength="5" maxlength="50" required>                
                <input type="text" name="direccion" placeholder="Direccion" maxlength="100" required>
                <button type="submit" class="boton1" name="btnRegistro">Guardar</button>  
                <button type="submit" class="boton2" name="btnActualizar">Actualizar</button> 
                <button type="submit" class="boton1" name="btnHabilitar">Habilitar</button>      
        
            </form>
        </div>
    </section>



    <footer>
        <p>Desarrollo Web, Copyright &copy; 2018</p>
    </footer>
</body>   
</html>  

<?php
if(isset($_POST['btnRegistro']))
{
        require_once ('conexionbd.php');
        $conexion = conectar();
        $nombre= $_POST["nombre"];
        $apellidos=$_POST["apellidos"];;
        $id= $_POST["id"];
        $pass= $_POST["password"];
        $celular=$_POST["celular"];
        $email=$_POST["email"];
        $direccion=$_POST["direccion"];
        $estado="1";

        $sql = "INSERT INTO usuarios (nombre,apellidos,id,password,celular,email,direccion,estado)
        VALUES ('$nombre', '$apellidos', '$id', '$pass', '$celular', '$email', '$direccion','$estado')";
        if (mysqli_query($conexion,$sql)) {
                                            //echo "<br/>New record created successfully";
                                            echo '<script language="javascript">alert("Registro Exitoso");</script>'; 
                                        } 
        else {
                //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                echo '<script language="javascript">alert("Usuario No Registrado");</script>'; 
            }

        mysqli_close($conexion);
}

if(isset($_POST['btnActualizar']))
{
    require_once ('conexionbd.php');
    $conexion = conectar();
    $nombre= $_POST["nombre"];
    $apellidos=$_POST["apellidos"];;
    $id= $_POST["id"];
    $pass= $_POST["password"];
    $celular=$_POST["celular"];
    $email=$_POST["email"];
    $direccion=$_POST["direccion"];

        $sql="UPDATE usuarios SET nombre='$nombre', apellidos= '$apellidos',password='$pass',celular='$celular',email='$email',direccion='$direccion' WHERE id = '$id';";
        if (mysqli_query($conexion,$sql)) {
            //echo "<br/>New record created successfully";
            echo '<script language="javascript">alert("Registro Exitoso");</script>'; 
        } 
        else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo '<script language="javascript">alert("Usuario No Registrado");</script>'; 
        }

        mysqli_close($conexion);
}

if(isset($_POST['btnHabilitar']))
{
    require_once ('conexionbd.php');
    $conexion = conectar();
    
    $id= $_POST["id"];
    $estado="0";
    

        $sql="UPDATE usuarios SET estado='$estado' WHERE id = '$id';";
        if (mysqli_query($conexion,$sql)) {
            //echo "<br/>New record created successfully";
            echo '<script language="javascript">alert("Usuaruio No Activo");</script>'; 
        } 
        else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo '<script language="javascript">alert("Error");</script>'; 
        }

        mysqli_close($conexion);
}






?>