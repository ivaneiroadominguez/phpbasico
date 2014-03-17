<?php
session_start();
require_once 'bbdd.php';
require_once 'func.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validarDatosRegistro() {
    // Recuperar datos Enviados desde faltacli.php
    $datos = Array();
    $datos[0] = (isset($_REQUEST['Email']))?
            $_REQUEST['Email']:"";
    $datos[1] = (isset($_REQUEST['Password']))?
            $_REQUEST['Password']:"";
    $datos[2] = (isset($_REQUEST['Nombre']))?
            $_REQUEST['Nombre']:"";

    //-----validar ---- //
    $errores = Array();
    $errores[0] = !validarEmail($datos[0]);
    $errores[1] = !validarPassword($datos[1]);
    
}

validarDatosRegistro();
if ($_SESSION['hayErrores']) {
    $url = "error.php";
    header('Location:'.$url);
}else{

    $db = conectaBd();
    $email = $_SESSION['datos'][0];
    $password = $_SESSION['datos'][1];
    $nombre =  $_SESSION['datos'][2];
    
    $consulta = "INSERT INTO cliente 
    (email, password, nombre)
    VALUES (:email, :password, :nombre)";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":email" => $email, ":password" => $password,
        ":nombre" => $nombre))) {
        
        unset ($_SESSION['datos']);
        unset ($_SESSION['errores']);
        unset ($_SESSION['hayErrores']);
        
        $url = "listadocat.php";
        header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Grabar_Nuevo_cliente";
        header('Location:'.$url);
    }

    $db = null;
}

?>