<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <h3>Actualizar</h3>

<?php
    include("conexion.php");

    #IF ! isset(niega)
    if(!isset($_POST["bot_actualizar"])){


    $id=$_GET["id"];

    $nom=$_GET["nom"];

    $apell=$_GET["apell"];

    $dire=$_GET["dire"];

    }else{

        $id=$_POST["id"];

        $nom=$_POST["nom"];

        $apell=$_POST["apell"];

        $dire=$_POST["dire"];

        $sql="UPDATE datos_usuarios SET Nombre=:miNom, Apellido=:miApell, Dirección=:miDire WHERE id=:miid";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":miid"=>$id, ":miNom"=>$nom, ":miApell"=>$apell, ":miDire"=>$dire));

        header("Location:index.php");
    }


?>

    <p></p>
    <p>&nbsp</p>

    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table width="25%" border="0" align="center">
            <tr>
                <td></td>
                <td><label for="id"></label><input type="hidden" name="id" id="id"><?php echo $id ?></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="nom"></label><input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><label for="apell"></label><input type="text" name="apell" id="apell" value="<?php echo $apell ?>"></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><label for="dire"></label><input type="text" name="dire" id="dire" value="<?php echo $dire ?>" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
            </tr>
        </table>
    </form>

    <p>&nbsp</p>


    
</body>
</html>