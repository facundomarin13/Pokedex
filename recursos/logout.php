<?php
session_start();

session_destroy();

header("Location: /pokedexGrupo/index.php");