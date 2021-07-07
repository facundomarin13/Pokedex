<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <?php include_once("crearTabla.php"); ?>

        <title>Pokedex</title>
    </head>
    <body class="picachu">
        <?php include("../header.php"); ?>
        <main class="full-screen">
            <?php
                if (is_null($_SESSION["usuario"])){
                    header("Location: /pokedexGrupo/index.php");
                }
                $numeroPokemon = $_GET["numero"];
                $rellenar = rellenarFormulario($numeroPokemon);
            ?>

        <?php
            if (isset($_GET["error"]) && $_GET["error"] == "faltaAlgunParametro") {
                echo "<div class='alert alert-danger m-3' role='alert'>Falto completar algun dato.</div>";
            } else if (isset($_GET["error"]) && $_GET["error"] == "identificadorRepetido") {
                echo "<div class='alert alert-danger m-3' role='alert'>No puede poner un numero de pokemon que ya este registrado.</div>";
            } else if (isset($_GET["ok"]) && $_GET["ok"] == "todoOk") {
                echo "<div class='alert alert-info m-3' role='alert'>Se modifico correctamente.</div>";
            }
        ?>

            <form method="post" enctype="multipart/form-data" action="./doEditarPokemon.php" class="m-3 p-3">
                <div class="form-group bg-black p-4">

                    <h3 class="text-center text-white">Modificar Pokémon</h3>

                    <label for="numero">Número:</label>
                    <input type="number" class="form-control" id="numero" name="numero" value="<?php echo $rellenar["numero"]?>"> <br>
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $rellenar["nombre"]?>" > <br>
                    <label for="tipo">Tipo:</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option selected value="<?php echo $rellenar['tipo']; ?>">Actualmente es <?php echo $rellenar['tipo']; ?></option>
                        <option value="fuego">Fuego</option>
                        <option value="roca">Roca</option>
                        <option value="bicho">Bicho</option>
                        <option value="agua">Agua</option>
                        <option value="psiquico">Psíquico</option>
                        <option value="planta">Planta</option>
                        <option value="electrico">Eléctrico</option>
                    </select><br>
                    <div data-bind="visible: !seleccionadoRadio()">
                        <label for="foto">Elegir foto:</label>
                        <input type="file" class="form-control-file" id="foto" name="foto"><br>
                    </div>
                    <input type="checkbox" name="usarImagen" id="imagen" data-bind="checked: seleccionadoRadio">
                    <label for="imagen">Usar imagen anterior</label><br>
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="8"><?php echo $rellenar["descripcion"]?></textarea>
                    <input type="hidden" name="numeroOriginal" value="<?php echo $rellenar["numero"] ?> ">
                    <br><br><br>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Modificar Pokemon</button>
                    </div>
                </div>
            </form>

        </main>

        <?php
            include("../footer.php");
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.js" integrity="sha512-2AL/VEauKkZqQU9BHgnv48OhXcJPx9vdzxN1JrKDVc4FPU/MEE/BZ6d9l0mP7VmvLsjtYwqiYQpDskK9dG8KBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function ViewModel() {
                self = this;

                self.seleccionadoRadio = ko.observable(false);
            }

            ko.applyBindings(new ViewModel());
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>


