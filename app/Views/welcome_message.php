<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Consulta</title>
</head>
<body>
    <h1>Realiza tu Consulta</h1>
    <form action="<?= base_url('procesar') ?>" method="post">
        <label for="busqueda">Buscar:</label>
        <input type="text" name="busqueda" id="busqueda" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
