<?php
require_once 'bbdd.php';
require_once 'func.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $db = conectaBd();
    $nombre_categoria = $_REQUEST['NombreCategoria'];
    $texto_descripcion = $_REQUEST['Descripcion'];
    
    $consulta = "INSERT INTO categorias 
    (NombreCategoria, Descripcion)
    VALUES (:NombreCategoria, :Descripcion)";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":NombreCategoria" => $nombre_categoria, ":Descripcion" => $texto_descripcion))) {
        $url = "listadocat.php";
        header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Añadir_Nueva_Categoria";
        header('Location:'.$url);
    }

    $db = null;


?>