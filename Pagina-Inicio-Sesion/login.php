<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Iniciar Sesión</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../assets/favicon-32x32.png" type="image/png">
</head>

<body>
    <!-- Incluir el header -->
     <div>
    <main>
        <section class="login">
            <h2>Iniciar Sesión</h2>
            <form action="../config2.php" method="post">

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
                
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

            <div class="button-container">
                 <button type="submit">Iniciar Sesión</button>
            </div>
            
            <div class="btn-container">
                <p><a href="../Cambiar-Contrasena/Cambiar-Contrasena.php">Cambiar contraseña</a></p>
            </div>

            <div class="btn-container">
                <p><a href="../Eliminar-Usuario/Eliminar-Usuario.php">Eliminar usuario</a></p>
            </div>
        </section>
    </main>
</div>
    
    <!-- Incluir el footer -->
  
</body>
</html>