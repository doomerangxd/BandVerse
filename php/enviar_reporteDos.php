<?php

session_start();

include 'conexion.php';

$valor = trim($_POST['value']);
$descripcion = trim($_POST['descripcion']);
$imagen = trim($_POST['archivo']);
$archivo = $_FILES['archivo']['name'];
$temp = $_FILES['archivo']['tmp_name'];
$carpeta = 'pruebasReportes';
$ruta = $carpeta. '/' .$archivo;
move_uploaded_file($temp,$carpeta. '/'. $archivo);


$query = "INSERT INTO pruebas(ruta) VALUES('$archivo')";

$queryDos = "INSERT INTO `reportes`(`localizacion`, `descripcion`, `ruta`, id_usuario) VALUES ('$valor','$descripcion','$ruta', 8)";

$execute = mysqli_query($conn, $queryDos);

if($execute)
{
    echo '
    <script>
        alert("Se ha enviado su reporte, gracias por colaborar");
        window.location = "reports.php";
    </script>';

    exit();
}


?>
