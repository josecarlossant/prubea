<?php

	$servidor = "localhost";
	$usuario  = "root";
	$clave  =  "";
	$baseDeDatos = "inicio";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
     <script>
        function redirigir() {
            // Obtener el formulario por su ID
            var formulario = document.getElementById("miFormulario");

            // Agregar la lógica de redirección aquí
            window.location.href = "inicio.html";

            // Devolver false para evitar que el formulario se envíe normalmente
            return false;
        }
    </script>
    <style >
        body {
    background-color: #e0f7fa;
    font-family: Arial, sans-serif;
         background-image: url('bg3.jpg');
            text-align: center;
             background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
}

.login-container {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background-color: #ffffff;
    margin-top: 50px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #2196F3;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

a {
    text-align: center;
    display: block;
    margin-top: 10px;
}
</style>
</head>
<body>
    <div class="login-container">
        <form action="#" name="inicio" method="post" id="miFormulario" onsubmit="return redirigir()">
            <h2>Iniciar Sesión</h2>
            <input type="email" name="Correo" placeholder="Correo">
         	<input type="text" name="contraseña" placeholder="contraseña">
            <input type="submit" name="registro">
            <input type="reset">
        </form>
        <a href="registro.php">¿No tienes una cuenta? Regístrate aquí</a>
    </div>
</body>
</html>


<?php

	if(isset($_POST['registro'])){

		$Correo= $_POST['Correo'];
		$contraseña= $_POST['contraseña'];


        $insertarDatos = "INSERT INTO datos VALUES('$Correo','$contraseña','')";

        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

	}

?>