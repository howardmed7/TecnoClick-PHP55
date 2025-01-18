<?php
try {


    $base=new PDO('mysql:host=localhost; dbname=tecnoclick', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM usuario WHERE USUARIO= :usuario AND CONTRASENA= :password"; 

    $resultado=$base->prepare($sql); 

    $usuario=htmlentities(addcslashes($_POST["usuario"], "'")); 

    $password=htmlentities(addcslashes($_POST["password"], "'")); 

    $resultado->bindValue(":usuario", $usuario); 

    $resultado->bindValue(":password", $password); 

    $resultado->execute(); 

    $numero_registro=$resultado->rowCount(); 

    if ($numero_registro!=0) {
        
        session_start(); 

        $_SESSION["user"]=$_POST["usuario"]; 

        header("location: Pagina-Productos/productos.php"); 



    }else{


        header("location: Pagina-Inicio-sesion/login.php?fallo=true"); 

        {
            echo "<p style='color:red'>Usuario o contraseña invalido </p>";
         }

    } 


}catch(Exception $e) { //Este ENDPOINT tiene la finalidad de tomar los errores de la base de datos. 
//Adenás capta el error como un objeto, al cual se le puede actribuir sus propiedades y metodos


    die ("Error: " . $e->getMessage());  //Es para mostrar los mensaje.
}



?>