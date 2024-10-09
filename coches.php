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

escribirSesion("pagina_anterior", $_SERVER['REQUEST_URI']); 



echo "<table border='1'>";
echo "<tr><th>Marca</th><th>Enlace</th></</tr>";
$marcas[] = ["BMW","Audi","Ford"];

foreach ($marcas as $marca) {
    foreach ($marca as $marca_individual) {
        echo "<tr><td>$marca_individual</td><td><a href='$marca_individual.php'>Enlace a $marca_individual</a>\n</td></tr>";
    }
}
echo "</table>";
echo "<a href='carrito.php'>Ver mi carrito</a>";
echo "<a href='logout.php'>Cerrar sesion</a>";
