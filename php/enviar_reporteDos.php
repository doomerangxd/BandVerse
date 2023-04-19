<?php


include 'conexion.php';

$value = trim($_POST['value']);
$descripcion = trim($_POST['descripcion']);
$archivo = trim($_POST['archivo']);

$query = "INSERT INTO reportes(localizacion, descripcion, prueba) VALUES('$value', '$descripcion', '$archivo')";

$execute = mysqli_query($conn, $query);


    if(isset($_FILES['archivo'])) 
    {
        $errors = array();
        $file_name = $_FILES['archivo']['name'];
        $file_size = $_FILES['archivo']['size'];
        $file_tmp = $_FILES['archivo']['tmp_name'];
        $file_type = $_FILES['archivo']['type'];
        $file_ext = strtolower(end(explode('.',$_FILES['archivo']['name'])));

        $extensions = array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions) === false)
        {
            $errors[] = "Tipo de archivo no permitido, por favor escoja JPEG o PNG.";
        }

        if($file_size > 2097152) 
        {
            $errors[] = 'El archivo debe de pesar menos de 2MB';
        }

        if(empty($errors) == true) 
        {
            move_uploaded_file($file_tmp, "pruebasReportes/" . $file_name);
            echo "El archivo se ha subido correctamente";
        } 

        else 
        {
            print_r($errors);
        }
    }


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
