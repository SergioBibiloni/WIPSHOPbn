<?php

    $correo = $_POST["email"];
    $contraseñaLog = $_POST["pasword"];

  /* archivo PHP funciones */
include 'funciones.php';

/* acceso a la base de datos */
$host = "localhost";
$user = "root";
$password = "";
$db = "wipshop";


try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    comprobarUser($pdo,$correo,$contraseñaLog);

}catch(PDOException $e) {

    echo 'No se ha podido conectar a la base de datos';

}

?>