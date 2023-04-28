
<?php

    session_start();

    include 'conexion.php';

        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $telefono = ($_POST['telefono']);
        $motivo = trim($_POST['motivo']);
        $mensaje = trim($_POST['mensaje']);
        $empresas = trim($_POST['empresas']);

        $query = "INSERT INTO `contacto`(`nombre`, `apellidos`, `email`, `telf`, `motivo`, `mensaje`, `empresa`) VALUES ('$nombre','$apellidos','$email','$telefono','$motivo','$mensaje','$empresas')";

        $execute = mysqli_query($conn, $query);
        
        if(empty($nombre))
        {
            echo '<script>
                alert("Debes introducir un nombre")
                window.location = "contacto2.php";
            </script>';

            exit();
        }

        if(empty($apellidos))
        {
            echo '<script>
                alert("Debes introducir los apellidos")
                window.location = "contacto2.php";
            </script>';

            exit();
        }

        if(empty($email))
        {
            echo '<script>
                alert("Debes introducir un email")
                window.location = "contacto2.php";
            </script>';

            exit();
        }

        if(!is_numeric($telefono))
        {
            echo '<script>
            alert("Debes introducir un teléfono válido")
            window.location = "contacto2.php";
        </script>';

            exit();
        }

        if(empty($motivo))
        {
            echo '<script>
                alert("Debes introducir un motivo")
                window.location = "contacto2.php";
            </script>';

            exit();
        }

        if(empty($mensaje))
        {
            echo '<script>
                alert("Debes introducir un mensaje")
                window.location = "contacto2.php";
            </script>';

            exit();
        }

        if($execute)
        {
            echo '<script>
            alert("Gracias por contactarnos, recibirás una respuesta en breves!")
            window.location = "contacto2.php";
            </script>';
        }

        


?>