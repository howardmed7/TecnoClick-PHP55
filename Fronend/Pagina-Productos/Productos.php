<?php
session_start(); 
if (!isset($_SESSION["usuario"])) {
    header("location: ../Pagina-Inicio-Sesion/login.php"); } ?> 
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Productos</title>
    <link rel="stylesheet" href="productos.css">
    <link rel="icon" href="../assets/favicon-32x32.png" type="image/png">
</head>
<body>
    <!-- Incluir el header -->
    <?php include '../Header/header.html'; ?>

    <main>
        <section class="productos">
            <h2>Cámaras</h2>

            <div class="producto">
                <img src="../assets/Camaras/C-01.png" alt="Producto 1">
                <h3>Canon Eos Rebel T3</h3>
                <p>Precio: $850.000</p>
                
            <!-- Contenedor de detalles -->
            <details>
            <summary>Características</summary>
            <p>Resolución de 12.2 MP, ISO 100-6400, LCD de 2.7 pulgadas,Modo de Video en Alta Definición EOS mejorado con grabación expandida (HD: 30p (29.97)/25p), y con opciones de edición de video en la cámara.</p>
            </details>
            <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
             </div>
             
             

            <div class="producto">
                <img src="../assets/Camaras/C-02.png" alt="Producto 2">
                <h3>Canon Eos 60D</h3>
                <p>Precio: $500.000</p>
            <!-- Contenedor de detalles -->
            <details>
            <summary>Características</summary>
            <p>RResolución de 18 MP, ISO 100-12800, pantalla articulada.</p>
            </details>
            <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
            </div>
             </div>
 

            <div class="producto">
                <img src="../assets/Camaras/C-03.png" alt="Producto 3">
                <h3>Canon Eos T100</h3>
                <p>Precio: $1'000.000</p>
           <!-- Contenedor de detalles -->
           <details>
            <summary>Características</summary>
            <p>Impresionantes fotos, películas cinematográficas
            Capture fácilmente imágenes impresionantes con un desenfoque de fondo natural, incluso en condiciones de luz difíciles, mediante el sensor de 18 megapíxeles que tiene hasta 19 veces más área de superficie que muchos teléfono inteligentes</p>
            </details>
            <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
            </div>
             </div>


            <div class="producto">
                <img src="../assets/Camaras/C-04.png" alt="Producto 4">
                <h3>Canon Eos 6D Mark ||</h3>
                <p>Precio: $1'000.000</p>
                 <!-- Contenedor de detalles -->
                <details>
            <summary>Características</summary>
            <p>Full HD. 26,2 megapixeles, captura 6,5 fotogramas por segundo</p>
            </details>
            <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
            </div>
             </div>


            <div class="producto">
                <img src="../assets/Camaras/C-05.png" alt="Producto 5">
                <h3> Sony RX 10 IV</h3>
                <p>Precio: $1'100.000</p>
                <button>Caracteristicas</button>
                <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                </div>
            </div>

            <div class="producto">
                <img src="../assets/Camaras/C-06.png" alt="Producto 6">
                <h3>Sony Cyber Shot hx400v </h3>
                <p>Precio: $2'000.000</p>
                <button>Caracteristicas</button>
                <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                </div>
            </div>


            <h2>Celulares</h2>

             <div class="producto">
                  <img src="../assets/Celulares/CLS-01.png" alt="Producto 1">
                  <h3>Galaxy A24</h3>
                  <p>Precio: $1'230.000</p>
                  <button>Caracteristicas</button>
                  <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                  </div>
            </div>

            <div class="producto">
                  <img src="../assets/Celulares/CLS-02.png" alt="Producto 2">
                  <h3>Redmi 13 PRO</h3>
                  <p>Precio: $2'230.000</p>
                  <button>Caracteristicas</button>
                  <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                  </div>
            </div>

            <div class="producto">
                  <img src="../assets/Celulares/CLS-03.png" alt="Producto 3">
                  <h3>Huawei nova 9</h3>
                  <p>Precio: $1'000.000</p>
                  <button>Caracteristicas</button>
                  <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                  </div>
            </div>

            <div class="producto">
                  <img src="../assets/Celulares/CLS-04.png" alt="Producto 4">
                  <h3>Redmi Poco C65</h3>
                  <p>Precio: $1'180.000</p>
                  <button>Caracteristicas</button>
                  <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                  </div>
            </div>

            <h2>Computadores</h2>

             <div class="producto">
                  <img src="../assets/Computadores/PC-01.png" alt="Producto 1">
                  <h3>PC Lenovo Escritorio</h3>
                  <p>Precio: $3'230.000</p>
                  <button>Caracteristicas</button>
                  <a href="../Metodo-Pago/Tarjeta/tarjeta.html"><button hre>Comprar</button></a>
                  </div>
            </div>

            <div class="producto">
                  <img src="../assets/Computadores/PC-02.png" alt="Producto 2">
                  <h3>PC Gamer Corei5</h3>
                  <p>Precio: $3'230.000</p>
                  <button>Caracteristicas</button>
                  <button>Comprar</button>
            </div>

            <div class="producto">
                  <img src="../assets/Computadores/PC-03.png" alt="Producto 3">
                  <h3>PC Lenovo</h3>
                  <p>Precio: $1'330.000</p>
                  <button>Caracteristicas</button>
                  <button>Comprar</button>
            </div>

            <div class="producto">
                  <img src="../assets/Computadores/PC-04.png" alt="Producto 4">
                  <h3>PC HP</h3>
                  <p>Precio: $1'430.000</p>
                  <button>Caracteristicas</button>
                  <button>Comprar</button>
            </div>

        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>