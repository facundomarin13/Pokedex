<?php

include_once ("crearTabla.php");

$usuario = $_POST["usuario"];
$password = $_POST["contrasena"];



buscarUsario($usuario, $password);


