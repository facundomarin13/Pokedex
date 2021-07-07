<?php

include_once ("conexion.php");

$numero= $_POST["numero"];
$nombre= $_POST["nombre"];
$tipo=  $_POST["tipo"]  ;
$descripcion = $_POST["descripcion"];
$foto= $_FILES["foto"]["name"];
$extencion= substr($foto, -4 );
$conexion = conexionBD();
$destino = "img-pokemon/" . $nombre . $extencion;

if ($_FILES ["foto"]["error"] > 0){

    echo "el archivo no se subio";

} else {

    move_uploaded_file($_FILES ["foto"]["tmp_name"], $destino );
}

include_once 'prepared_statement.php';
$sql = "INSERT INTO pokemones (nombre, descripcion, numero, imagen, tipo) VALUES (?,?,?,?,?)";
insertarConsultaParaSubirArchivo($conexion,$sql,$nombre,$descripcion,$numero,$destino,$tipo);
$conexion->close();

header("Location: /pokedexGrupo/index.php");


