<?php
require_once 'bbdd.php';
require_once 'func.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $db = conectaBd();
    $nombre_producto = $_REQUEST['NombreProducto'];
    $precio_unidad = $_REQUEST['PrecioUnidad'];
    $unidades_existencia =  $_REQUEST['UnidadesExistencia'];
    
    $consulta = "INSERT INTO producto 
    (NombreProducto, PrecioUnidad, UnidadesExistencia)
    VALUES (:nombre_producto, :precio_unidad, :unidades_existencia)";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":nombre_producto" => $nombre_producto, ":precio_unidad" => $precio_unidad,
        ":unidades_existencia" => $unidades_existencia))) {
        $url = "list1.php";
        header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Grabar_Nuevo_Software";
        header('Location:'.$url);
    }

    $db = null;


?>