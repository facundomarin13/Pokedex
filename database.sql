-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2020 a las 01:40:27
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokedexGrupo`
--
CREATE SCHEMA IF NOT EXISTS `pokedexGrupo`;
USE `pokedexGrupo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemones`
--

CREATE TABLE `pokemones` (
  `ID` smallint(5) UNSIGNED NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `numero` smallint(5) UNSIGNED NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemones`
--

INSERT INTO `pokemones` (`ID`, `nombre`, `descripcion`, `numero`, `imagen`, `tipo`) VALUES
(1, 'Charmander', 'Charmander es un pequeño lagarto bípedo. Sus características de fuego son resaltadas por su color de piel anaranjado y su cola con la punta envuelta en llamas. Charmander, como sus evoluciones Charmeleon y Charizard, tiene una pequeña llama en la punta de su cola. La intensidad con la que ésta arde es un indicador del estado físico y emocional de este Pokémon. Cuando la intensidad de la llama está baja, su salud puede estar en riesgo. Cuando arde con normalidad, Charmander está saludable y alegre. Cuando la llama de su cola arde con más intensidad, es porque está enfadado, y si la llama de su cola se vuelve azul es porque encontró un rival fuerte y digno de el. Si la llama desaparece o se apaga, Charmander moriría.', 4, 'img-pokemon/Charmander.png', 'fuego'),
(2, 'Squirtle', 'Squirtle habita tanto aguas dulces como marinas, preferiblemente zonas profundas. Son pequeñas tortugas color celeste con caparazones color café; o rojas en algunos casos, con una cola enrollada que los distingue. Poco después de nacer, sus caparazones se endurecen y se hacen más resistentes a los ataques; muchos objetos rebotarán en ella. La forma redonda de su caparazón y las figuras en su superficie hacen que Squirtle tenga una muy buena forma hidrodinámica, lo que le da mayor velocidad al nadar. Cuando se siente atacado, Squirtle esconde completamente su cuerpo en el interior de su caparazón, lo que hace que resulte imposible atacarle, además cuando esta dentro de su caparazón puede atacar escupiendo agua por todos los agujeros del caparazón. Es capaz de escupir agua por su boca con gran fuerza, ya sea para atacar o intimidar. Squirtle es relativamente fácil de criar gracias a su destacado carácter alegre y simpático, aunque su relativa lentitud en tierra firme y la dificultad para equilibrar sus ataques acuáticos con ataques de otros tipos pueden crear algunos problemas al entrenador. Squirtle normalmente come algas, pero también le gustan otros alimentos como la fruta. En tierra firme, a Squirtle le puede resultar un poco mas difícil andar, pero le resulta mas fácil ir a cuatro patas. El hábitat de Squirtle es el agua dulce, este Pokémon habita en lugares como estanques, ríos y lagos. También puede vivir en mares. Se encuentran es islas junto con sus evoluciones.', 7, 'img-pokemon/Squirtle.png', 'agua'),
(3, 'Pikachu', 'Pikachu almacena una gran cantidad de electricidad en sus mejillas. Estas parecen cargarse eléctricamente durante la noche mientras duerme. Las mejillas de Pikachu también pueden ser recargadas mediante una descarga eléctrica, como se ha podido observar en algunos episodios del anime. A veces suelta unas pequeñas descargas cuando se acaba de despertar.\r\nLas mejillas son las que generan electricidad, pero esta es conducida y descargada por la punta de su cola produciendo descargas eléctricas, que aumentan de poder dependiendo del estado de ánimo de Pikachu. Muchas veces, en las tormentas se juntan y absorben electricidad de los relámpagos.', 25, 'img-pokemon/Pikachu.png', 'electrico'),
(5, 'Bulbasaur', 'Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas. Su cabeza representa cerca de un tercio de su cuerpo. En su frente se ubican tres manchas que pueden cambiar dependiendo del ejemplar. Tiene orejas pequeñas y puntiagudas. Sus ojos son grandes y de color rojo. Las patas son cortas con tres garras cada una. Este Pokémon tiene plantado un bulbo en el lomo desde que nace. Esta semilla crece y se desarrolla a lo largo del ciclo de vida de Bulbasaur a medida que suceden sus evoluciones. El bulbo absorbe y almacena la energía solar que Bulbasaur necesita para crecer. Dicen que cuanta más luz consuma la semilla, más olor producirá cuando se abra. Por otro lado, gracias a los nutrientes que el bulbo almacena, puede pasar varios días sin comer.', 1, 'img-pokemon/Bulbasaur.png', 'planta'),
(13, 'Charizard', 'La figura de Charizard es la de un dragón erguido sobre sus dos patas traseras, que sostienen su peso. Posee unas poderosas alas y un abrasador aliento de fuego. También posee un predominante cuello y una poderosa cola terminada en una llama que arde con más fuerza si ha vivido duras batallas. Su sangre es muy caliente y la mantiene constante a pesar de ser un reptil; debido al fuego de su cola. Se dice que si su temperatura descendiera por lo menos 2 grados centígrados, la función de los eritrocitos de almacenar hemoglobina sería imposible. Es por esa razón que mantiene una llama ardiente en la punta de la cola, si esta disminuye o se apaga el Pokémon puede morir.\r\nCharizard es considerado uno de los Pokémon más fuertes (aunque sus estadísticas no sean de las más altas), pudiendo llegar a ganar a Pokémon legendarios, como se ve en el EP413, en el que el Charizard de Ash gana al Articuno de Sabino. También se le ha visto hacer frente a Pokémon enormemente fuertes, como Dragonite, saliendo victorioso.', 6, 'img-pokemon/Charizard.png', 'fuego'),
(14, 'Kadabra', 'Kadabra no es muy fuerte a lo que respecta a ataques físicos, por el contrario, psíquicamente se podría decir que es uno de los mejores luchadores, además de ser muy veloz, lo que lo convierte en un Pokémon bastante bueno. Kadabra es un Pokémon difícil de entrenar y comúnmente lo poseen entrenadores con poderes psíquicos ya que es más factible su relación con este Pokémon.\r\nUtiliza una cuchara de plata para amplificar las ondas alfa de su cerebro y aumentar el poder de sus ataques, sin ella queda limitado su poder telequinético a la mitad. También la utiliza para hacer su movimiento característico: kinético.\r\nEn su frente se aprecia una estrella y en su pélvis tres líneas onduladas, los cuales son 2 de los 5 símbolos de la baraja Zener, un metodo utilizado en los años 20 para poner a prueba a supuestos clarividentes y adivinos.', 64, 'img-pokemon/Kadabra.png  ', 'psiquico'),
(15, 'Chikorita', 'Este dócil Pokémon hoja, de color verde claro, se alimenta con rayos solares mediante la fotosíntesis que ocurre cuando éstos impactan en su cuerpo o en su hoja. Esta hoja tiene propósitos múltiples: sirve tanto para detectar la temperatura en la atmósfera y la humedad, lo que le ayuda a encontrar lugares cálidos; como de adorno que resalta el hecho de que pertenece al tipo planta. Por otro lado, puede emanar un suave y agradable aroma que procede de su hoja que calma a quienes tenga alrededor. Esto puede ser usado como una ventaja en batalla.\r\nParece estar basado en una cría de dinosaurio o una lagartija. Además, posee una especie de collar alrededor de su cuello, compuesto de pequeñas semillas. Estas empiezan a crecer mientras evolucionan, pasando a semillas a punto de germinar hasta convertirse en pétalos, similar a lo que le pasa a Bulbasaur al evolucionar. Sus ojos son de color rojo y al evolucionar a Meganium, se vuelven amarillos.\r\nPese a su carácter normalmente algo asustadizo y tímido; si se les reta a un combate es muy probable que lo acepten, y si la oportunidad lo amerita, darán muestras de valentía. Aunque este tipo de valentía solo lo demuestran Chikorita de una montaña específica. Chikorita coge cariño fácilmente a su entrenador, y a veces puede ser un poco celoso.', 152, 'img-pokemon/Chikorita.png', 'planta'),
(16, 'Pichu', 'Pichu tiene una piel de color amarillo pálido, con las mejillas rosadas, una cola corta negra y orejas grandes, con bordeados de color negro. Su pequeño tamaño puede despistar a cualquier entrenador novato, pero puede paralizar incluso a humanos adultos.\r\nLa energía eléctrica que se concentra en sus pequeñas mejillas es muy fuerte y al igual que Pikachu la electricidad que se almacena en estas es conducida hacia su cola, la cual es muy corta y por esa razón suele lastimarse a si mismo ya que la energía eléctrica no es conducida correctamente, por lo que, si usara trueno, acabaría debilitándose, pero esto no pasa en los videojuegos. Pichu se carga de electricidad más fácilmente los días tormentosos que cuando el aire es seco. De hecho, uno puede oír el sonido de la electricidad estática en las mejillas de este Pokémon. Se sabe que el profesor Elm descubrió que Pikachu tenía preevolución, la cual es Pichu.', 172, 'img-pokemon/Pichu.png  ', 'electrico'),
(17, 'Ivysaur', 'vysaur posee un color azulado más vivo que su preevolución Bulbasaur. Además, sus ojos adquieren un leve tono violeta y sus pupilas se vuelven negras. El bulbo que había en la espalda de Bulbasaur se convirte en una flor, la cual aún permanece cerrada. Esta flor es usada por Ivysaur de la misma forma que Bulbasaur empleaba su bulbo para la mayoría de sus ataques. La flor crece con la exposición directa al sol, forzando a Ivysaur a caminar a todas horas para conseguir que la luz sea absorbida plenamente. Inversamente a la función del bulbo de Bulbasaur que lo nutría, ahora parece que la flor toma la energía de Ivysaur. De la flor emana un suave y agradable aroma, que con frecuencia atrae a personas y a otros Pokémon.\r\nTiene como costumbre exponerse por largo tiempo al sol para que la flor en su lomo comience a desarrollarse. Esta flor necesita constantemente absorber energía y nutrientes para fortalecerse y prepararse para su última etapa evolutiva. Para soportar su peso y su tronco, sus patas crecen muy fuertes. Si pasa un tiempo bajo la luz solar, es una señal de que muy pronto su brote será una gran flor.\r\nEl hábitat natural de este Pokémon es la pradera, aunque también viven en llanuras con fuentes de agua dulce expuestas al sol y algunos en bosques soleados, debido a que necesitan estar expuestos casi constantemente a la luz.', 2, 'img-pokemon/Ivysaur.png', 'planta'),
(18, 'Staryu', 'Staryu es un Pokémon basado en una estrella de mar. Su cuerpo es de un color amarronado, con una formación de oro en el centro de su cuerpo. En el mismo centro de su cuerpo tiene un órgano exterior que se asemeja a una joya roja llamada \"la base\". Hay un lazo de oro alrededor de una de sus patas. Si esa joya empieza a parpadear significará que el Pokémon está débil.\r\nLas células de su cuerpo no deben estar muy diferenciadas debido a su gran y rápida capacidad de regeneración. Se alimenta por filtración. Si pierde una de sus extremidades, al igual que las estrellas, puede regenerarla.\r\nEl oro de su cuerpo puede que lo use como componente estructural del cuerpo y dar la forma a partir de este patrón, o para reacciones químicas en su cuerpo como la capacidad de generar luz en su núcleo.\r\nDebido a la luz que puede desprender, se oculta en alcantarillas y pequeños cobijos oscuros que encuentra para ocultarse de otros Pokémon, ya que es algo asustadizo. Aún así, es un Pokémon con grandes capacidades tanto para batalla como para concurso y ese es el motivo por el que muchos entrenadores aficionados al tipo agua tengan alguno que otro. Los antiguos marinos les enseñaban el código morse para poder comunicarse a millas de la costa en alguna tormenta.', 120, 'img-pokemon/Staryu.png', 'agua'),
(19, 'Poliwrath', 'Cuando Poliwhirl evoluciona en Poliwrath su semblante cambia totalmente, ganando el subtipo lucha cosa que lo hace mucho más intimidante. Un Pokémon que se caracteriza por su alto rendimiento físico, capaz de nadar mares ida y vuelta sin agotarse, el luchador perfecto ya que un practicante de artes marciales debe entrenar mucho para pulir sus habilidades. Además de poseer músculos extremadamente desarrollados, para golpear también posee una piel dura como el acero que le permite soportar muchos ataques. A pesar de su apariencia corpulenta es un excelente nadador, capaz de moverse en las tormentas más irascibles.\r\n\r\nHábitat:\r\nEste Pokémon habita principalmente en ríos o cascadas, ejercitándose en grandes rápidos para fortalecer sus músculos. Algunos dicen que los Poliwrath nadan contra corriente y así se fortalecen. También son vistos con menor frecuencia en playas, pero no es algo muy común.', 62, 'img-pokemon/Poliwrath.png', 'agua'),
(20, 'MrMime', 'Este Pokémon es difícil de encontrar en estado salvaje, pero se puede llegar a ver en bosques y montañas, donde muchos viajeros chocan con los espejos invisibles que deja por ahí. Es la estrella de muchos circos. Es, además, muy popular como mascota: muchas amas de casa lo capturan para que les ayude con las tareas caseras, como se puede observar en el caso de la madre de Ash. Es muy hábil con sus manos: corta rápidamente cualquier alimento, es capaz de coger dos cosas en la misma mano y es especialista en malabares. También es un buen guardián gracias a sus movimientos de barrera como reflejo y pantalla de luz. Es muy inteligente y dócil. Cuando adquiere experiencia, este Pokémon es capaz de hacer un clon exacto de sí mismo (o de alguna persona, debido a que Mr. Mime es el maestro de la copia).\r\nEste Pokémon es muy ordenado, así que se puede emplear como ama de casa.', 122, 'img-pokemon/MrMime.png', 'psiquico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`) VALUES
(1, 'admin', 'admin'),
(2, 'facundo', 'facundo'),
(3, 'pokemon', '1234'),
(4, 'ash', 'pikachu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  MODIFY `ID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
