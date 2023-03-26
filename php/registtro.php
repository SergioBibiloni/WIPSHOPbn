
<?php



/* variables del formulario */
$nombreRegistro = $_POST["nombre"];
$correoRegistro = $_POST["email"];
$contraseñaRegistro = $_POST["contrasena"];
$confContraseñaRegistro = $_POST["contrasena2"];

/* archivo PHP funciones */
include 'funciones.php';

/*  acceso a la base de datos */
$host = "localhost";
$db = "wipshop";
$user = "root";
$password = "";


try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    
    $registradoValidacion = registro($pdo,$nombreRegistro,$correoRegistro,$contraseñaRegistro,$confContraseñaRegistro);
    
    if ($registradoValidacion) {
        
        echo "<a>Te has registrado correctamente</a>";
        echo "</br>";
        echo "<a href='../pages/login.html'><button>Inicia Sesión</button></a>";
    }


} catch(PDOException $e) {

    echo "<h1>Error, no se pudo conectar a la base de datos</h1>"; 

}


?>