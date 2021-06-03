
CREATE DATABASE projecte;

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `equipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jugadores`(`id`, `nombre`, `apellido`, `edad`, `equipo`) VALUES (1,"Lebron","James",36,"LA Lakers");

ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
