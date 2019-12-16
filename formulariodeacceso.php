<?php
session_start();
if (isset($_POST['enviar'])){
    $_SESSION['nombredos']=$_POST['nombre'];
    $_SESSION['clavedos']=$_POST['clave'];
}
if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
    if($nombre == "profesor"){
        header('Location: cursos.php');
    }
    elseif($nombre == "administrador"){
        header('Location: registroaulas.php');
    }
    else{
        header('Location: alumnos.php');
    }
}
?>


<html>
    <head></head>
    <title>Formulario de acceso</title>
    <body>
        <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <p>Usuario:</p>
                </td>
                <td>
                    <input type="text" name="nombre" />
                </td>
            </tr>
            <tr>
                <td>Clave:</td>
                <td><input type="password" name="clave" /> </td>
            </tr>
            <tr>
                <td>
                    <button>Acceder</button>
                </td>
                <td>
                    <input type="button" name="enviar" value="Enviar" />
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>