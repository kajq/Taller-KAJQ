<?php //Pantalla de incio 
	session_start();
	require("class/connect_db.php");
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
                    <td><div>1. Datos Personales</div></td>
                    <td><div>2. Datos del Vehiculo</div></td>
                    <td><div style="color: #369;">3. Fotos</div></td>
                    <td><div><a href="class/Taller.php?action=close">Cancelar</a></div></td>
                </tr>
                </table>
			</header>
			<div>
                <table>
                    <form action='class/Taller.php?action=Guardar' method='post' enctype='multipart/form-data'>
                    <tr>
                        <td>
                        <input id="imagen" name="imagen" size="30" type="file">	
                        </td>
                    </tr>
                        <td>
                            <img src='images\<?php echo $foto ?>' width='300'>
                        </td>
                    <tr>
                        <td>
                        <input type="buton" class="btn btn-danger" value="Volver" onclick = "window.location.href='index2.php'">	
                        <input type='submit' class='btn btn-danger' value='Guardar'>
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