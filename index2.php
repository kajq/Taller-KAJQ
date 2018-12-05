<?php //Pantalla de incio 
	session_start();
	require("class/connect_db.php");
    $placa 	   = isset($_SESSION["placa"]) ? $_SESSION["placa"] : "";
    $marca 	   = isset($_SESSION["marca"]) ? $_SESSION["marca"] : "";
    $modelo	   = isset($_SESSION["modelo"]) ? $_SESSION["modelo"] : "";
    $kilometraje = isset($_SESSION["kilometraje"]) ? $_SESSION["kilometraje"] : "";
    $notas 	   = isset($_SESSION["notas"]) ? $_SESSION["notas"] : "";
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
                    <td><div>1. Datos Personales</div></td>
                    <td><div style="color: #369;">2. Datos del Vehiculo</div></td>
                    <td><div>3. Fotos</div></td>
                    <td><div><a href="class/Taller.php?action=close">Cancelar</a></div></td>
                </tr>
                </table>
			</header>
			<div>
                <table>
                    <form action='class/Taller.php?action=vehiculo' method='post'>
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
                    <tr>
                        <td>
                        <input type="buton" class="btn btn-danger" value="Volver" onclick = "window.location.href='index.php'">	
                        <input type='submit' class='btn btn-danger' value='Siguiente'>
                        </td>
                    </tr>
                    </form>
                </table>
			</div>
			<footer>
				<p>&copy; Copyright Keilor Jiménez</p>
				<hr class="soften"/>
			</footer>
			</div>
	</body>
</html>