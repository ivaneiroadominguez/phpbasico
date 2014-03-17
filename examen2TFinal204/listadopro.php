<?php
session_start();
if (!isset($_SESSION['cliente'])) {
    $url="error.php?msg_error=REQUIERE_LOGIN";
    header("Location:".$url);
}
?>

<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="productos">&nbsp;</div>
        <h1>Listado de Productos</h1>
        <h2>Con existencias</h2>
        <h2>Cliente: XXXXX</h2>
         
        <ul>
        <br>
        <li><a href="logout.php">Logout</a></li>
        <br>
<?php
 require_once 'bbdd.php';
 
            $bd = conectaBd();
            $consulta = "SELECT * FROM producto WHERE UnidadesExistencia>10 ORDER By NombreProducto";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                $url = "error.php?msg_error=Listado1_Error_Consulta";
                header('Location:'.$url);
            } else {
                echo "<table border=1 width=100%>";
                echo "<tr>";
                echo "<th>Producto</th>";
                echo "<th>Precio</th>";
                echo "<th>Existencias</th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['NombreProducto']."</td>";
                    echo "<td>".$registro['PrecioUnidad']."</td>";
                    echo "<td>".$registro['UnidadesExistencia']."</td>";
                   
                }
                echo "</table>";
            }
            
            $bd = null;
        ?>               
                   
        </ul>  
    </body>
</html>
