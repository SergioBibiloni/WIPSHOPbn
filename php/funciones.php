<?php

$host = "localhost";
$user = "edib";
$password = "";
$db = "wipshop";



function registro($pdo, $nombre, $email, $contraseña, $confContra)
{

    $validacionFormulario = validarRegistro($pdo, $nombre, $email, $contraseña, $confContra);

    /* En caso de que la funcion validar formulario haya devuelto un true se ejecutara el insert */
    if ($validacionFormulario == true) {

        $consulta = "INSERT INTO `user` (`nombre`, `email`, `pasword`) VALUES (:nombre, :email, :contrasena)";
        $stmt = $pdo->prepare($consulta);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $contraseña);
        $resultado = $stmt->execute();

        if ($resultado) {
            return true;

        } else {
        }
    }
}


function validarRegistro($pdo, $nombre, $email, $contraseña, $confContra)
{

    $error = 0;

    if (($nombre == "") && empty($nombre)) {

        /* COMROBAR CAMPO NOMBRE INCOMPLETO O VACIO */
        $error = 1;
        header("Location: error.php?error=$error");
        exit;
    }

    /* COMROBAR QUE NO HAYA NUMEROS EN EL CAMPO NOMBRE */
    if (preg_match('/[A-Za-z]+$/', $nombre)) {

    } else {

        $error = 2;
        header("Location: error.php?error=$error");
        exit;

    }

    // COMROBAR EL FORMATO DEL GAMIL
    if (preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $email)) {
    } else {

        $error = 3;
        header("Location: error.php?error=$error");
        exit;
    }
    /* COMROBAR QUE EN LA CONTRASEÑA HAYA COMO MINIMO UN NUMERO */
    if (preg_match('/[0-9]/', $contraseña)) {
    } else {
        $error = 4;
        header("Location: error.php?error=$error");
        exit;
    }

    /* COMROBAR QUE AL MENOS TENGA 6 CARACTERES */
    if (strlen($contraseña) < 6) {
        $error = 5;
        header("Location: error.php?error=$error");
        exit;
    }

    /* COMROBAR QUE LAS CONTRASEÑAS SEAN IGUALES */
    if ($contraseña == $confContra) {
    } else {
        $error = 6;
        header("Location: error.php?error=$error");
        exit;
    }

    /*COMPROBAR SI EL CORREO INTRODUCIDO YA EXISTE*/
    $comprobacionemail = comprobarUsuarioRegistrado($pdo, $email);

    if ($comprobacionemail == true) {

        $error = 7;
        header("Location: error.php?error=$error");
        exit;

    }

    /*COMPROBAR SI LOS CAMPOS ESTAN VACIOS*/
    if (($nombre == "") || ($email == "") || ($contraseña == "") || ($confContra == "")) {
        $error = 10;
        header("Location: error.php?error=$error");
        exit;
    }

    return true;

}


function cerrarSesion()
{

    session_start();
    session_destroy();

    header("location: ../pages/index.php");
}

function comprobarUsuarioRegistrado($pdo, $email)
{

    $consulta = "SELECT `nombre` FROM user WHERE email = :email";
    $stmt = $pdo->prepare($consulta);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultado = $stmt->fetch();

    if ($resultado) {
        //Ya existe un usuario con ese email
        return true;
    } else {
        //No existe un usuario con ese email
        return false;
    }



}


function comprobarUser($pdo, $correo, $contraseñaLog)
{

    $comprobacionUsuario = comprobarUsuarioRegistrado($pdo, $correo);

    /*ERROR DE LOG IN SI EL CORREO INTRODUCIDO NO EXISTE*/
    if ($comprobacionUsuario == false) {

        $error = 8;
        header("Location: error.php?error=$error");
        exit;

    } else {

        
        /*SI EL CORREO ES EXISTENTE SE COMPRUEBA LA CONTRASEÑA*/
        $consulta = "SELECT `pasword` FROM user WHERE email = '$correo'";
        $stmt = $pdo->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $count = $resultado['pasword'];


        if ($count == $contraseñaLog) {
            //SI EL LOG IN CUMPLE PASA A INICIAR SESIÓN

            $consulta = "SELECT `nombre` FROM user WHERE email = '$correo'";
            $stmt = $pdo->prepare($consulta);
            $stmt->execute();
            $resultado = $stmt->fetch();

            $nombre = $resultado["nombre"];

            session_start();
            $_SESSION['nombre'] = $nombre;
            $_SESSION['email'] = $correo;
            $_SESSION['logueado'] = true;

            /*VAMOS A INDEX.PHP Y AHI DETECTARÁ QUE LA SESIÓN HA INICIADO, POR LO CUAL */
            /*YA NO APARECERA EL MENSAJE DE REGISTRO O INICIO DE SESIÓN */
            header('location: ../pages/index.php');

        } else {
            $error = 9;
            header("Location: error.php?error=$error");
            exit;

        }

    }


}



?>




<bu