<?php //Pantalla de incio 
	session_start();
	require("class/connect_db.php");
    $cedula 	   = isset($_SESSION["cedula"]) ? $_SESSION["cedula"] : "";
    $nombre 	   = isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : "";
    $apellidos 	   = isset($_SESSION["apellidos"]) ? $_SESSION["apellidos"] : "";
    $telefono 	   = isset($_SESSION["telefono"]) ? $_SESSION["telefono"] : "";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taller KAJQ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Keilor Jiménez">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
	<body background="images/fondotot.jpg" style="background-attachment: fixed">
		<div class="container">
			<header class="header">
				<table>
                <tr>
                    <td><div style="color: #369;">1. Datos Personales</div></td>
                    <td><div>2. Datos del Vehiculo</div></td>
                    <td><div>3. Fotos</div></td>
                    <td><div><a href="class/Taller.php?action=close">Cancelar</a></div></td>
                </tr>
                </table>
			</header>
			<div>
                <form action='class/Taller.php?action=persona' method='post'>
                    <table>
                    <tr>
                        <td>
                        <input  type="number" name="cedula" placeholder="Cédula" maxlength="15" 
                        value="<?php echo $cedula; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="text" name="nombre" placeholder="Nombre" maxlength="15" 
                        value="<?php echo $nombre; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="text" name="apellidos" placeholder="Apellidos" maxlength="15" 
                        value="<?php echo $apellidos; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="number" name="telefono" placeholder="Teléfono" maxlength="15" 
                        value="<?php echo $telefono; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type='submit' class='btn btn-danger' value='Siguiente'>
                        <input type="submit" class="btn btn-danger" value="Cancelar" onclick = "window.location.href='../index.php'">	
                        </td>
                    </tr>
                    </table>
                </form>
			</div>
			<footer>
				<p>&copy; Copyright Keilor Jiménez</p>
				<hr class="soften"/>
			</footer>
			</div>
			</style>
	</body>
</html>