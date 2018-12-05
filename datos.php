<?php //Pantalla de incio 
	session_start();
	require("class/connect_db.php");
    $cedula 	   = isset($_SESSION["cedula"]) ? $_SESSION["cedula"] : "";
    $nombre 	   = isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : "";
    $apellidos 	   = isset($_SESSION["apellidos"]) ? $_SESSION["apellidos"] : "";
    $telefono 	   = isset($_SESSION["telefono"]) ? $_SESSION["telefono"] : "";
    $placa 	   = isset($_SESSION["placa"]) ? $_SESSION["placa"] : "";
    $marca 	   = isset($_SESSION["marca"]) ? $_SESSION["marca"] : "";
    $modelo	   = isset($_SESSION["modelo"]) ? $_SESSION["modelo"] : "";
    $kilometraje = isset($_SESSION["kilometraje"]) ? $_SESSION["kilometraje"] : "";
    $notas 	   = isset($_SESSION["notas"]) ? $_SESSION["notas"] : "";
    $foto 	   = isset($_SESSION["foto"]) ? $_SESSION["foto"] : "no-image.png";
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
                    <td><div style="color: #369;">Datos Guardados exitosamente</td>
                </tr>
                </table>
			</header>
			<div>
                <form action='class/Taller.php?action=close' method='post'>
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
                        <input  type="text" name="placa" placeholder="Placa" maxlength="15" 
                        value="<?php echo $placa; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="text" name="marca" placeholder="marca" maxlength="15" 
                        value="<?php echo $marca; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="number" name="modelo" placeholder="modelo" maxlength="15" 
                        value="<?php echo $modelo; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="number" name="kilometraje" placeholder="kilometraje" maxlength="15" 
                        value="<?php echo $kilometraje; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input  type="text" name="notas" placeholder="notas" maxlength="300" 
                        value="<?php echo $notas; ?>">
                        </td>
                    </tr>
                    </tr>
                        <td>
                            <img src='images\uploads\<?php echo $foto ?>' width='300'>
                        </td>
                    <tr>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-danger" value="Cerrar">	
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