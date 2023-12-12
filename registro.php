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
    <title>Registro</title>
    <style>
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

        .register-container {
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
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #2196F3;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            text-align: center;
            display: block;
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <form action="#" name="registro" method="post">
            <h2>Registro</h2>
             <input type="text" name="Nombre" placeholder="Nombre">
            <input type="email" name="Correo" placeholder="Correo">
             <input type="text" name="Usuario" placeholder="Usuario">
         	<input type="text" name="Telefono" placeholder="Telefono">
         	 <input type="text" name="Area" placeholder="Area">
         	  <input type="text" name="Contraseña" placeholder="Contraseña">
            <input type="submit" name="registro">
        </form>
        <a href="index.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
    </div>
</body>
</html>


<?php

	if(isset($_POST['registro'])){

		$Nombre= $_POST['Nombre'];
		$Correo= $_POST['Correo'];
		$Usuario= $_POST['Usuario'];
		$Telefono= $_POST['Telefono'];
		$Area= $_POST['Area'];
		$Contraseña= $_POST['Contraseña'];

        $insertarDatos = "INSERT INTO datos1 VALUES('$Nombre','$Correo','$Usuario','$Telefono','$Area','$Contraseña','')";

        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

	}

?>
