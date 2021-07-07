<?php
function lanzarConsultaPreparadaBuscador($conexion,$pokemon,$consulta_sql){
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if($sentencia_preparada->bind_param("sss",$pokemon,$pokemon,$pokemon)){
            if($sentencia_preparada->execute()){
                if($resultado_consulta = $sentencia_preparada->get_result()){
                    return $resultado_consulta;
                }
            }
        }
    }
}


function lanzarConsultaPreparadaAgregarATabla($conexion,$consulta_sql){
        if($sentencia_preparada = $conexion->prepare($consulta_sql)){
            if($sentencia_preparada->execute()){
                if($resultado_consulta = $sentencia_preparada->get_result()){
                    return $resultado_consulta;
                }
            }
        }
    }
    
function lanzarConsultaPreparadaAgregarABucadorUsuario($conexion,$consulta_sql,$usuario,$contraseña) {
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if ($sentencia_preparada->bind_param("ss",$usuario,$contraseña)) {
           if($sentencia_preparada->execute()){
               if($resultado_consulta = $sentencia_preparada->get_result()){
                   return $resultado_consulta;
               }
           }
        }
    }
}
    
    

function lanzarConsultaPreparadaAgregarAMostrarDetalles($conexion,$consulta_sql,$variable) {
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if ($sentencia_preparada->bind_param("s",$variable)) {
            if($sentencia_preparada->execute()){
                if($resultado_consulta = $sentencia_preparada->get_result()){
                    return $resultado_consulta;
                }
            }
        }
    }
}    
    
    
function lanzarConsultaPreparadaAgregarARellenarForumulario($conexion,$consulta_sql,$variable){
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if ($sentencia_preparada->bind_param("i",$variable)) {
            if($sentencia_preparada->execute()){
                if($resultado_consulta = $sentencia_preparada->get_result()){
                    return $resultado_consulta;
                }
            }
        }
    }
}
    
function insertarConsultaParaSubirArchivo($conexion,$consulta_sql,$campoNombre,$campoDesc,$campoNum,$campoDest,$campoTipo) {
//     $sql = "INSERT INTO pokemones (nombre, descripcion, numero, imagen, tipo) VALUES ('$nombre','$descripcion','$numero','$destino','$tipo')";
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if ($sentencia_preparada->bind_param("sssss",$campoNombre,$campoDesc,$campoNum,$campoDest,$campoTipo)) {
            return $sentencia_preparada->execute();
        }
    }
}
    

function eliminarRegistro($conexion,$consulta_sql,$numero_pokemon){
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if($sentencia_preparada->bind_param("i",$numero_pokemon)){
            return  $sentencia_preparada->execute();
        }
    }
}

function modificarRegistro($conexion,$consulta_sql,$campoNombre,$campoDesc,$campoNum,$campoDest,$campoTipo,$campoID){
    if($sentencia_preparada = $conexion->prepare($consulta_sql)){
        if ($sentencia_preparada->bind_param("issssi",$campoNombre,$campoDesc,$campoNum,$campoDest,$campoTipo,$campoID)) {
            return $sentencia_preparada->execute();
        }
    }
}

?>


