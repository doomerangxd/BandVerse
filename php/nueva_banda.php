<?php

session_start();

include 'conexion.php';

$sql = "SELECT * FROM bandas ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?php echo $row["nombre"]; ?></title>

    <link rel='stylesheet' href='css/bandaAngelusStyle.css'>
    <link rel='icon' type='image/png' href='imgs/favicon.png'/>
    <script src='https://kit.fontawesome.com/41bcea2ae3.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body style='background-color:<?php echo $row["color_fondo"];?>'>


    <header id='header'>
        <div class='container__header'>
            <div class='logo'>
                <a href='index.php'><img src='imgs/logoBand2.png' alt=''></a>
            </div>
            <div class='container__nav'>
                <nav id='nav'>
                    <ul>
                        <li><a href='index.php'>Inicio</a></li>
                        <li><a class='select' href='bands.php'>Bandas</a></li>
                        <li><a href='shop.php'>Tienda</a></li>
                        <li><a href='conciertos.php'>Conciertos</a></li>
                        <li><a href='contacto2.php'>Contacto</a></li>
                        <li><a href="<?php                         
                        if(isset($_SESSION['usuario']))
                        {
                            echo 'cerrar_sesion.php';
                        }
                        else
                        {
                            echo 'login.php';

                        }?>" class="logear"><?php
                        if(isset($_SESSION['usuario']))
                        {
                            echo 'Logout';
                        }

                        else
                        {
                            echo 'Login/Register';
                        }
                            ?></a></li>
                    </ul>
                </nav>


                <div class='btn__menu' id='btn_menu'><i class='fas fa-bars'></i></div>

            </div>

        </div>
    </header>

    <div class='container__all' id='container_all'>


        <div class='body__Page'>

                <h1><?php echo $row["nombre"]; ?></h1>
                <h2><?php echo $row["ciudad"]; ?></h2>
            
            <div class='container-testimonials'>

            <p class='descripcion'> <?php echo $row["descripcion"]; ?>
            </p>

            <div class='botones'>
                
                <a href='https://www.instagram.com/angelusapatrida/'><div class='icon_instagram'>
                    <span><i class='fab fa-instagram'></i></span>
                </div></a>
                

                <a href='https://www.facebook.com/angelusapatrida'><div class='icon_facebook'>
                    <span><i class='fab fa-facebook-f'></i></span>
                </div></a>

                <a href='https://www.youtube.com/channel/UC6wABAUD9QlirdA_OWnzLqA'><div class='icon_youtube'>
                    <span class='youtube'><i class='fab fa-youtube'></i></span>
                </div></a>

                </div>
            </div>

            <div class='foto'>
                <img src='uploads/<?php echo $row["foto_izquierda"]; ?>' width='500px' height='350px'>
                <img class='foto2' src='uploads/<?php echo $row["foto_derecha"]; ?>' width='500px' height='350px'>

            </div>

            <?php 
                $consulta = "SELECT * FROM bandas ORDER BY id DESC LIMIT 1";
                $resultado = mysqli_query($conn, $consulta);
                $columna = mysqli_fetch_row($resultado);
                $count = (int) $columna[0];
            ?>

            <div>
                <h1>Discografía</h1>
                <div class='container__article'>
                    <?php 
                    $sqlDiscos = "SELECT * FROM discos WHERE id_banda = $count;";
                    $resultDiscos = mysqli_query($conn, $sqlDiscos);

                    // Loop through the results and create a div for each member
                    while ($rowDiscos = mysqli_fetch_assoc($resultDiscos)) {
                        echo "<div class='box__article'>";
                        echo "<img src='uploads/".$rowDiscos['foto']."' width='300px' height='300px'>";
                        echo $rowDiscos['titulo']; echo ' (' . $rowDiscos['anyo'] . ')';
                        echo "</div>";
                    }

                    ?>
                </div>
            </div>

            <div>
                <h1>Miembros</h1>
                <div class='container__article'>
                    <?php 

                    $sqlMiembros = "SELECT * FROM miembros WHERE id_banda = $count;";
                    $resultMiembros = mysqli_query($conn, $sqlMiembros);

                    // Loop through the results and create a div for each member
                    while ($rowMiembros = mysqli_fetch_assoc($resultMiembros)) {
                        echo "<div class='box__article2'>";
                        echo "<img src='uploads/".$rowMiembros['foto']."' width='200px' height='250px'>";
                        echo $rowMiembros['nombre']; echo ' (' . $rowMiembros['instrumento'] . ')';
                        echo "</div>";
                    }

                    ?>
                </div>
            </div>





                </div>
            </div>

        </div>




        <!-- Aquí empieza el footer -->
        <Footer>
            <div class='container__footer'>

                <div class='box__footer'>
                    <div class='logo'>
                        <img src='' alt=''>
                    </div>
                    <div class='terms'>
                        Utilizamos cookies y 
                        herramientas similares para mejorar tu experiencia, prestar nuestros servicios y entender cómo utilizan los usuarios nuestros
                        servicios con el fin de realizar mejoras. Terceras partes aprobadas también 
                        utilizan estas herramientas en relación con la publicidad mostrada.
                    </div>
                </div>

                <div class='box__footer'>
                    <h2>Ayuda</h2>
                    <a href='contacto2.php'>Contacto</a>
                    <a href='reports.php'>Reportar un problema</a>
                </div>

                <div class='box__footer'>
                    <h2>Nosotros</h2>
                    <a href='acercade.php'>Acerca de</a>
                    <a href=''>Politica de Cookies</a>             
                </div>

                <div class='box__footer'>
                    <h2>Redes Sociales</h2>
                    <a href='https://www.facebook.com/'><i class='fab fa-facebook-square'></i> Facebook</a>
                    <a href='https://twitter.com/?lang=es'><i class='fab fa-twitter-square'></i> Twitter</a>
                    <a href='https://www.instagram.com/'><i class='fab fa-instagram-square'></i> Instagram</a>
                </div>
            </div>

            <div class='box__copyright'>
                <hr>
                <p>Todos los derechos reservados © 2023 <b>BandVerse by Javi Gargallo</b></p>
            </div>
        </Footer>

</div>


<script src=''></script>
</body>
</html>

