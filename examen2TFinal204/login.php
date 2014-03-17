<?php session_start(); 
require_once 'bbdd.php'; 

$email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
$password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";

if ($email == "" || $password =="") {
    $url = "acceso.php";
    header('Location:'.$url);
}

$bd = conectaBd();

$consulta = "SELECT * FROM cliente WHERE email = :email and password = :password";
$resultado = $bd->prepare($consulta);
if (!$resultado->execute(array(":email" => $email,":password" => $password))) {
       $url = "error.php?msg_error=Error_Consulta__Acceso";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Usuario_Inexistente";
           header('Location:'.$url);
       } else {
           $_SESSION['cliente'] = $registro[2]; //Coger tercer campo: nombre cliente
           $url = "listadopro.php";
           header('Location:'.$url);
       }
}  
?>
    </body>
</html>
