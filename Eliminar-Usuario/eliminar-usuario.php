<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Iniciar Sesión</title>
    <link rel="stylesheet" href="Eliminar-Usuario.css">
    <link rel="icon" href="../assets/favicon-32x32.png" type="image/png">
</head>
<body>
<?php include '../Header/header.php'; ?>
    <main>
        <section class="login">
            <h2>Eliminar Usuario</h2>
            <p>Para eliminar esta cuenta, debes ingresar el usuario y la contraseña correctamente.</p>
            <form action="../config4.php" method="post" id="eliminar">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Eliminar</button>
            </form>
        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>