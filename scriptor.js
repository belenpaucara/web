document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('encuestaForm');
    const modal = document.getElementById('resultadoModal');
    const span = document.getElementsByClassName('close')[0];
    const resultadoTexto = document.getElementById('resultadoTexto');
    const volver = document.getElementById('volver');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        let positivos = 0;
        let negativos = 0;

        const respuestas = {
            pregunta1: document.querySelector('input[name="pregunta1"]:checked').value,
            pregunta2: document.getElementById('pregunta2').value,
            pregunta3: document.querySelector('input[name="pregunta3"]:checked').value,
            pregunta4: document.querySelector('input[name="pregunta4"]:checked').value,
            pregunta5: document.querySelector('input[name="pregunta5"]:checked').value,
            pregunta6: document.getElementById('pregunta6').value,
            pregunta7: document.querySelector('input[name="pregunta7"]:checked').value,
            pregunta8: document.getElementById('pregunta8').value,
            pregunta9: document.getElementById('pregunta9').value,
            pregunta10: document.querySelector('input[name="pregunta10"]:checked').value
        };

        // Contar respuestas positivas y negativas
        for (let key in respuestas) {
            if (respuestas[key] === "excelente" || respuestas[key] === "sí" || respuestas[key] === "muy satisfecho" || respuestas[key] === "muy fácil") {
                positivos++;
            } else if (respuestas[key] === "bueno" || respuestas[key] === "satisfecho" || respuestas[key] === "fácil") {
                positivos++;
            } else {
                negativos++;
            }
        }

        // Mostrar mensaje basado en las respuestas
        if (positivos > negativos) {
            resultadoTexto.innerHTML = "Gracias por elegirnos.";
        } else {
            resultadoTexto.innerHTML = "Trataremos de mejorar.";
        }

        modal.style.display = 'block';

        setTimeout(() => {
            window.location.href = "index.php"; // Reemplazar con la URL de tu página principal
        }, 5000); // Redirigir después de 5 segundos
    });

    span.onclick = function() {
        modal.style.display = 'none';
        window.location.href = "index.php"; // Reemplazar con la URL de tu página principal
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
            window.location.href = "index.php"; // Reemplazar con la URL de tu página principal
        }
    };

    volver.onclick = function() {
        modal.style.display = 'none';
        window.location.href = "index.php"; // Reemplazar con la URL de tu página principal
    };
});
