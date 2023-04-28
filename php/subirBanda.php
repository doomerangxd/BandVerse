<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Da el salto!</title>
    <link rel="stylesheet" href="css/subirBandaStyles.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>
</head>
<body>
    <div class="root">
        <form action="" class="form-register">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">Paso 1</li>
                    <li class="progressbar__option">Paso 2</li>
                    <li class="progressbar__option">Paso 3</li>
                    <li class="progressbar__option">Paso 4</li>
                </ul>
                <h1 class="form-register__title">¡Da el salto!</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información Básica<small> (Paso 1)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="Nombre de la Banda/Artista" class="step__input" name="nombre">
                        <input type="text" placeholder="Localidad" class="step__input" name="localidad">
                        <input type="text" placeholder="Género musical" class="step__input" name="genero">
                        <input type="text" placeholder="Año de formación" class="step__input" name="formacion">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Miembros de la formación<small> (Paso 2)</small></h2>
                    </div>
                    <div class="step__body">
                    <textarea readonly="readonly" class="step__input">Añadir tantos miembros como haya en la formación
                        </textarea>
                        <button id="agregar" class="step__input">Agregar</button>
                            <div id="dinamic"></div>
                            
                            <script src="js/main.js"></script>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Fotografías de los miembros<small> (Paso 3)</small></h2>
                    </div>
                    <div class="step__body">
                    <textarea readonly="readonly" class="step__input">Añadir tantas fotos como miembros haya en la formación
                        </textarea>
                        <button id="agregarDos" class="step__input">Agregar</button>
                            <div id="dinamicDos"></div>
                            
                            <script src="js/main_dos.js"></script>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
                    </div>
                    </div>
                <div class="step" id="step-4">
                    <div class="step__header">
                        <h2 class="step__title">Fotografías<small> (Paso 4)</small></h2>
                    </div>
                    <div class="step__body">
                        <textarea readonly="readonly" class="step__input">Agregar cuantas sea necesaria de cada miembro, vertical (200x250px)
                        </textarea>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
                        <button type="submit" class="step__button">Registrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script src="js/subirBanda.js"></script>
</body>
</html>