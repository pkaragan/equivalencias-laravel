-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2020 at 04:41 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equivalencias`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nivel` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `nivel`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(2, 20, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(3, 20, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(4, 1, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(5, 1, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(6, 1, 3, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(7, 1, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(8, 1, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(9, 20, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(10, 20, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(11, 20, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(12, 20, 1, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(13, 1, 3, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(14, 20, 3, '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(15, 1, 3, '2020-03-07 22:35:05', '2020-03-07 22:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `semestre` smallint(6) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`id`, `user_id`, `carrera_id`, `semestre`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 'Everett Swift', '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(2, 1, 1, 1, 'Prof. Tremayne Gulgowski', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(3, 20, 10, 9, 'Dr. Olaf Nitzsche', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(4, 1, 1, 9, 'Samanta Lind', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(5, 1, 1, 1, 'Mrs. Jessica Wiegand V', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(6, 1, 10, 9, 'Delphine Kirlin', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(7, 20, 1, 9, 'Tito Schneider', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(8, 1, 10, 9, 'Prof. Sigrid Christiansen', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(9, 1, 1, 1, 'Jaren Walter', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(10, 1, 10, 9, 'Anastasia Labadie DDS', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(11, 1, 1, 1, 'Loyal Doyle', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(12, 1, 10, 9, 'Dr. Janie Cassin IV', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(13, 1, 10, 9, 'Karlie Yundt', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(14, 20, 1, 9, 'Amir Rau', '2020-03-07 22:35:12', '2020-03-07 22:35:12'),
(15, 20, 1, 9, 'Velma Rogahn', '2020-03-07 22:35:12', '2020-03-07 22:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `alumno_materias`
--

CREATE TABLE `alumno_materias` (
  `alumno_id` bigint(20) UNSIGNED NOT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `iniciales` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `numero_int` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ext` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `universidad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `nombre`, `iniciales`, `estado`, `ciudad`, `calle`, `numero`, `numero_int`, `colonia`, `cp`, `telefono`, `ext`, `universidad_id`, `created_at`, `updated_at`) VALUES
(1, 'CAMPUS I', 'C1', 'Chihuahua', 'Ciudad Juárez', 'Av. Tecnológico', 1340, NULL, 'Fracc. El Crucero', 32500, '656 688 2500', '2001', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(2, 'CAMPUS II', 'C2', 'Chihuahua', 'Ciudad Juárez', 'Av. José De Jesús Macías Delgado', NULL, NULL, 'Ciudad del Conocimiento', NULL, '656 688 2500', '2500', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(3, 'CAMPUS JUÁREZ', 'CJ', 'Chihuahua', 'Ciudad Juárez', 'Calle Camino Viejo a San José', 8370, NULL, 'Floresta de San José', 32534, '656 617 8891', NULL, 2, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(4, 'Ciudad Juárez', 'CJ', 'Chihuahua', 'Ciudad Juárez', 'Av. Universidad Tecnológica', 3051, NULL, 'Col. Lote Bravo', 32695, '656 649 0600', NULL, 3, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(5, 'CAMPUS CIUDAD JUÁREZ', 'CCJ', 'Chihuahua', 'Ciudad Juárez', 'Av. Francisco Villarreal', 11163, NULL, 'Col. Partido Senecú', 32551, '656 227 5600', NULL, 4, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(6, 'CAMPUS CIUDAD JUÁREZ', 'CCJ', 'Chihuahua', 'Ciudad Juárez', 'Blvd. Tomás Fernández Campos', 8945, NULL, 'Parque Industrial Antonio J. Bermúdez', 32470, '656 629 9100', NULL, 5, '2020-03-07 22:35:05', '2020-03-07 22:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `campus_uacj`
--

CREATE TABLE `campus_uacj` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `iniciales` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `numero_int` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ext` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `campus_uacj`
--

INSERT INTO `campus_uacj` (`id`, `nombre`, `iniciales`, `estado`, `ciudad`, `calle`, `numero`, `numero_int`, `colonia`, `cp`, `telefono`, `ext`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Instituto de Ingeniería y Tecnología', 'IIT', 'Chihuahua', 'Ciudad Juárez', 'Av del Charro', 402, NULL, 'Col. Partido Romero', 32584, '656 688 4843', '4817', 'iit.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(2, 'Instituto de Arquitectura, Diseño y Arte', 'IADA', 'Chihuahua', 'Ciudad Juárez', 'Av del Charro', 450, NULL, 'Col. Partido Romero', 32584, '656 688 4820', '4923', 'IADA.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(3, 'Instituto de Ciencias Biomédicas', 'ICB', 'Chihuahua', 'Ciudad Juárez', 'Av. Benjamín Franklin', 4650, NULL, 'Zona PRONAF', 32310, '656 688 1800', '1687', 'icb.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(4, 'Instituto de Ciencias Sociales y Administración', 'ICSA', 'Chihuahua', 'Ciudad Juárez', ' Av. Universidad', NULL, NULL, 'Zona Chamizal', 32300, '656 688 3800', '3820', 'icsa.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(5, 'Nuevo Casas Grandes', 'NCG', 'Chihuahua', 'Nuevo Casas Grandes', 'Av. Universidad', 3003, NULL, 'Ejido Hidalgo', 31803, '636 692 9800', NULL, 'ncg.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(6, 'Ciudad Universitaria', 'CU', 'Chihuahua', 'Ciudad Juárez', 'Av. Jose Jesús Macias Delgado', 18100, NULL, 'Ciudad Universitaria', 32000, '656 688 2100', NULL, 'cu.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(7, 'División Multidisciplinaria Cuauhtémoc', 'DMC', 'Chihuahua', 'Cd Cuauhtémoc', 'Carretera Cuauhtémoc-Anahuac Km 3.5', NULL, NULL, 'Ejido Cuauhtémoc', 31600, '625 128 1700', NULL, 'dmc.jpg', '2020-03-07 22:35:05', '2020-03-07 22:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `campus_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`, `campus_id`, `created_at`, `updated_at`) VALUES
(1, 'Licenciatura en Administración de Empresas', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(2, 'Licenciatura en Administración Pública', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(3, 'Licenciatura en Contaduría', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(4, 'Ingeniería Mecatrónica', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(5, 'Ingeniería Electromecánica', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(6, 'Ingeniería Eléctrica', 1, '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(7, 'Ingeniería Mecánica', 1, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(8, 'Ingeniería en Sistemas Computacionales', 1, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(9, 'Ingeniería Electrónica', 1, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(10, 'Licenciatura en Administración', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(11, 'Contador Público', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(12, 'Ingeniería en Tecnologías de la Información y Comunicaciones', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(13, 'Ingeniería en Sistemas Computacionales', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(14, 'Ingeniería Industrial', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(15, 'Ingeniería en Logística', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(16, 'Ingeniería en Gestión Empresarial', 2, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(17, 'LICENCIATURA EN INTERVENCIÓN EDUCATIVA', 3, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(18, 'LICENCIATURA EN PEDAGOGÍA', 3, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(19, 'LICENCIATURA EN EDUCACIÓN PREESCOLAR PARA EL MEDIO INDÍGENA', 3, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(20, 'LICENCIATURA EN EDUCACIÓN PRIMARIA PARA EL MEDIO INDÍGENA', 3, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(21, 'LICENCIATURA EN EDUCACIÓN Y DESARROLLO COMUNITARIO', 3, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(22, 'Ing. en Energías Renovables', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(23, 'Ing. en Logística Internacional', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(24, 'Ing. en Mantenimiento Industrial ', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(25, 'Ing. en Mecatrónica ', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(26, 'Ing. en Nanotecnología ', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(27, 'Lic. en Innovación de Negocios y Mercadotécnia', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(28, 'Ing. en Procesos y Operaciones Industriales', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(29, 'Ing. en Tecnologías de la Información', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(30, 'Ing. Financiera y Fiscal', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(31, 'Lic. en Protección Civil', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(32, 'Lic. en Terapia Física', 4, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(33, 'Comercio Internacional', 5, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(34, 'Diseño Gráfico y Animación', 5, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(35, 'Industrial', 5, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(36, 'Mecatrónica', 5, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(37, 'Mercadotecnia', 5, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(38, 'Ingeniero Biomédico', 6, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(39, 'Ingeniero Civil entrando por Ambiente Construido', 6, '2020-03-07 22:35:06', '2020-03-07 22:35:06'),
(40, 'Ingeniero Civil entrando por Ingeniería-Innovación y Transformación', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(41, 'Ingeniero en Alimentos', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(42, 'Ingeniero en Biosistemas Agroalimentarios', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(43, 'Ingeniero en Biotecnología', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(44, 'Ingeniero en Ciencia de Datos y Matemáticas', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(45, 'Ingeniero en Desarrollo Sustentable', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(46, 'Ingeniero en Electrónica', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(47, 'Ingeniero en Innovación y Desarrollo', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(48, 'Ingeniero en Mecatrónica', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(49, 'Ingeniero en Nanotecnología', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(50, 'Ingeniero en Robótica y Sistemas Digitales', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(51, 'Ingeniero en Tecnologías Computacionales', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(52, 'Ingeniero en Transformación Digital de Negocios', 6, '2020-03-07 22:35:07', '2020-03-07 22:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `carrera_uacj`
--

CREATE TABLE `carrera_uacj` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campus_uacj_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `carrera_uacj`
--

INSERT INTO `carrera_uacj` (`id`, `campus_uacj_id`, `nombre`, `clave`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ingeniería Aeronáutica', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(2, 1, 'Ingeniería Ambiental', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(3, 1, 'Ingeniería Biomédica', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(4, 1, 'Ingeniería Civil', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(5, 1, 'Ingeniería Eléctrica', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(6, 1, 'Ingeniería Física', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(7, 1, 'Ingeniería en Geociencias', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(8, 1, 'Ingeniería Industrial y de Sistemas', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(9, 1, 'Ingeniería Mecánica', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(10, 1, 'Ingeniería en Matemáticas', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(11, 1, 'Ingeniería en Materiales', NULL, '2020-03-07 22:35:07', '2020-03-07 22:35:07'),
(12, 1, 'Ingeniería en Manufactura', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(13, 1, 'Ingeniería Mecatrónica', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(14, 1, 'Ingeniería en Sistemas Computacionales', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(15, 1, 'Ingeniería en Sistemas Digitales y Comunicaciones', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(16, 6, 'Ingeniería Mecatrónica', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(17, 6, 'Ingeniería en Sistemas Computacionales', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(18, 6, 'Ingeniería Industrial y de Sistemas', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(19, 6, 'Ingeniería en Sistemas Automotrices', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(20, 6, 'Ingeniería de Software', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(21, 5, 'Ingeniería en Agronegocios', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(22, 7, 'Ingeniería en Diseño y Automatización Agrícola', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(23, 7, 'Ingeniería en Diseño y Automatización Alimentaria', NULL, '2020-03-07 22:35:08', '2020-03-07 22:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `equivalencias`
--

CREATE TABLE `equivalencias` (
  `materia_uacj_id` bigint(20) UNSIGNED NOT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `clave`, `created_at`, `updated_at`) VALUES
(1, 'Buddy Braun', 'dolorem', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(2, 'Adolfo McLaughlin', 'doloribus', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(3, 'Hyman Eichmann', 'ex', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(4, 'Mikayla White MD', 'rerum', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(5, 'Vivianne Bashirian', 'rerum', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(6, 'Dr. Shayne Oberbrunner', 'expedita', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(7, 'Mr. Bernie Braun II', 'dolorem', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(8, 'Sherwood Trantow', 'odit', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(9, 'Duane McClure V', 'ea', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(10, 'Kade Koepp', 'sed', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(11, 'Kale Considine', 'nisi', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(12, 'Mr. Parker Trantow', 'recusandae', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(13, 'Ken Medhurst', 'minus', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(14, 'Brooke O\'Connell', 'dolor', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(15, 'Zander Moore', 'dolor', '2020-03-07 22:35:11', '2020-03-07 22:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `materia_plan`
--

CREATE TABLE `materia_plan` (
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `materia_plan`
--

INSERT INTO `materia_plan` (`materia_id`, `plan_id`) VALUES
(1, 23),
(2, 40),
(3, 1),
(4, 34),
(5, 14),
(6, 50),
(7, 17),
(8, 16),
(9, 6),
(10, 23),
(11, 7),
(12, 9),
(13, 49),
(14, 23),
(15, 52);

-- --------------------------------------------------------

--
-- Table structure for table `materia_plan_uacj`
--

CREATE TABLE `materia_plan_uacj` (
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materia_uacj`
--

CREATE TABLE `materia_uacj` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `creditos` smallint(6) NOT NULL,
  `obligatoria` tinyint(1) NOT NULL,
  `semestre` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `materia_uacj`
--

INSERT INTO `materia_uacj` (`id`, `nombre`, `clave`, `creditos`, `obligatoria`, `semestre`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Keanu Blick DVM', 'voluptas', 1, 0, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(2, 'Albert Feest', 'quaerat', 8, 1, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(3, 'Chad Hyatt', 'et', 1, 1, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(4, 'Lucas Mante', 'molestiae', 1, 0, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(5, 'Cheyenne Raynor', 'quae', 8, 1, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(6, 'Deven Conn IV', 'aut', 8, 1, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(7, 'Elyse Schamberger', 'id', 8, 1, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(8, 'Moriah Maggio', 'praesentium', 8, 1, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(9, 'Zackery Kuphal', 'voluptas', 8, 1, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(10, 'Miss Noemi Grady MD', 'non', 8, 0, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(11, 'Forest Lakin', 'libero', 1, 1, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(12, 'Candido Morar', 'quibusdam', 8, 1, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(13, 'Royce Quigley DDS', 'aliquam', 1, 0, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(14, 'Ezequiel Pacocha', 'impedit', 8, 0, 1, '2020-03-07 22:35:11', '2020-03-07 22:35:11'),
(15, 'Dorian Ferry', 'esse', 8, 0, 9, '2020-03-07 22:35:11', '2020-03-07 22:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `plan_carrera`
--

CREATE TABLE `plan_carrera` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `plan_carrera`
--

INSERT INTO `plan_carrera` (`id`, `carrera_id`, `clave`, `created_at`, `updated_at`) VALUES
(1, 1, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(2, 2, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(3, 3, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(4, 4, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(5, 5, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(6, 6, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(7, 7, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(8, 8, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(9, 9, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(10, 10, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(11, 11, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(12, 12, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(13, 13, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(14, 14, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(15, 15, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(16, 16, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(17, 17, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(18, 18, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(19, 19, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(20, 20, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(21, 21, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(22, 22, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(23, 23, '2020', '2020-03-07 22:35:08', '2020-03-07 22:35:08'),
(24, 24, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(25, 25, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(26, 26, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(27, 27, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(28, 28, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(29, 29, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(30, 30, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(31, 31, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(32, 32, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(33, 33, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(34, 34, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(35, 35, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(36, 36, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(37, 37, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(38, 38, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(39, 39, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(40, 40, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(41, 41, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(42, 42, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(43, 43, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(44, 44, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(45, 45, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(46, 46, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(47, 47, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(48, 48, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(49, 49, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(50, 50, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(51, 51, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(52, 52, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `plan_carrera_uacj`
--

CREATE TABLE `plan_carrera_uacj` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_uacj_id` bigint(20) UNSIGNED NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `plan_carrera_uacj`
--

INSERT INTO `plan_carrera_uacj` (`id`, `carrera_uacj_id`, `clave`, `created_at`, `updated_at`) VALUES
(1, 1, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(2, 2, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(3, 3, '2020', '2020-03-07 22:35:09', '2020-03-07 22:35:09'),
(4, 4, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(5, 5, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(6, 6, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(7, 7, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(8, 8, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(9, 9, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(10, 10, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(11, 11, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(12, 12, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(13, 13, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(14, 14, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(15, 15, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(16, 16, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(17, 17, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(18, 18, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(19, 19, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(20, 20, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(21, 21, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(22, 22, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10'),
(23, 23, '2020', '2020-03-07 22:35:10', '2020-03-07 22:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_user`
--

CREATE TABLE `tipo_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `tipo_user`
--

INSERT INTO `tipo_user` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-03-07 22:35:03', '2020-03-07 22:35:03'),
(2, 'Alumno', '2020-03-07 22:35:03', '2020-03-07 22:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `universidad`
--

CREATE TABLE `universidad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `iniciales` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `universidad`
--

INSERT INTO `universidad` (`id`, `nombre`, `iniciales`, `tipo`, `pais`, `created_at`, `updated_at`) VALUES
(1, 'Instituto Tecnológico de Ciudad Juárez', 'ITCJ', 'publica', 'México', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(2, 'Universidad Pedagógica Nacional', 'UPN', 'publica', 'México', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(3, 'Universidad Tecnológica de Ciudad Juárez', 'UTCJ', 'publica', 'México', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(4, 'Universidad TecMilenio', 'UTM', 'privada', 'México', '2020-03-07 22:35:05', '2020-03-07 22:35:05'),
(5, 'Tecnológico de Monterrey', 'ITESM', 'privada', 'México', '2020-03-07 22:35:05', '2020-03-07 22:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_user_id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tipo_user_id`, `usuario`, `nombre`, `apellido`, `telefono`, `direccion`, `fecha_nac`, `email`, `email_verified_at`, `password`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'consequuntur-ullam-sed-dignissimos', 'Madge Reichert', 'Reinger', '827-428-6956 x73237', '79554 Cormier Creek\nLake Ruthland, IL 53782-2966', '1972-02-29', 'berge.sarai@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'qFPKmhjThG', '2020-03-07 22:35:03', '2020-03-07 22:35:03'),
(2, 2, 'dolorem-aut-odio-rerum-repellendus', 'Anabel Block DDS', 'Hauck', '1-873-527-6872', '740 Morissette Crest Apt. 204\nNew Patton, AL 95028-0549', '1999-12-05', 'jordon37@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'qGdBQWUvNt', '2020-03-07 22:35:03', '2020-03-07 22:35:03'),
(3, 1, 'iusto-facilis-ipsa', 'Ryleigh Kessler MD', 'Hartmann', '1-737-629-8940', '460 Ewald Squares Apt. 341\nMarilieville, DE 38611', '1986-04-28', 'lucienne80@example.net', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'VO90DxtxMW', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(4, 1, 'magni-quis-officia', 'Hal Kohler', 'Bergstrom', '472-646-7765 x419', '901 Doyle Avenue\nSouth Deshawnview, AR 94989-8583', '1975-06-28', 'jcrona@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'ox63Scwn7O', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(5, 1, 'saepe-et', 'Myriam Little', 'Langosh', '1-869-817-5740 x12442', '4674 Mellie Rapid\nSouth Sisterborough, DE 11676', '1985-09-25', 'chauncey.mitchell@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '294oeEvBHO', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(6, 2, 'ut-quis-qui', 'Alexandrine Stark Sr.', 'Hickle', '1-383-872-7853 x489', '346 Ashlynn Rue\nWest Keeleyside, NY 14094', '1979-03-16', 'cschneider@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'kf9BsXvjes', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(7, 2, 'reprehenderit-quia-omnis', 'Ms. Laney Yost', 'Hegmann', '640.250.2241 x62285', '6918 Cassandra Stream Suite 031\nSouth Alejandraberg, MT 49555', '1972-07-02', 'auer.marilou@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'Ta8bE7VG0S', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(8, 1, 'quod-vel-porro', 'Carter Schuster', 'Spencer', '+1-690-296-2088', '8889 West Field Suite 009\nNew Dion, MO 17992-3890', '2004-02-22', 'mgraham@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'nlfdWJMc1c', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(9, 2, 'et-omnis-aliquid', 'Mr. Jarred Bergnaum', 'Moore', '(567) 936-9814 x95523', '675 Armstrong Lodge Apt. 214\nAdelineville, KY 10681-0101', '1999-05-21', 'wuckert.bennie@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '9Rb2P0Xlao', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(10, 1, 'molestiae-odit-voluptatem-sed', 'Alayna Jast DDS', 'Koch', '1-459-759-8734 x7656', '93762 Tremblay Creek Suite 479\nLueilwitzborough, TN 24996', '1984-09-25', 'aliyah20@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'vBkQW9c4Gd', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(11, 1, 'et-in-ut', 'Mr. Antwan Upton', 'Rempel', '+1.443.242.5060', '46125 Era Manors Suite 187\nStreichfort, MT 50279-4975', '2010-09-07', 'earl81@example.net', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'sJAh1z4D0K', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(12, 1, 'occaecati-dolores-eum-magni', 'Prof. Elmer Haley PhD', 'Crooks', '(565) 258-4358', '58519 Armstrong Port Apt. 027\nAlberthastad, CO 34281-5619', '1985-12-06', 'kassulke.jewell@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'lcb12EAOlv', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(13, 1, 'veniam-laboriosam-dolore', 'Dion Lang', 'Braun', '(576) 382-1360', '5006 German Common Apt. 847\nMcDermotttown, MS 21120', '1985-01-17', 'sadie03@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'ej7xwSiM5R', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(14, 2, 'maxime-odio-architecto', 'Chad Tillman', 'Borer', '1-329-773-8558', '239 Weber Keys\nWest Itzelborough, SD 96554-2347', '2001-03-10', 'madaline.haag@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '6cSsThPDe3', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(15, 1, 'qui-possimus-perspiciatis-enim', 'Prof. Helene Purdy V', 'Douglas', '287-244-6460', '81552 Raleigh Pines\nNew Ruthiefort, NJ 66671-6886', '1987-04-13', 'oberbrunner.efren@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Ow6RtLGChi', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(16, 2, 'molestias-atque-amet-et-alias', 'Kavon Weimann', 'Schmitt', '205.896.9014 x2468', '5797 Friesen Drives Suite 219\nTurnerchester, UT 46310-0676', '2006-03-20', 'mhaag@example.com', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'w7fQJ0Seb0', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(17, 2, 'praesentium-reprehenderit-est-hic', 'Stanford Brekke', 'Simonis', '952-517-2603', '2828 Americo Prairie\nNiamouth, OR 25033', '1982-01-09', 'hegmann.marilie@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'XzKBwdhkEp', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(18, 2, 'sed-sint-odio', 'Cassandre Hane', 'Ritchie', '(489) 451-8505', '922 Ruthie Shores\nWest Myrticeport, OH 57247', '1999-02-16', 'felipa23@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'K5YYpDejci', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(19, 2, 'et-porro-sed', 'Amalia Will IV', 'Bode', '+1-884-992-0658', '6340 Xzavier Trail Apt. 346\nRogahnport, WI 26246-6148', '1994-05-02', 'keebler.bertrand@example.net', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'kVaqYBJPuH', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(20, 1, 'sint-et-sed', 'Mr. Major Halvorson', 'Hackett', '+1-325-969-2042', '3784 Gottlieb Brook Suite 229\nEast Jillianburgh, CT 98378', '1974-01-11', 'aratke@example.org', '2020-03-07 22:35:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'pEzq6uLSXP', '2020-03-07 22:35:04', '2020-03-07 22:35:04'),
(21, 1, 'admin', 'Francisco', 'Mendoza', '6563769461', 'Miravalle 7912', '1987-11-15', 'frgmendoza@gmail.com', NULL, '$2y$10$dj1shg9L8d2pMhZKI43alOsnBP/mt7..7qpWlM5kXT3lVBVgTKocK', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_user_id_foreign` (`user_id`);

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno_user_id_foreign` (`user_id`),
  ADD KEY `alumno_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `alumno_materias`
--
ALTER TABLE `alumno_materias`
  ADD KEY `alumno_materias_alumno_id_foreign` (`alumno_id`),
  ADD KEY `alumno_materias_materia_id_foreign` (`materia_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campus_universidad_id_foreign` (`universidad_id`);

--
-- Indexes for table `campus_uacj`
--
ALTER TABLE `campus_uacj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera_campus_id_foreign` (`campus_id`);

--
-- Indexes for table `carrera_uacj`
--
ALTER TABLE `carrera_uacj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera_uacj_campus_uacj_id_foreign` (`campus_uacj_id`);

--
-- Indexes for table `equivalencias`
--
ALTER TABLE `equivalencias`
  ADD KEY `equivalencias_materia_uacj_id_foreign` (`materia_uacj_id`),
  ADD KEY `equivalencias_materia_id_foreign` (`materia_id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia_plan`
--
ALTER TABLE `materia_plan`
  ADD KEY `materia_plan_materia_id_foreign` (`materia_id`),
  ADD KEY `materia_plan_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `materia_plan_uacj`
--
ALTER TABLE `materia_plan_uacj`
  ADD KEY `fk_materiaplanuacj_materia` (`materia_id`),
  ADD KEY `fk_materiaplanuacj_plan` (`plan_id`);

--
-- Indexes for table `materia_uacj`
--
ALTER TABLE `materia_uacj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_carrera`
--
ALTER TABLE `plan_carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_carrera_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `plan_carrera_uacj`
--
ALTER TABLE `plan_carrera_uacj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_carrera_uacj_carrera_uacj_id_foreign` (`carrera_uacj_id`);

--
-- Indexes for table `tipo_user`
--
ALTER TABLE `tipo_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universidad`
--
ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_tipo_user_id_foreign` (`tipo_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campus_uacj`
--
ALTER TABLE `campus_uacj`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `carrera_uacj`
--
ALTER TABLE `carrera_uacj`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `materia_uacj`
--
ALTER TABLE `materia_uacj`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `plan_carrera`
--
ALTER TABLE `plan_carrera`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `plan_carrera_uacj`
--
ALTER TABLE `plan_carrera_uacj`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tipo_user`
--
ALTER TABLE `tipo_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `universidad`
--
ALTER TABLE `universidad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumno_materias`
--
ALTER TABLE `alumno_materias`
  ADD CONSTRAINT `alumno_materias_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_materias_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campus`
--
ALTER TABLE `campus`
  ADD CONSTRAINT `campus_universidad_id_foreign` FOREIGN KEY (`universidad_id`) REFERENCES `universidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_campus_id_foreign` FOREIGN KEY (`campus_id`) REFERENCES `campus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carrera_uacj`
--
ALTER TABLE `carrera_uacj`
  ADD CONSTRAINT `carrera_uacj_campus_uacj_id_foreign` FOREIGN KEY (`campus_uacj_id`) REFERENCES `campus_uacj` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equivalencias`
--
ALTER TABLE `equivalencias`
  ADD CONSTRAINT `equivalencias_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equivalencias_materia_uacj_id_foreign` FOREIGN KEY (`materia_uacj_id`) REFERENCES `materia_uacj` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materia_plan`
--
ALTER TABLE `materia_plan`
  ADD CONSTRAINT `materia_plan_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_plan_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plan_carrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materia_plan_uacj`
--
ALTER TABLE `materia_plan_uacj`
  ADD CONSTRAINT `fk_materiaplanuacj_materia` FOREIGN KEY (`materia_id`) REFERENCES `materia_uacj` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_materiaplanuacj_plan` FOREIGN KEY (`plan_id`) REFERENCES `plan_carrera_uacj` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_carrera`
--
ALTER TABLE `plan_carrera`
  ADD CONSTRAINT `plan_carrera_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_carrera_uacj`
--
ALTER TABLE `plan_carrera_uacj`
  ADD CONSTRAINT `plan_carrera_uacj_carrera_uacj_id_foreign` FOREIGN KEY (`carrera_uacj_id`) REFERENCES `carrera_uacj` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_tipo_user_id_foreign` FOREIGN KEY (`tipo_user_id`) REFERENCES `tipo_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
