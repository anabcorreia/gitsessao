<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Senha</th>
            <th>Email</th>
        </tr>
        <?php foreach ($competidores as $competidor): ?>
            <tr>
                <td><?php echo $competidor['id_usuario']; ?></td>
                <td><?php echo $competidor['usuario']; ?></td>
                <td><?php echo $competidor['senha']; ?></td>
                <td><?php echo $competidor['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>