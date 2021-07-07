<?php

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    $identificador_original = $_POST['numeroOriginal'];
    $identificador_nuevo = $_POST['numero'];
    $archivo = isset($_FILES["foto"]["name"]) ? $_FILES["foto"]["name"] : null;
    $aceptaImagen = isset($_POST["usarImagen"]) ? false : true;

    include_once ("conexion.php");

    if (empty($nombre) || empty($identificador_nuevo) || empty($tipo) || empty($descripcion) || empty($identificador_original)) {
        header("location: ./modificarPokemon.php?error=faltaAlgunParametro&numero=$identificador_original");
    } else {
        $conexion = conexionBD();

        if ($aceptaImagen && (!isset($_FILES["foto"]) || empty($_FILES))) {
            header("location: ./modificarPokemon.php?error=faltaAlgunParametro&numero=$identificador_original&laputa=madre");
        } else {
            $stmt = $conexion->prepare("SELECT * FROM pokemones WHERE numero = ?");
            $stmt->bind_param("i", $identificador_nuevo);
            $stmt->execute();
            $resultados = $stmt->get_result();
    
            if (($resultados->num_rows) > 0 && $resultados->fetch_assoc()['numero'] != $identificador_original) {
                $stmt->close();
                $resultados->close();
                header("location: ./modificarPokemon.php?error=identificadorRepetido&numero=$identificador_original");
            } else {
                $target_file = '';
                if ($aceptaImagen) {
                    $target_dir = "img-pokemon/";
                    $ext = pathinfo($archivo, PATHINFO_EXTENSION);
                    $timestamp = (new DateTime())->getTimestamp();
                    $nombreArchivo = strval($timestamp);
                    $target_file = $target_dir . $nombreArchivo . "." . $ext;
        
                    function copiarArchivoSubidoDeCarpetaTemporalADestino($destination) {
                        return move_uploaded_file($_FILES["foto"]["tmp_name"], $destination);
                    }
        
                    copiarArchivoSubidoDeCarpetaTemporalADestino($target_file);
                } else {
                    include_once("crearTabla.php");
                    $fila = rellenarFormulario($identificador_original);
                    $target_file = $fila["imagen"];
                }
                include_once 'prepared_statement.php';
                
                $stmt = $conexion->prepare("UPDATE pokemones SET numero = ?, imagen = ?, tipo = ?, nombre = ?, descripcion = ? WHERE numero = ?");
                $stmt->bind_param("issssi", $identificador_nuevo, $target_file, $tipo, $nombre, $descripcion, $identificador_original);
                $stmt->execute();
                $stmt->close();
    
                header("location: ./modificarPokemon.php?ok=todoOk&numero=$identificador_nuevo");
                header("location: ../index.php");
            }
        }
    }
