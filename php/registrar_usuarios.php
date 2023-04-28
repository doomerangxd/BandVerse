<?php

    include 'conexion.php';

    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $contrasena = trim($_POST['contrasena']);

    $query = "INSERT INTO usuarios(nombre, apellidos, email, username, password) VALUES('$nombre', '$apellidos', '$email', '$username', '$contrasena')";


    // - - Verificar usuario y correo - - 

    $verify_user = mysqli_query($conn, "SELECT * FROM usuarios WHERE username='$username'");
    $verify_email = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$email'");

    if(mysqli_num_rows($verify_user) > 0)
    {
        echo '
        <script>
            alert("El usuario ya está registrado, inténtalo de nuevo");
            window.location = "register.php";
        </script>';

        exit();
    }

    if(mysqli_num_rows($verify_email) > 0)
    {
        echo '
        <script>
            alert("El email ya está registrado, inténtalo de nuevo");
            window.location = "register.php";
        </script>';

        exit();
    }

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
            alert("Debes introducir un correo electrónico")
            window.location = "contacto2.php";
        </script>';

        exit();
    }

    if(empty($username))
    {
        echo '<script>
            alert("Debes introducir una contraseña")
            window.location = "contacto2.php";
        </script>';

        exit();
    }

    if(empty($contrasena))
    {
        echo '<script>
            alert("Debes introducir un nombre de usuario")
            window.location = "contacto2.php";
        </script>';

        exit();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo '
        <script>
            alert("Introduce un email válido, por favor.");
            window.location = "register.php";
        </script>';

        exit();
    }

    $execute = mysqli_query($conn, $query);

    if($execute)
    {
        echo '
        <script>
            alert("Usuario registrado satisfactoriamente");
            window.location = "index.php";
        </script>';
    }

    else
    {
        echo '
        <script>
            alert("No se ha podido registrar el usuario, inténtalo de nuevo");
            window.location = "../index.php";
        </script>';
    }

    mysqli_close($conn)

?>