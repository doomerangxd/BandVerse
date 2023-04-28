<?php

    session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Da el salto!</title>

    <link rel="stylesheet" href="css/enviar_banda.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="logo">
            <a href="index.php"><img src="imgs/logoBand2.png" height="80px" width="600px"></a>
        </div>
	<h1>¡Da el salto!</h1>
	<form method="POST" action="process-form.php" enctype="multipart/form-data">
		<label for="band_name">Nombre de Banda/Artista:</label>
		<input type="text" name="band_name" required><br><br>

		<label for="city">Localidad:</label>
		<input type="text" name="city" required><br><br>

		<label for="genre">Género musical:</label>
		<input type="text" name="genre" required><br><br>

		<label for="year_formed">Año de formación:</label>
		<input type="text" name="year_formed" required><br><br>

        <label for="descripcion">Breve descripción:</label>
		<input type="text" name="description" required><br><br>

		<label for="portada">Foto de portada (200x250px)</label>
		<input type="file" name="portada" required><br><br>

		<label for="foto_izquierda">Foto principal Izquierda (500x350px)</label>
		<input type="file" name="foto_izquierda" required><br><br>

		<label for="foto_derecha">Foto principal Derecha (500x350px)</label>
		<input type="file" name="foto_derecha" required><br><br>

		<label for="color_fondo">Color de fondo</label>
		<input type="color" name="color_fondo" required><br><br>

		<label for="num_members">Nº de miembros:</label>
		<input type="number" name="num_members" id="num_members" required>
		<button type="button" onclick="addMembers()">Añadir miembros</button><br><br>

		<div id="members_container"></div><br><br>

		<label for="num_records">Nº de discos:</label>
		<input type="number" name="num_records" id="num_records" required>
		<button type="button" onclick="addRecords()">Añadir discos</button><br><br>

		<div id="records_container"></div><br><br>

		<input type="submit" name="submit" value="Registrar">
	</form>

	<script>
		function addMembers() {
			var num_members = document.getElementById("num_members").value;
			var container = document.getElementById("members_container");
			container.innerHTML = "";
			for (var i = 1; i <= num_members; i++) {
				container.innerHTML += "<label>Miembro #" + i + " Nombre:</label> <input type='text' name='member_name[]' required><br>";
				container.innerHTML += "<label>Miembro #" + i + " Instrumento:</label> <input type='text' name='member_instrument[]' required><br><br>";
                container.innerHTML += "<label>Miembro #" + i + " Foto:</label> <input type='file' name='member_picture[]' required><br><br>";
			}
		}

		function addRecords() {
			var num_records = document.getElementById("num_records").value;
			var container = document.getElementById("records_container");
			container.innerHTML = "";
			for (var i = 1; i <= num_records; i++) {
				container.innerHTML += "<label>Disco #" + i + " Título:</label> <input type='text' name='record_title[]' required><br>";
				container.innerHTML += "<label>Disco #" + i + " Año:</label> <input type='number' name='record_year[]' required><br>";
				container.innerHTML += "<label>Disco #" + i + " Portada:</label> <input type='file' name='record_file[]' required><br><br>";
			}
		}
	</script>
</body>
</html>


