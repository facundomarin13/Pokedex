<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <?php include_once("crearTabla.php") ?>
    <title>Pokedex</title>
</head>
<body class="picachu">

<?php include("../header.php"); ?>

<main>
    <form method="post"  enctype="multipart/form-data" action="buscador.php">
        <div class="input-group mb-3 mt-4">
            <input type="text" name="buscar"  id="buscar" class="form-control" placeholder="Nombre, número, tipo..." aria-label="buscar">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">Buscar Pokémon</button>
            </div>
        </div>
    </form>

    <div class="table-responsive mt-3 mb-0">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Imagen</th>
                <?php if (isset($_SESSION["usuario"]) && $_SESSION["estado"]=1) {
                    echo "<th scope = 'col'> Modificar</th>";
                    echo "<th scope = 'col'> Borrar</th >";
                }
                ?>
            </tr>
            </thead>
            <tbody>
            <?php

            $pokemon = $_POST["buscar"];


            buscar($pokemon);
            ?>
            </tbody>
        </table>
    </div>

    <?php

    if (isset($_SESSION["usuario"]) && $_SESSION["estado"]=1) {

        echo "<div class='text-center'>";

        echo "<a href='agregarPokemon.php' class='btn btn-dark mt-3'>Agregar Pokemon</a>";

        echo "</div>";
    }
    ?>


</main>

<?php

include("../footer.php");

?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>





