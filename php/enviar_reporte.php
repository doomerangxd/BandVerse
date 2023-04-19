
<?php

    include 'conexion.php';

    $value = trim($_POST['value']);
    $descripcion = trim($_POST['descripcion']);
    $archivo = trim($_POST['archivo']);

    $query = "INSERT INTO reportes(localizacion, descripcion, prueba) VALUES('$value', '$descripcion', '$archivo')";

    $execute = mysqli_query($conn, $query);

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