<?php

include_once("conexion.php");
include_once 'prepared_statement.php';

$conexion = conexionBD();

$numeroPokemon = $_GET["numero"];


$sql = "DELETE FROM pokemones WHERE numero = ?";

eliminarRegistro($conexion,$sql,$numeroPokemon);

$conexion->close();

header("Location: /pokedexGrupo/index.php");
