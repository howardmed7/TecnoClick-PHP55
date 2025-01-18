<?php
header("Content-Type: application/json");

$productos = [
    "C-01.png" => ["nombre" => "Canon Eos Rebel T3", "caracteristicas" => "Resolución de 12.2 MP, ISO 100-6400, LCD de 2.7 pulgadas,Modo de Video en Alta Definición EOS mejorado con grabación expandida (HD: 30p (29.97)/25p), y con opciones de edición de video en la cámara."],
    "C-02.png" => ["nombre" => "Canon Eos 60D", "caracteristicas" => "Resolución de 18 MP, ISO 100-12800, pantalla articulada"],
    "C-03.png" => ["nombre" => "Canon Eos T100", "caracteristicas" => "Impresionantes fotos, películas cinematográficas
                                Capture fácilmente imágenes impresionantes con un desenfoque de fondo natural, incluso en condiciones de luz difíciles, mediante el sensor de 18 megapíxeles que tiene hasta 19 veces más área de superficie que muchos teléfono inteligentes"],
    "C-04.png" => ["nombre" => "Canon Eos 6D Mark ||", "caracteristicas" => "Full HD. 26,2 megapixeles, captura 6,5 fotogramas por segundo"],
    // Agrega el resto de productos aquí
];

if (isset($_GET['id']) && array_key_exists($_GET['id'], $productos)) {
    echo json_encode($productos[$_GET['id']]);
} else {
    echo json_encode(["error" => "Producto no encontrado"]);
}
?>