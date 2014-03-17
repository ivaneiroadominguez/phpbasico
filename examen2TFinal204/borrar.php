<?php
session_start();
require_once 'func.php';
    
    $_SESSION['IdCategoria'] = (isset($_SESSION['IdCategoria']))?
            $_SESSION['IdCategoria']:0;
    
    $db = conectaBd();
     
    $consulta = "DELETE FROM categorias WHERE IdCategoria = :IdCategoria ";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":IdCategoria" => $_SESSION['IdCategoria']))) {
            unset($_SESSION['IdCategoria']);
            $url = "listadocat.php";
            header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Eliminar_Categoria";
        header('Location:'.$url);
    }

    $db = null;


?>