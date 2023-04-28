
<?php 

    include 'conexion.php';

    session_start();

    $tarjeta = trim($_POST['tarjeta']);
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['contrasena']);


    if(empty($nombre))
    {
        echo '<script>
            alert("Debes introducir tu nombre y apellidos")
            window.location = "pagar.php";
        </script>';

        exit();
    }

    if(empty($email))
    {
        echo '<script>
            alert("Debes introducir un correo electrónico")
            window.location = "pagar.php";
        </script>';

        exit();
    }

    if(empty($password))
    {
        echo '<script>
            alert("Debes introducir tu contraseña")
            window.location = "pagar.php";
        </script>';

        exit();
    }

    if(empty($tarjeta))
    {
        echo '<script>
            alert("Debes introducir tu contraseña")
            window.location = "pagar.php";
        </script>';

        exit();
    }


    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo '
        <script>
            alert("Introduce un email válido, por favor.");
            window.location = "pagar.php";
        </script>';

        exit();
    }

    $ejec = mysqli_query($conn, "INSERT INTO compras (precio) VALUES ('$tarjeta');");

    if($ejec)
    {
        echo '
        <script>
            alert("¡Gracias por tu compra!");
            window.location = "shop.php";
        </script>';

        exit();
    }

    mysqli_close($conn);


?>