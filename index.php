<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="stylo.css">
</head>
<body>

<?php

    include("conexion.php");

    /*estas 2 lineas es lo mismo que la activada de abajo pero simplificada ##
    $conexion=$base->query("SELECT * FROM DATOS_USUARIOS");

    $registros=$conexion->fetchAll(PDO::FETCH_OBJ);*/


    #ALMACENAR EN UN ARRAY
    $registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll (PDO::FETCH_OBJ);

?>

    <h3>CRUD con PHP</h3>
    <table width="50%" border="0" align="center">
        <tr>
            <td class="primera_fila">Id</td>
            <td class="primera_fila">Nombre</td>
            <td class="primera_fila">Apellido</td>
            <td class="primera_fila">Dirección</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr>

        <?php 
            #por cada persona(objeto-variable) que hay dentro del array repite el codigo este foreach
            foreach($registros as $persona):?>

        <tr>
            <td><?php echo $persona->id?></td> 
            <td><?php echo $persona->Nombre?></td>
            <td><?php echo $persona->Apellido?></td>
            <td><?php echo $persona->Dirección?></td>

            <td class="bot"><input type='button' name='del' id='del' value='Borrar'> </td>
            <td class="bot"><input type='button' name='up' id='up' value='Actualizar'> </td>
        </tr>

        <?php
        endforeach;
        ?>


        <tr>
            <td></td>
            <td><input type='text' name='nom' size='10' class='centrado'> </td>
            <td><input type='text' name='apell' size='10' class='centrado'> </td>
            <td><input type='text' name='dire' size='10' class='centrado'> </td>
            <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'> </td>
        </tr>
    </table>
    
</body>
</html>