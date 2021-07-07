<?php

include_once("conexion.php");
include_once 'prepared_statement.php';

function agregarATabla($recurso){
    $conexion = conexionBD();
    $sql = "SELECT * FROM pokemones ORDER BY numero ASC";
    $resultado_consulta_preparada = lanzarConsultaPreparadaAgregarATabla($conexion,$sql);
    while($fila = $resultado_consulta_preparada->fetch_assoc()){
        echo "<tr>";
        echo "<th>" . $fila["numero"] . "</th>";
        echo "<td><a class='vinculosDetalle' href='/pokedexGrupo/recursos/pokemon.php?nombre=".$fila["nombre"]."' >" . $fila["nombre"] . "</a></td>";
        echo "<td><img  src=".$recurso."imagenes/".$fila["tipo"].".gif"." > </td>";
        echo "<td class='text-center'><img  class='imagenes-tabla' src=".$recurso.$fila["imagen"]." ></td>";
        if (isset($_SESSION["usuario"]) && $_SESSION["estado"]==1) {
            echo "<td><a class='btn btn-warning p-1' href='/pokedexGrupo/recursos/modificarPokemon.php?numero=" . $fila["numero"] . "' >Modificar</a></td>";
            echo "<td><a class='btn btn-danger p-1' href='/pokedexGrupo/recursos/borrarPokemon.php?numero=" . $fila["numero"] . "' >Borrar</a></td>";
        }
        echo"</tr>";
        
    }
    $resultado_consulta_preparada->close();
    $conexion->close();
    
}

function mostrarDetalles ($pokemon){
    
    $conexion = conexionBD();
    
    $sql = ("SELECT nombre, descripcion, numero, imagen, tipo FROM pokemones WHERE UPPER(nombre) LIKE UPPER(?)");
    
    $resultado = lanzarConsultaPreparadaAgregarAMostrarDetalles($conexion, $sql, $pokemon);
    
    $fila= $resultado->fetch_assoc();
    
    echo "<article class='col-12 col-lg-6 text-center mt-3'>";
    echo "<div><img src='imagenes/titulopokemon.png' class='img-fluid titulo-pokemon'></div>";
    echo "<img class='img-fluid imagenes-detalle' src=".$fila['imagen'].">";
    echo "</article>";
    echo "<article class='col-12 col-lg-6 mt-3'>";
    echo "<h2 class='text-center'><img src="."./imagenes/".$fila['tipo'].".gif".">". $fila["nombre"]."</h2>";
    echo "<p class='mt-3'>  " . $fila['descripcion'] ."  </p>";
    echo "</article>";
    
    $conexion->close();
    
    
}

function rellenarFormulario ($numeroPokemon){
    include_once 'prepared_statement.php';
    
    $conexion = conexionBD();
    $sql = "SELECT ID, nombre, descripcion, numero, imagen, tipo FROM pokemones WHERE numero = ?";
    $resultado = lanzarConsultaPreparadaAgregarARellenarForumulario($conexion, $sql, $numeroPokemon);
    return $resultado->fetch_assoc();
    
    $conexion->close();
}

function buscar($pokemon){

    $conexion=conexionBD();
    $sql = "SELECT * FROM pokemones WHERE numero = ? OR nombre LIKE ? OR tipo LIKE ?";
    $resultado_consulta_preparada = lanzarConsultaPreparadaBuscador($conexion,'%'.$pokemon.'%',$sql);

    if ($resultado_consulta_preparada->num_rows > 0) {
        while($fila = $resultado_consulta_preparada->fetch_assoc()){
            echo "<tr>";
            echo "<th>" . $fila['numero'] . "</th>";
            echo "<td><a class='vinculosDetalle' href='pokemon.php?nombre=".$fila['nombre']."' >" . $fila['nombre'] . "</a></td>";
            echo "<td><img  src="."./imagenes/".$fila['tipo'].".gif"." > </td>";
            echo "<td class='text-center'><img  class='imagenes-tabla' src=".$fila['imagen']." ></td>";
            if (isset($_SESSION["usuario"]) && $_SESSION["estado"]==1) {
                echo "<td><a class='btn btn-warning p-1' href='modificarPokemon.php?numero=" . $fila['numero'] . "' >Modificar</a></td>";
                echo "<td><a class='btn btn-danger p-1' href='borrarPokemon.php?numero=" . $fila['numero'] . "' >Borrar</a></td>";
            }
            echo"</tr>";

        }

    } else {

        echo "<div class='alert alert-danger' role='alert'>No se encontro Pokémon</div>";

        $asd="";
        agregarATabla($asd);

    }


    $conexion->close();


}

function buscarUsario($usuario, $pw){
    include_once 'prepared_statement.php';
    $conexion = conexionBD();
    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?";
    $resultado_consulta = lanzarConsultaPreparadaAgregarABucadorUsuario($conexion, $sql, $usuario, $pw);
    $users = $resultado_consulta->fetch_assoc();
    
    if ($users["usuario"] == $usuario && $users["contraseña"] == $pw) {
        
        session_start();
        $_SESSION["estado"] = 1;
        $_SESSION["usuario"] = $usuario;
        
        header("Location: /pokedexGrupo/index.php");
        $conexion->close();
    } else {
        
        header("Location: /pokedexGrupo/index.php?error=UsuarioInvalido");
        $conexion->close();
    }
    
    
    $conexion->close();
    
}

