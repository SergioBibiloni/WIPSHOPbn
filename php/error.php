<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/logo_footer.ico">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estiloserror.css">
    <title>Error al registrarse</title>
</head>
<body class="bodyRegistro">
<div class="containerRegistro">
<section class="bloque3">
            <a href="intro.html" class="wippshoppText">WIP - SHOP</a><br></br>
            <hr class="separador">
            <img class="logoregistro" src="../img/logocuenta.svg">
</section>
    <?php
    
    $error = $_GET['error'];

    if ($error == 1) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "Debe rellenar el campo nombre ";
    }

    if ($error == 2) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "No puede haber numeros en el campo nombre";
    }

    if ($error == 3) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "Debe introducir un correo válido";
    }

    if ($error == 4) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "La contraseña debe tener solo numeros";
    }

    if ($error == 5) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "La contraseña debe tener al menos 6 caracteres";
    }

    if ($error == 6) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "Las contraseñas deben ser iguales";
        
    }

    if ($error == 7) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "Ya existe un usuario con ese correo introducido";
    }
   


    if ($error == 8) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "¡Error al efecutar el inicio de sesión! El correo no corresponde a ningun usuario existente";
    }
    if ($error == 9) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "¡Error al efecutar el inicio de sesión! Contraseña incorrecta";
    }   
    if ($error == 10) {
        echo "Woops!! ha surgido un error ";
        echo"<br><br>";
        echo "No puedes dejar todos los campos vacios";
    }

    ?>
</div>
<br><br>

<button class="botonatrr" onclick="window.history.back()">Volver atrás</button>


</body>

</html>