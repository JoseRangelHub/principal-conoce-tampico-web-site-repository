<?php require('./layout/header.php') ?>

<main>
    <h1>Contacto</h1>
    <p>¡Nos encantaría saber de ti! En "Conoce Tampico", valoramos tus preguntas, comentarios, sugerencias y cualquier información que desees compartir para enriquecer nuestro portal. Ya sea que tengas una recomendación de un lugar increíble, una duda sobre tu próximo viaje o simplemente quieras saludarnos, no dudes en ponerte en contacto.</p>
    <h3>✉️ Envíanos un Mensaje</h3>
    <p>Puedes utilizar el siguiente formulario de contacto para enviarnos un mensaje directamente. Nos esforzaremos por responderte a la brevedad posible.</p>
    <form action="/submit-form" method="POST">
        <label for="nombre">Nombre Completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="asunto">Asunto:</label><br>
        <input type="text" id="asunto" name="asunto"><br><br>

        <label for="mensaje">Tu Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="6" required></textarea><br><br>

        <button type="submit">Enviar Mensaje</button>
    </form>
    <p>¡Esperamos tu mensaje y agradecemos tu interés en "Conoce Tampico"!</p>
</main>

<?php require('./layout/aside.php') ?>

<?php require('./layout/footer.php') ?>