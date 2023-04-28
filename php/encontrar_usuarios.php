<?php

    session_start();

    include 'conexion.php';

    $correo = trim($_POST['correo']);

    if(empty($correo))
    {
        echo '
        <script>
            alert("Debes introducir un correo electrónico);
            window.location = "login.php";
        </script>';

        exit();
    }


    $query = "SELECT * FROM usuarios WHERE email='$correo'";
    $execute = mysqli_query($conn, $query);

    
    if(mysqli_num_rows($execute) > 0)
    {
        echo '
        <script>
            alert("Hemos enviado un código de recuperación a ' . $correo . '");
            window.location = "login.php";
        </script>';

        exit();

    }

    else 
    {
        echo '
        <script>
            alert("No se ha encontrado ningún usuario con ese correo" );
            window.location = "problemsLogin.php";
        </script>';

        exit();
    }

?>