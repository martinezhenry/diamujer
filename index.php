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
        <?php
        
        ?>
        <div class="title">
            <label>Hello, first we need to know you.</label>
        </div>
        <br>
        <div class="form-main mainBox">
            <div>
                <label>Please, can you tell us the next information about you?</label>
            </div>
            <form action="sender.php" method="POST">
                <div><input required focus placeholder="Name" type="text" name="txtName"/></div>
                <div><input required placeholder="Surname" type="text" name="txtSurname"/></div>
                <div><input placeholder="Birth Date (yyyy-mm-dd)" type="date" name="txtBirthDate"/></div>
                <div><input required placeholder="Email" type="email" name="txtEmail"/></div>
                <div><button class="btn" type="submit">Submit</button></div>
            </form>
        </div>
        
    </body>
</html>
