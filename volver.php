<?php
include "Sesiones.php";


iniciaSesion();
if (isset($_SESSION['pagina_anterior'])) {
    header('Location: ' . $_SESSION['pagina_anterior']);
    exit();
} else {
    header('Location: /index.html');
    exit();
}
