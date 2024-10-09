<?php

function iniciaSesion(){
    session_start();
}

function cerrarSesion(){
    session_destroy();
}

function leerSesion($user){
    if (isset($_SESSION[$user])){
        return $_SESSION[$user];
    } else{
        return "error";
    }
}

function escribirSesion($clave, $valor){
    $_SESSION[$clave] = $valor;
}

function Login($user){
    iniciaSesion();
    $_SESSION['user'] = $user;
}

function logout(){
    session_unset();
    cerrarSesion();
}

function estaLogeado(){
    return isset($_SESSION['user']);
}