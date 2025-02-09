<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
</head>
<body>
    <h1>Editar Registro</h1>
    <form action="<?= base_url('tabla/update/' . $dato['id']) ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= esc($dato['nombre']) ?>" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?= esc($dato['apellido']) ?>" required><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="number" name="telefono" id="telefono" value="<?= esc($dato['telefono']) ?>" required><br><br>
        
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="<?= base_url('tabla') ?>">Volver a la lista</a>
</body>
</html>
