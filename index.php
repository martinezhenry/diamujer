<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="main.css" >
        <title>D&iacute;a De La Mujer</title>
    </head>
    <body>
        <?php
        
            if (isset($_POST['txtPalabra']) && strcmp(strtoupper(trim($_POST['txtPalabra'])), strtoupper("EMPANADA")) == 0) {
                //session_start();
                
               header("Location: main.php?pass=1");
               die();
                
            } else {
                $_COOKIE['valid'] = "nopass";
            }
        
        ?>
        <div class="title">
            <label>Antes que nada queremos saber que eres la persona correcta.</label>
        </div>
        <br>
        <div class="form-main">
            <label>Por favor ingresa la(s) palabra(s) de acceso</label>
            <form action="." method="POST">
                <input type="text" name="txtPalabra"/>
                <button class="btn" type="submit">Enviar</button>
            </form>
        </div>
        
    </body>
</html>
