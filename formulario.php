<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Calificación</title>
    <link rel="stylesheet" href="estilofe.css">
    <link rel="stylesheet" href="normalizee.css">
</head>
<body>
    <h1>Califícanos: Venta de Inmuebles</h1>
    <form id="encuestaForm">
        <label>1. ¿Cómo calificarías nuestro servicio de atención al cliente?</label>
        <label><input type="radio" name="pregunta1" value="excelente" required> Excelente</label>
        <label><input type="radio" name="pregunta1" value="bueno" required> Bueno</label>
        <label><input type="radio" name="pregunta1" value="regular" required> Regular</label>
        <br><br>

        <label>2. ¿La información proporcionada en la página web fue clara y útil?</label>
        <select id="pregunta2" name="pregunta2" required>
            <option value="sí">Sí</option>
            <option value="no">No</option>
            <option value="parcialmente">Parcialmente</option>
        </select>
        <br><br>

        <label>3. ¿Recomendarías nuestra empresa a otros?</label>
        <label><input type="radio" name="pregunta3" value="sí" required> Sí</label>
        <label><input type="radio" name="pregunta3" value="no" required> No</label>
        <label><input type="radio" name="pregunta3" value="quizás" required> Quizás</label>
        <br><br>

        <label>4. ¿Cómo calificarías nuestra respuesta a sus consultas?</label>
        <label><input type="radio" name="pregunta4" value="excelente" required> Excelente</label>
        <label><input type="radio" name="pregunta4" value="bueno" required> Bueno</label>
        <label><input type="radio" name="pregunta4" value="regular" required> Regular</label>
        <br><br>

        <label>5. ¿Los precios de nuestras propiedades son competitivos?</label>
        <label><input type="radio" name="pregunta5" value="sí" required> Sí</label>
        <label><input type="radio" name="pregunta5" value="no" required> No</label>
        <label><input type="radio" name="pregunta5" value="moderadamente" required> Moderadamente</label>
        <br><br>

        <label>6. ¿Qué tan satisfecho estás con la variedad de propiedades ofrecidas?</label>
        <select id="pregunta6" name="pregunta6" required>
            <option value="muy satisfecho">Muy Satisfecho</option>
            <option value="satisfecho">Satisfecho</option>
            <option value="insatisfecho">Insatisfecho</option>
        </select>
        <br><br>

        <label>7. ¿Cómo calificarías la facilidad de uso de nuestro sitio web?</label>
        <label><input type="radio" name="pregunta7" value="muy fácil" required> Muy Fácil</label>
        <label><input type="radio" name="pregunta7" value="fácil" required> Fácil</label>
        <label><input type="radio" name="pregunta7" value="difícil" required> Difícil</label>
        <br><br>

        <label>8. ¿La presentación de las propiedades en la página web fue adecuada?</label>
        <select id="pregunta8" name="pregunta8" required>
            <option value="excelente">Excelente</option>
            <option value="bueno">Bueno</option>
            <option value="regular">Regular</option>
        </select>
        <br><br>

        <label>9. ¿Qué tan satisfecho estás con nuestra atención postventa?</label>
        <select id="pregunta9" name="pregunta9" required>
            <option value="muy satisfecho">Muy Satisfecho</option>
            <option value="satisfecho">Satisfecho</option>
            <option value="insatisfecho">Insatisfecho</option>
        </select>
        <br><br>

        <label>10. ¿Volverías a usar nuestros servicios en el futuro?</label>
        <label><input type="radio" name="pregunta10" value="sí" required> Sí</label>
        <label><input type="radio" name="pregunta10" value="no" required> No</label>
        <label><input type="radio" name="pregunta10" value="quizás" required> Quizás</label>
        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <div id="resultadoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Resultados de la Encuesta</h2>
            <p id="resultadoTexto"></p>
            <a href="index.php" id="volver">Volver a la página principal</a>
        </div>
    </div>

    <script src="scriptor.js"></script>
</body>
</html>
