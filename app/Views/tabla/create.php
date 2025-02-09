<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Registro</title>
</head>
<body>
    <h1>Agregar Nuevo Registro</h1>
    <form action="<?= base_url('tabla/store') ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="number" name="telefono" id="telefono" required><br><br>
        
        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="<?= base_url('tabla') ?>">Volver a la lista</a>
</body>
</html>
