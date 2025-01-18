<?php
$id = $_GET['id'] ?? '';
$caracteristicas = null;

if ($id) {
    $api_url = "http://localhost/TecnoClick/Backend/getCaracteristicas.php?id=" . urlencode($id);
    $caracteristicas = json_decode(file_get_contents($api_url), true);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caracteristicas del Producto</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body>
    <?php include '../Frontend/Header/header.html'; ?>

    <main>
        <?php if ($caracteristicas && !isset($caracteristicas['error'])): ?>
            <h2><?php echo htmlspecialchars($caracteristicas['nombre']); ?></h2>
            <p>Características: <?php echo htmlspecialchars($caracteristicas['caracteristicas']); ?></p>
        <?php else: ?>
            <p>Producto no encontrado o error en la solicitud.</p>
        <?php endif; ?>
    </main>

    <?php include '../Frontend/Footer/footer.html'; ?>
</body>
</html>