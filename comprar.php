<?php
include "Sesiones.php";

iniciaSesion();
$user = $_SESSION['user'];

leerSesion($user);

if ($user == 'error') {
    echo "Error: No se ha proporcionado un usuario.";
} else{
    $modelo = $_GET['modelo'];
    echo "Has seleccionado el modelo $modelo.";

    if (!isset($_SESSION["modelos"])) {
        $_SESSION["modelos"] = [];
    } 

    $_SESSION["modelos"][] = $modelo;

    
    echo "<br><a href='carrito.php'>Ver carrito</a><br>";
    echo "<a href='volver.php'>Volver</a>";

}