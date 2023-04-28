<?php

    session_start();

    include 'conexion.php';

    $user = trim($_POST['user']);
    $password = trim($_POST['password']);

    $validar_login = mysqli_query($conn, "SELECT * FROM USUARIOS WHERE username='$user' AND password='$password'");

    if(mysqli_num_rows($validar_login) > 0)
    {
        $_SESSION['usuario'] = $user;
        header("location:index.php");
        exit;
    }

    else
    {
        echo '
        <script>
            alert("Usuario o contraseña incorrectos, inténtalo de nuevo");
            window.location = "login.php";
        </script>';

        exit();
    }

?>