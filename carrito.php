<?php
include "Sesiones.php";

iniciaSesion();

$user = $_SESSION['user'];

leerSesion($user);

if ($user == 'error') {
    echo "Error: No se ha proporcionado un usuario.";
} else{
    $carrito = $_SESSION["modelos"];

    echo "<h2>Carrito de $user</h2>";
    echo "<ul>";
    foreach ($carrito as $modelo) {
        echo "<li>$modelo</li>";
    }
    echo "</ul>";
    
    echo "<a href='volver.php'>Volver</a>";
}