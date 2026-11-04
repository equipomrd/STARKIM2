<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de integrantes</title>
</head>
<body>

    <h1>Registro de integrantes</h1>

    <form action="guardar.php" method="POST">

        <label>Nombres:</label>
        <input type="text" name="nombres" required>

        <br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>

        <br><br>

        <button type="submit">Guardar registro</button>

    </form>

</body>
</html>