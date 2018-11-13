-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2018 a las 23:15:25
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_dgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_Genero` int(11) NOT NULL,
  `Genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_Genero`, `Genero`) VALUES
(12, 'Accion'),
(13, 'Aventura'),
(14, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_Juego` int(11) NOT NULL,
  `Consola` varchar(5) NOT NULL,
  `id_Genero` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` smallint(6) NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_Juego`, `Consola`, `id_Genero`, `Titulo`, `Descripcion`, `Precio`, `img_path`) VALUES
(64, 'Pc', 13, 'Shadow of Colossus', 'El juego trata de un joven conocido únicamente como Wander, que debe viajar a caballo a través de un vasto territorio y derrotar a 16 gigantes, conocidos colectivamente como «Colossi» («colosos» en español) para devolver la vida a una joven llamada Mono. ', 699, './image/shadow.png'),
(65, 'ps4', 12, 'GTA V', 'La historia transcurre en la remodelada ciudad de Los Santos, donde Michael, Trevor y Franklin trabajan individualmente hasta que se cruzan sus vidas y empiezan a trabajar en equipo robando bancos o realizando trabajos para diversos personajes.', 299, './image/gtaV.jpg'),
(66, 'ps4', 12, 'Batman Arkham city', 'Bruce Wayne ofrece una conferencia de prensa para declarar su oposición a la creación de Arkham City. Un grupo de mercenarios de TYGER interrumpe la conferencia para arrestar a Wayne y encarcelarlo en Arkham City.', 599, './image/batmanAC.jpg'),
(67, 'pc', 12, 'The Evil Within', 'Mientras investigaban la escena de un horripilante asesinato masivo en el Hospital Mental Beacon, el detective de la policía de la ciudad de Krimson Sebastian Castellanos, su compañero Joseph Oda y el joven detective Juli Kidman se encuentran repentinamente arrojados a un mundo irreal, después de escuchar un ruido agudo. Poco después de que esto ocurra, Sebastian se separa de sus compañeros y se ve obligado a huir de un monstruoso que maneja una motosierra.', 399, './image/theEvilWI.jpg'),
(68, 'ps3', 14, 'Alien Isolation', 'Tras un fallido intento de establecer contacto por radio con la Sevastopol, en el que solo reciben un mensaje de advertencia lleno de estática de parte del mariscal colonial Waits, indicándoles que no pueden recibir pasajeros y ante la poca claridad de la situación, el equipo decide abordar la estructura mediante una caminata espacial, a los pocos metros de alcanzar la esclusa de aire una explosión corte el cable y el equipo se separe, dejando a Amanda como única posible sobreviviente', 499, './image/alienI.jpg'),
(69, 'ps4', 14, 'Outlast', 'Un periodista independiente que recibe un correo anónimo que le informa acerca de experimentos ilegales llevados a cabo en un manicomio llamado Mount Massive. Adentrándose al manicomio de noche y con una cámara de mano, encuentra la institución en ruinas.', 399, './image/outlast.jpg'),
(70, 'ps4', 14, 'Slenderman', 'El objetivo del jugador es recoger ocho páginas ubicadas en diversas áreas del bosque, evitando al mismo tiempo a Slender, una extraña criatura o ente de forma humanoide sin rostro, de piel pálida y con tentáculos como apéndices que brotan de su espalda, que aparecen cuando el jugador está al borde de la muerte.3? El jugador está dotado únicamente con una linterna para ver a través de la oscuridad.', 499, './image/slenderMan.jpg'),
(71, 'ps4', 13, 'God of War', 'Se basa en las aventuras de un semidiós espartano, Kratos, quién se enfrenta a diversos personajes de la mitología griega, tanto héroes y especies mitológicas como dioses griegos y dioses primordiales. Aunque el guerrero espartano acostumbra enemistad con la mayoría de los Dioses, recibe ayuda de muchos de ellos, en especial de Atenea.', 799, './image/godOfWar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Usuario`, `Password`) VALUES
(23, 'juan@gmail.com', '$2y$10$hHVHmsF0dnaCiQ41LhTyheQ0jToCXWkoC/y32cCBvmigNLtOUnBeS'),
(24, 'pedro@gmail.com', '$2y$10$skzruhYBdVzlzUJWcGJ7QOi7Mb4dJyYRT083h6iKOlgE7n5YYfine'),
(25, 'pepe@gmail.com', '$2y$10$.AVVP7kb8vqwkYunCSGvd..ob3VcNfpKX/a2Ym4U3rASPC1qrOASu'),
(26, 'sasha@lala', '$2y$10$Gbot1X9MJtTgKtnMw/rF2uV4SCWQkndGCMgi61AvOY63H3SxTgTmi'),
(27, 'jp@gmail.com', '$2y$10$5h8///pS.qpa9dZRVqJzDOg7H385.1ClB9h75YNlDCX/sF0ErLChK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_Genero`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_Juego`),
  ADD KEY `juegos_ibfk_1` (`id_Genero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_Juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_Genero`) REFERENCES `genero` (`id_Genero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
