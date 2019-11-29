-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 03:07:46
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinefilo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `genero` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `genero`) VALUES
(7, 'Accion'),
(6, 'Cine Catástrofe'),
(1, 'Comedia'),
(4, 'Drama'),
(5, 'Romantica'),
(3, 'Suspenso'),
(2, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `puntuacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_film`, `nombre_usuario`, `comentario`, `puntuacion`) VALUES
(1, 9, 'yox', 'muy lindo flash', 4),
(8, 1, 'admin', 'Bodrio', 4),
(10, 6, 'mati', 'La mejor serie', 5),
(13, 9, 'admin', '', 1),
(14, 9, 'admin', 'peppeppe', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `genero` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `sinopsis` varchar(400) COLLATE latin1_spanish_ci NOT NULL,
  `episodios` int(11) DEFAULT NULL,
  `temporadas` int(11) DEFAULT NULL,
  `duracion` time NOT NULL,
  `tipo` set('peliculas','series','','') COLLATE latin1_spanish_ci NOT NULL,
  `nombre_imagen` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `film`
--

INSERT INTO `film` (`id`, `genero`, `nombre`, `sinopsis`, `episodios`, `temporadas`, `duracion`, `tipo`, `nombre_imagen`) VALUES
(1, 'Comedia', 'Aprendiendo a vivir', 'Asher es un joven de 17 años, impulsivo y con un gran temperamento. Tiene que abrirse camino en la vida adaptándose a un contexto de mucha presión que intentará modificarlo. ¿Podrá el joven con su existencia?. ', 0, 0, '02:20:00', 'peliculas', 'image/Aprendiendo.png'),
(2, 'Drama', 'Carmen y Lola', 'Carmen es una adolescente gitana que vive en las afueras de Madrid. Está destinada a vivir una que se repite por generaciones: casarse y criar sus hijos. Pero un día conocea a Lola y su vida tendrá un cambio imprevisto.', NULL, NULL, '01:45:00', 'peliculas', 'image/Carmen.png'),
(3, 'Suspenso', 'El refugio de los insomnes', 'Una amistad única se desarrolla entre un hombre que sufre de insomnio, un aspirante a fotógrafo y una mujer que no está segura acerca de su embarazo. Ellos se reúnen cada noche en una tienda de conveniencia con la expectativa de mejorar sus vidas.', NULL, NULL, '02:13:00', 'peliculas', 'image/Elrefugio.png'),
(4, 'Terror', 'Donaire y esplendor', 'En el Carnaval tradicional de un pequeño pueblo llamado Las Tablas hay dos calles rivales: Calle Arriba y Calle Abajo. Una joven pareja, después de un encuentro inesperado en el aeropuerto, se enamoran apasionada y perdidamente.', NULL, NULL, '03:08:00', 'peliculas', 'image/Esplendor.png'),
(5, 'Drama', 'Indivisible', 'Tras servir en el ejército estadounidense, el capellán Darren Turner afronta una crisis que pone patas arriba sus lazos familiares y su fe. Tendrá que recurrir a la ayuda de sus compañeros soldados para salir adelante.', NULL, NULL, '01:57:00', 'peliculas', 'image/indivisible.png'),
(6, 'Terror', 'The walking dead 10', 'La historia nos traslada a un escenario post-pandémico en el que un virus ha acabado con la práctica totalidad de la población mundial convirtiéndolos en zombis. Seremos testigo de la lucha de un grupo de supervivientes por mantenerse a salvo en este ento', 112, 10, '00:51:00', 'series', 'image/the_walking_dead.jpg'),
(7, 'Terror', 'American horror story', 'Concebida por los creadores de \'Glee\' y \'Nip/Tuck, a golpe de bisturí\', Ryan Murphy y Brad Falchuk, \'American Horror Story\' narra en cada una de sus temporadas una historia independiente ambientada en lugares y con personajes distintos.', 130, 9, '00:56:00', 'series', 'image/american_horror_story9.jpg'),
(8, 'Drama', 'Arrow', 'Adaptación libre de un personaje de DC Comics, playboy de día, que, durante la noche, usa su arco y sus flechas contra el crimen. Tras haber desaparecido y haber sido dado por muerto en un violento naufragio, el multimillonario playboy Oliver Queen es rescatado con vida cinco años después en una isla del Pacífico.', 160, 8, '00:38:00', 'series', 'image/arrow8.jpg'),
(9, 'Accion', 'The flash', 'Sigue las veloces aventuras de Barry Allen, un joven común y corriente con el deseo latente de ayudar a los demás. Cuando una inesperada partícula aceleradora golpea por accidente a Barry, de pronto se encuentra cargado de un increíble poder para moverse a increíbles velocidades. Mientras Barry siempre ha tenido el alma de un héroe, sus nuevos poderes le han dado la capacidad de actuar como tal. S', 200, 8, '00:42:00', 'series', 'image/the_flash6.jpg'),
(10, 'Terror', 'The purge', 'La trama se sitúa durante la saga cinematográfica La purga, que cuenta todos los macabros acontecimientos que suceden en una noche en la que, durante doce horas, todo tipo de crimen es legal en EE.UU., incluyendo el asesinato.', 20, 3, '00:53:00', 'series', 'image/the_purge2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `dir_imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `id_film`, `dir_imagen`) VALUES
(2, 6, 'image/TWD2.jpg'),
(3, 6, 'image/TWD3.jpg'),
(5, 1, 'image/5ddee1451cc30.jpg'),
(6, 1, 'image/5ddee14540af1.jpg'),
(7, 1, 'image/5ddee1456aa3b.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `clave` char(60) COLLATE latin1_spanish_ci NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `clave`, `administrador`) VALUES
(1, '', '', 0),
(2, 'admin', '$2y$10$akp.Ae22kMiBrfWybFuNiOgqVmd.A3T4/5fIUtJnmnHLdWr7PBI7a', 1),
(3, 'usuario', '$2y$10$6Vey0vzZKg4m0hujoaT76uv.FfZgWr9NmMSjwsInRmAKrPGc9SEWa', 0),
(4, 'mati', '$2y$10$Sb9L.2Hns7AtCnq93pQFFeTUwtLl1haCt9HJERjP514iAlL5ox376', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genero` (`genero`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- Indices de la tabla `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genero` (`genero`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);

--
-- Filtros para la tabla `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`genero`) REFERENCES `categorias` (`genero`);

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
