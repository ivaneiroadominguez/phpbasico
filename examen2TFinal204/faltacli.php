<?php
session_start();
require_once 'func.php';

$_SESSION['datos'] = (isset ($_SESSION['datos']))?
        $_SESSION['datos']:Array ("", "", "");
$_SESSION['errores'] = (isset ($_SESSION['errores']))?
        $_SESSION['errores']:Array (FALSE, FALSE, FALSE);
$_SESSION['hayErrores'] = (isset ($_SESSION['hayErrores']))?
        $_SESSION['hayErrores']:FALSE;


?>


<html>
    <head>
        <title>Examen 2TFinal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="formulario">&nbsp;</div>
        <h1>Registro Cliente</h1>
        <ul>         
        <li><a href="acceso.php">Listado</a></li>
        </ul>
        <form action="galtacli.php" method="GET">
            <div>Email: <input type="text" name="email" 
                           value="<?php echo $_SESSION['datos'][0]; ?>"/>
            </div>
            <div>Password<input type="password" name="password"
                           value="<?php echo $_SESSION['datos'][1]; ?>"/>
            </div>
             <div>Nombre <input type="text" name="nombre"
                           value="<?php echo $_SESSION['datos'][2]; ?>"/>
            </div>
            <input type="submit" value="Grabar" />
        </form>
    </body>
</html>