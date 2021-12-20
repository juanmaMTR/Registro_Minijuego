<?php
    session_start();
    //Juan Manuel Toscano Reyes
    require 'operaciones_bd.php';
    $operaciones=new Operaciones();
    $operaciones->cerrarSesion();
?>