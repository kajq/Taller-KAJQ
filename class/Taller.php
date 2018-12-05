<?php
//reutilizo la conexión
session_start();
require("connect_db.php");

$datos = new Taller();

//obtengo la acción
extract($_GET);
if ($action == 'persona') {
    $datos->Persona();
} elseif ($action == 'vehiculo'){
    $datos->Vehiculo();
} elseif  ($action == 'Guardar'){
    $datos->Fotografia();
    $datos->AddPersona();
    $datos->AddVehiculo();
    echo "<script>location.href='../datos.php'</script>";
} elseif ($action == 'close'){
    session_start();
    session_destroy();
    header("location:..\index.php");
}

class Taller 
{
    //Declaro las variables
    private $connect_db;

    function Taller(){
        $this->connect_db 	= $_SESSION['connect'];
    }

    //respaldo datos de persona
    function Persona(){
        $_SESSION["cedula"]	   = $_POST['cedula'];
		$_SESSION["nombre"]    = $_POST['nombre'];
		$_SESSION["apellidos"] = $_POST['apellidos'];
        $_SESSION["telefono"]  = $_POST['telefono'];
        echo "<script>location.href='../index2.php'</script>";
    }
    //respaldo datos de vehiculo
    function Vehiculo(){
        $_SESSION["placa"]	     = $_POST['placa'];
		$_SESSION["marca"]       = $_POST['marca'];
		$_SESSION["modelo"]      = $_POST['modelo'];
        $_SESSION["kilometraje"] = $_POST['kilometraje'];
        $_SESSION["notas"]       = $_POST['notas'];
        echo "<script>location.href='../index3.php'</script>";
    }

    function Fotografia(){
		// Recibo los datos de la imagen
		$nombre_img = $_FILES['imagen']['name'];
		$tipo = $_FILES['imagen']['type'];
		$tamano = $_FILES['imagen']['size'];
		 
		//Si existe imagen y tiene un tamaño correcto
		if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
		{
		   //indicamos los formatos que permitimos subir a nuestro servidor
		   if (($_FILES["imagen"]["type"] == "image/gif")
		   || ($_FILES["imagen"]["type"] == "image/jpeg")
		   || ($_FILES["imagen"]["type"] == "image/jpg")
		   || ($_FILES["imagen"]["type"] == "image/png"))
		   {
		      // Ruta donde se guardarán las imágenes que subamos
              //$directorio = $_SERVER['DOCUMENT_ROOT'].'/images/uploads/';
              $directorio = 'C:\xampp\htdocs\ExamenISW-611\images\uploads\\';
		      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
              move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
              $_SESSION["foto"] = $nombre_img;  
		    } 
		    else 
		    {
		       //si no cumple con el formato
		       echo "No se puede subir una imagen con ese formato ";
		    }
			} 
			else 
			{
			   //si existe la variable pero se pasa del tamaño permitido
			   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
			}
    }

    function AddPersona(){
        //se capturan valores del formulario
		$cedula		= $_SESSION['cedula'];
		$nombre 	= $_SESSION['nombre'];
		$apellido   = $_SESSION['apellidos'];
		$telefono   = $_SESSION['telefono'];
		//Se inserta a la bd
		$qInsert = "INSERT INTO persona VALUES('$cedula', '$nombre', '$apellido', '$telefono')";
		$execute = mysqli_query($this->connect_db,$qInsert);
		//validación de error en bd
		if (!$execute) {
            echo '<script>alert("Error al insertar cliente: Verifica que la cedula no exista")</script> ';
            echo "<script>location.href='../index.php'</script>";
		} 
    }

    function AddVehiculo(){
        $placa  	= $_SESSION['placa'];
        $marca      = $_SESSION['marca'];
        $modelo     = $_SESSION['modelo'];
        $kilometraje= $_SESSION['kilometraje'];
        $notas      = $_SESSION['notas'];
        $foto       = $_SESSION['foto'];
        $cedula		= $_SESSION['cedula'];
		//Se inserta a la bd
		$qInsert = "INSERT INTO vehiculo VALUES('$placa', '$marca', '$modelo', '$notas', '$kilometraje', '$foto', '$cedula')";
		$execute = mysqli_query($this->connect_db,$qInsert);
		//validación de error en bd
		if (!$execute) {
            echo '<script>alert("Error al insertar vehiculo: Verifica que la placa no exista")</script> ';
            echo "<script>location.href='../index2.php'</script>";
		}
    }
}
