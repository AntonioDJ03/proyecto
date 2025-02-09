<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Registros</title>
</head>
<body>
    <h1>Lista de Registros</h1>
    <a href="<?= base_url('tabla/create') ?>">Agregar Nuevo Registro</a>
    <br><br>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($datos)): ?>
                <?php foreach ($datos as $dato): ?>
                    <tr>
                        <td><?= $dato['id'] ?></td>
                        <td><?= esc($dato['nombre']) ?></td>
                        <td><?= esc($dato['apellido']) ?></td>
                        <td><?= esc($dato['telefono']) ?></td>
                        <td>
                            <a href="<?= base_url('tabla/edit/' . $dato['id']) ?>">Editar</a>
                            |
                            <a href="<?= base_url('tabla/delete/' . $dato['id']) ?>"
                               onclick="return confirm('¿Seguro que deseas eliminar este registro?')">
                               Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay registros.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
