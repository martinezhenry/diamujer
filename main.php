
 <?php
           // session_start();
            if (!isset($_GET['pass']) && !strcmp($_GET['pass'],"1")==0) {
                
               header("Location: .");
              // die();
                
            }
        
        ?>
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
        <title>Women's Day</title>
    </head>
    <body>
       
        <div class="title">
            <label>Congrantulations in your day</label>
        </div>
        <br>
        <div class="mainBox">
            <label>Thank you to take your time and collaboration <?php echo $_GET['name'] ?></label>
        </div>
        <br>
        <div class="mainBox">We send you a little gift to email address on behalf Henry Martínez
        </div>
    
        
    </body>
</html>
