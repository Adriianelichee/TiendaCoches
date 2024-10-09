<?php
include "Sesiones.php";

iniciaSesion();
$user = $_SESSION['user'];


if (leerSesion($user)) {
    logout();
    header('Location: index.html');
    exit();
}
