<?php
include "Sesiones.php";

iniciaSesion();
$user = $_SESSION['user'];

leerSesion($user);

if ($user == 'error') {
    echo "Error: No se ha proporcionado un usuario.";
} else{
    echo "Bienvenido, $user!";
}
$_SESSION['pagina_anterior'] = $_SERVER['REQUEST_URI'];


echo "<table border='1'>";
echo "<tr><th>Modelos Disponibles</th></</tr>";
$modelos[] = ["Mustang","Camry","Corolla","Fiesta","Focus"];

foreach ($modelos as $modelo) {
    foreach ($modelo as $modelo_individual) {
        echo "<tr><td>$modelo_individual</td><td><a href='comprar.php?modelo=$modelo_individual'>Comprar</a></td></tr>";
    }
}
echo "</table>";
echo "<a href='carrito.php'>Ver mi carrito</a>";
echo "<a href='coches.php'>Volver</a>";

