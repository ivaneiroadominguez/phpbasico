<?php 
require_once 'index.php';
require_once 'func.php'; 
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Examen 2TFinal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="formulario">&nbsp;</div>
        <h1>Confirmar Borrado</h1>
        <ul>
        <li><a href="index.php">Inicio</a></li>            
        <li><a href="listadocat.php">Listado</a></li>
        </ul>
        
        <?php
$_SESSION['Id'] = (isset($_REQUEST['Id']))?
            $_REQUEST['Id']:0;

$bd = conectaBd();
$consulta = "SELECT * FROM categorias WHERE IdCategoria=".$_SESSION['IdCategoria'];
$resultado = $bd->query($consulta);

if (!$resultado) {
       $url = "error.php?msg_error=Error_Consulta_Confirmar_Eliminar";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Registro_Software_inexistente";
           header('Location:'.$url);
       } else {
           echo "Titulo=".$registro['titulo']."<br/>";
           echo "URL = ".$registro['url']."<br/>";
           echo "<a href='borrar.php'>Confirmar Eliminar</a><br/>";
           echo "<a href='listadocat.php'>Volver a Listado</a><br/>";
       }
}  
?>
        
    </body>
</html>
