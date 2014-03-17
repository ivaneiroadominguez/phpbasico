<?php
require_once 'bbdd.php'; 
require_once 'func.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Examen 2TFinal</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="productos">&nbsp;</div>
        <h1>Listado de Categor&iacute;as</h1>
                <ul>
        <li><a href="index.php">Inicio</a></li>            
        <li><a href="faltacat.php">Alta Categor&iacute;a</a></li>
        </ul>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM categorias ORDER By NombreCategoria";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                $url = "error.php?msg_error=Listado1_Error_Consulta";
                header('Location:'.$url);
            } else {
                echo "<table border=1 width=100%>";
                echo "<tr>";
                echo "<th>Categoria</th>";
                echo "<th>Descripci&oacute;n</th>";
                echo "<th></th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".strtoupper ($registro['NombreCategoria'])."</td>";
                    echo "<td>".$registro['Descripcion']."</td>";
                    echo "<td><a href='cborrar.php'>Borrar</a></td>";
                   
                }
                echo "</table>";
            }
            
            $bd = null;
        ?>   
    </body>
</html>
