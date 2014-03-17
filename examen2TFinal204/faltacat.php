<!DOCTYPE html>
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
        <h1>Alta Categor&iacute;a</h1>
         <ul>           
        <li><a href="listadocat.php">Listado</a></li>
        </ul>
        <form action="galtacat.php" method="GET">
            <div>Nombre Categor&iacute;a: <input type="text" name="NombreCategoria"/>
            </div>
            <div>Descripci&oacute;n <input type="text" name="Descripcion"/></div>
            </div>
            <input type="submit" value="Grabar" />
        </form>
    </body>
</html>