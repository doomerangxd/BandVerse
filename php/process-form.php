<?php

include 'conexion.php';


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form data if the form has been submitted
if (isset($_POST["submit"])) {

    // Get the form data
    $band_name = $_POST["band_name"];
    $city = $_POST["city"];
    $genre = $_POST["genre"];
    $year_formed = $_POST["year_formed"];
    $description = $_POST["description"];
    $color_fondo = $_POST["color_fondo"];
    $portada_name = $_FILES["portada"]["name"];
    $portada_tmp_name = $_FILES["portada"]["tmp_name"];
    move_uploaded_file($portada_tmp_name, "uploads/" . $portada_name);
    $izquierda_name = $_FILES["foto_izquierda"]["name"];
    $izquierda_tmp_name = $_FILES["foto_izquierda"]["tmp_name"];
    move_uploaded_file($izquierda_tmp_name, "uploads/" . $izquierda_name);
    $derecha_name = $_FILES["foto_derecha"]["name"];
    $derecha_tmp_name = $_FILES["foto_derecha"]["tmp_name"];
    move_uploaded_file($derecha_tmp_name, "uploads/" . $derecha_name);
    $num_members = $_POST["num_members"];
    $member_names = $_POST["member_name"];
    $member_instruments = $_POST["member_instrument"];
    $member_pictures = $_FILES["member_picture"];
    $num_records = $_POST["num_records"];
    $record_titles = $_POST["record_title"];
    $record_years = $_POST["record_year"];
    $record_files = $_FILES["record_file"];

    // Insert the band information into the database
    $sql = "INSERT INTO bandas (nombre, ciudad, genero, formacion, descripcion, portada, foto_izquierda, foto_derecha, color_fondo, letra) VALUES ('$band_name', '$city', '$genre', '$year_formed', '$description', '$portada_name', '$izquierda_name', '$derecha_name', '$color_fondo', 'a')";
    if (mysqli_query($conn, $sql)) {

        // Get the ID of the newly inserted band
        $band_id = mysqli_insert_id($conn);

        // Insert the member information into the database
        for ($i = 0; $i < count($member_names); $i++) {
            $member_name = mysqli_real_escape_string($conn, $member_names[$i]);
            $member_instrument = mysqli_real_escape_string($conn, $member_instruments[$i]);
            $member_picture = $member_pictures["name"][$i];
            $member_picture_tmp = $member_pictures["tmp_name"][$i];
            move_uploaded_file($member_picture_tmp, "uploads/" . $member_picture);
            $sql = "INSERT INTO miembros (nombre, instrumento, foto, id_banda) VALUES ('$member_name', '$member_instrument', '$member_picture', '$band_id')";
            mysqli_query($conn, $sql);
        }

        // Insert the record information into the database
        for ($i = 0; $i < count($record_titles); $i++) {
            $record_title = mysqli_real_escape_string($conn, $record_titles[$i]);
            $record_year = mysqli_real_escape_string($conn, $record_years[$i]);
            $record_file = $record_files["name"][$i];
            $record_file_tmp = $record_files["tmp_name"][$i];
            move_uploaded_file($record_file_tmp, "uploads/" . $record_file);
            $sql = "INSERT INTO discos (titulo, anyo, foto, id_banda) VALUES ('$record_title', '$record_year', '$record_file', '$band_id')";
            mysqli_query($conn, $sql);
        }

        // Redirect to a success page
        header("Location: bands.php");
        exit;

    } else {
        echo "Error: " . mysqli_error($conn);
    }


}



// Close the database connection
mysqli_close($conn);



?>