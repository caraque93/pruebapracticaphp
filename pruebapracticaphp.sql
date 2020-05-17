-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 06:32 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebapracticaphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `sku` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `valor` float NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`sku`, `nombre`, `descripcion`, `valor`, `id_tienda`, `imagen`) VALUES
(1, 'algo', 'ppppp', 11111, 1, 'unnamed.jpg'),
(2, 'Computador portatil', '4GB RAM, 500 HDD Core 15', 2000000, 2, 'compu1.jpeg'),
(3, 'Computador de Mesa', '8GB RAM, 500GB SSD, core i7', 2800000, 2, 'compu2.jpeg'),
(4, 'Celular', 'Smartphone, 5.7\'\' , Android 8.0', 600000, 3, 'celular.jpeg'),
(5, 'Smartphone', '5.5\'\' Cómodo, ligero', 550000, 3, 'celular2.jpg'),
(6, 'Smartphone Samsung', 'Galaxy S8 note, explosivo', 1000000, 3, 'cel3.jpg'),
(7, 'Audifs', 'Suenan cool', 100000, 3, 'auds2.jpg'),
(8, 'Audífonos', 'Wireless', 500000, 3, 'auds3.jpg'),
(9, 'Zapatos', 'Cómodos y elegantes', 200000, 6, 'zapato.jpg'),
(10, 'Zapatos', 'Elegantes para toda ocasión', 250000, 6, 'Zaps2.jpg'),
(11, 'Vestido', 'Elegante, Ideal para fiestas', 240000, 5, 'vestido.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_apertura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiendas`
--

INSERT INTO `tiendas` (`id`, `nombre`, `fecha_apertura`) VALUES
(2, 'La esquina', '2009-05-14'),
(3, 'Monbre', '2020-05-06'),
(4, 'El avispero', '1990-03-12'),
(5, 'Fidelena', '2020-05-07'),
(6, 'Aves Maria', '2005-06-14'),
(7, 'Betania', '2008-01-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`sku`);

--
-- Indexes for table `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
