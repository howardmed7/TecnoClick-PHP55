<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TechnoClick - Header</title>
    <link rel="stylesheet" href="header.css">
    <link rel="icon" href="../assets/favicon-32x32.png" type="image/png">

    <style>
        /* styles.css */
        /* Estilos generales */
        body {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; /*Define el tipo de letra para el texto del sitio.*/
            margin: 0;  /*Elimina el margen por defecto del navegador*/
            padding: 0; /*Elimina el relleno por defecto del navegador*/
            background-color: #dfdfdf; /*Establece el color del cuerpo del documento*/
        }

        /*Estilo para el header*/
        header {
            background-color: #1b523e; /*Fondo del encabezado*/
            color: #fff;  /*Color de la letra dentro del encabezado*/
            font-weight: 400; /*Se utilizar para quitar o aumentar el grosor de la letra*/
            padding: 10px 20px; /*Añade espacio interios alrededor del contenido del encabezado*/
            position: fixed; /* Fija el encabezado en la parte superior de la página, evita el desplazamiento*/
            top: 0; /*Posiciona el encabezado en la parte superior izquierda*/
            left: 0; /*Posiciona el encabezado en la parte superior izquierda*/
            width: 100%; /*Define el ancho del encabezado 100% del contenedor*/
            z-index: 1000; /* Asegura que el encabezado este en la parte superior en otros elementos*/
            display: flex; /*Se utiliza para alinear los elementos hijos*/
            justify-content: space-between; /*Se utiliza para distribuir el espacio entre los elementos hijos*/
            align-items: center;  /*Centra verticalmente los elementos hijos*/
        }


        /*Estilo del logotipo*/
        header .logo {
            display: flex; /*Se utiliza flexbox para alinear los elementos del logo*/
            align-items: center;  /*Se utiliza para centrar verticalmente los elementos dentro del logo*/
        }


        /*Estilo dela imagen del logotipo*/
        header .logo img {
            height: 60px; /*Se utiliza para definir la altua del logo*/
            margin-right: 15px; /*Se utiliza para añadirle espacio hacia la derecha a la imagen del logo*/
        }


        /*Estilo del titulo del encabezado*/
        header h1{
           margin: 0; /*Elimina el margen por defecto del titulo*/
           font-size:25px; /*Difine el tamanaño de la fuente del titulo*/
           font-weight: 400;  /*Se utilizar para quitar o aumentar el grosor de la letra*/
        }



        /*Estilo para la navegación*/
        header nav ul {
            list-style: none; /* ¿Se utiliza para eliminar puntos en la lista*/
            display: flex; /*Se utiliza para alinear los elementos de la lista flexbox*/
            margin: 0; /*Elimina el margen por defecto */
            padding: 0; /*Elimina el padding por defecto de la lista*/
        }


        /*Estilo del espacio entre los enlaces y el nombre*/
        header nav ul li {
           margin-left: 30px; /*Añade espacio a la izquierda de cada elemento de la lista*/

        }


        /*Estilo del diseño de los enlaces*/
        header nav ul li a {  
           color: #ffffff; /*Color de la letra de los enlaces inicio,productos etc*/
           text-decoration-style:double;
           font-size: 18px; /*Tamaño de la letra de los enlaces*/
}


        header nav ul li a:hover {
           text-decoration: underline;
           text-decoration-color: #08e48c;
        }


        /*Margen superior del contenido principal*/
        main {
           margin-top: 100px; /*Margen superior principal para evitar que se superponga con el encabezado fijo*/
        }


         /*Contenedor principal*/
         .container {
            max-width: 1200px; /*Define el ancho maximo del contenedor*/
            margin: 0 auto;
            padding: 0px;
        }

    </style>

</head>
<body>
    <header>
        <div class="logo">
            <img src="../assets/LogoTipo.jpg" alt="TecnoClick Logo">
            <h1>TecnoClick</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../Pagina-Inicio/inicio.php">Inicio</a></li>
                <li><a href="../Pagina-Productos/productos.php">Productos</a></li>
                <li><a href="../Pagina-Registro/registro.php">Registro</a></li>
                <li><a href="../Pagina-Inicio-Sesion/login.php">Iniciar Sesión</a></li>
                <li><a href="../Pagina-Inicio-Sesion/login.php" class="logout-btn">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <!-- Contenido principal aquí -->
    </main>

    <footer>
        <!-- Contenido del footer aquí -->
    </footer>
</body>
</html>