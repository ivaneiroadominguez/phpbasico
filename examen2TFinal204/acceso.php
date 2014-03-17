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
        <div class="login">&nbsp;</div>
        <h1>Acceso Clientes</h1>
        <ul>
        <li><a href="index.php">Inicio</a></li>      
        <li><a href="faltacli.php">Registro nuevo cliente</a></li>  
        </ul>
        <form action="login.php" method="POST">
            <div>Email: <input type="text" name="email" /></div>
            <div>Password: <input type="password" name="password" /></div>
            <div><input type="submit" value="Entrar" /></div>
        </form>
    </body>
</html>
