<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$usuario=$_POST["usuario"]; 
$contrasena=$_POST["password"]; 

    try{

$base=new PDO('mysql:host=localhost; dbname=tecnoclick', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //METODO CON DOS PARAMETROS PREDE PARA LOS ERRORES 
//(HAY UN MONTON D EPARAMETROS PREDE EN PHP.NET)

$base->exec("SET CHARACTER SET utf8");

$sql="DELETE FROM USUARIO WHERE CONTRASENA= :contrasena AND USUARIO= :usuario"; 

$resultado=$base->prepare($sql); 

$resultado->execute(array(":contrasena"=>$contrasena, ":usuario"=>$usuario)); //esto es el marcador en un buscador

$registro=$resultado->rowCount();

if ($registro==true){

            echo'<script type="text/javascript">
            alert("Registro eliminado con éxito");
            window.location.href="Pagina-Inicio-Sesion/login.php";
            </script>';
		} else{

            echo'<script type="text/javascript">
            alert("El usuario no existe o ya fue eliminado");
            window.location.href="Eliminar-Usuario/Eliminar-Usuario.php";
            </script>';

			}

/*header("location: Pagina-Inicio-Sesion/login.php"); */
$resultado->CloseCursor(); 

}catch(Exception $e){//Este ENDPOINT tiene la finalidad de tomar los errores de la base de datos. 

  die ('Error: ' . $e->GetMessage()); 

}finally{//es como un if else que tuviera un do while

    $base=null; 
}
    ?> 
</body>
</html>