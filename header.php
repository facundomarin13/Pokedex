<header>

    <div class="encabezado">
        <h1 class="titulo-pokedex">Pokédex<h1>

    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-black p-0 ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-4">
                <li class="nav-item active">
                    <a class="nav-link" href="/pokedexGrupo/index.php">INICIO </a>
                </li>

                <?php
                if (isset($_SESSION["usuario"]) && $_SESSION["estado"]==1) {

                    echo "<li class='nav-item'>";
                    echo "<a href='' class='nav-link'> Bienvenido ". $_SESSION["usuario"]." </a>";
                    echo "</li>";


                 }else{
                        echo "<li class='nav-item'>";
                        echo "<a href='' class='nav-link' data-toggle='modal' data-target='#iniciar'>Iniciar sesión</a>";
                        echo "</li>";
                    }

                ?>

                <?php

                if (isset($_SESSION["usuario"]) && $_SESSION["estado"]==1) {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href = '/pokedexGrupo/recursos/agregarPokemon.php' > Agregar pokémon </a>";
                    echo "</li >";

                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href = '/pokedexGrupo/recursos/logout.php' > Desloguearse </a>";
                    echo "</li >";
                }
               ?>


            </ul>
        </div>
    </nav>

    <div class="modal fade" id="iniciar" tabindex="-1" role="dialog" aria-labelledby="iniciar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title text-center" id="iniciar">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-black">
                    <form method="post" enctype="multipart/form-data" action="/pokedexGrupo/recursos/iniciarSesion.php" class=" m-3 p-3">
                        <div class="form-group bg-black p-4">

                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario"> <br>
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena"> <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark">Ingresar</button>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>
