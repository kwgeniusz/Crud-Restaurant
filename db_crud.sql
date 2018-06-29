-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2018 a las 20:50:56
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `ci` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`ci`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(3, 'Grover Aufderhar', '854 Parisian Mission Apt. 083\nNew Beau, WV 85698', '+4909063294723', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(4, 'Mrs. Adelle Pagac', '468 Dave Drives\nQuigleychester, FL 43202-8071', '+8623259163074', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(33, 'Ms. Callie Ebert Sr.', '638 Winston Fall Suite 749\nGaylordstad, PA 84892', '+2546843264572', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(35, 'Joanne Moen DVM', '8652 Lou Hollow\nSouth Mayra, SD 63803-5153', '+3025702650911', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(147, 'Mrs. Beverly Gutmann II', '6100 Chet Knolls\nEast Destini, AK 11342', '+9146213688799', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(981, 'Jackie Reilly', '7216 Treutel Route Apt. 570\nLake Evans, ND 76769', '+7694236400378', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(4444, 'Prof. Charles Hyatt DDS', '36945 Conrad Drives Apt. 445\nKamrynmouth, IA 38457', '+8125519846478', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(5228, 'Theo Graham', '540 Greenfelder Corners\nNew Bridie, MS 51364-9289', '+9303979003693', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(6799, 'Mr. Lowell Miller', '832 Zemlak Mills Apt. 381\nAdellaburgh, UT 68801-1872', '+5999576294894', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(6930, 'Dr. Everette Terry I', '28728 Rempel Circles Apt. 386\nMiloport, FL 70008', '+5127515492270', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(7327, 'Mr. Wallace Rice', '736 Bode Harbors\nBartolettifort, MA 43699', '+9788717050388', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(8199, 'Trenton Haley PhD', '38238 Auer Ramp\nGerhardville, VT 18316-4064', '+4517270155171', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(41938, 'Mr. Doris Feeney I', '6291 Wiza Isle\nZiemannfurt, OH 02773-9593', '+1361364941901', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(44366, 'Gabrielle Graham', '8010 Armand Shoal Apt. 348\nEast Lowellstad, MA 77494', '+8811937612103', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(251409, 'Ms. Keely Marquardt IV', '678 Hills Heights\nMuellermouth, NM 58674', '+1059696729171', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(700638, 'Prof. Amos Reichel', '77969 Reyes Flats\nCadeton, GA 90244-8062', '+8313912535420', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(2309436, 'Juston Stamm', '821 Camila Court Suite 102\nConsidinehaven, AL 61563-2466', '+8197846709665', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(8426292, 'Karson Bashirian', '4905 Jakubowski View\nMcGlynnshire, IN 16326', '+3787748333944', '2018-05-16 22:14:24', '2018-05-16 22:14:24'),
(8679441, 'Carson Beatty', '9084 Keshaun Inlet\nCamylleborough, TX 12618-6957', '+4161152000464', '2018-05-16 22:14:23', '2018-05-16 22:14:23'),
(85280699, 'Isaac Quitzon', '48570 Krista Roads\nWest Florian, OH 00761-9303', '+2322183796014', '2018-05-16 22:14:24', '2018-05-16 22:14:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foods`
--

CREATE TABLE `foods` (
  `idFood` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `weight` decimal(8,2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foods`
--

INSERT INTO `foods` (`idFood`, `name`, `type`, `weight`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Pollo', 'PERECEDERO', '500.00', '10000.00', '2018-05-16 22:16:22', '2018-05-17 22:43:30'),
(2, 'Pescado', 'PERECEDERO', '6000.00', '20000.00', '2018-05-16 22:16:40', '2018-05-19 00:43:11'),
(3, 'Lentejas', 'NO PERECEDERO', '300.00', '10000.00', '2018-05-17 00:24:59', '2018-05-17 22:44:01'),
(4, 'Arroz', 'NO PERECEDERO', '10000.00', '1000.00', '2018-05-19 01:04:28', '2018-05-19 01:04:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foods_production`
--

CREATE TABLE `foods_production` (
  `idProduction` bigint(20) UNSIGNED NOT NULL,
  `idFood` bigint(20) UNSIGNED NOT NULL,
  `quantityProduction` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foods_production`
--

INSERT INTO `foods_production` (`idProduction`, `idFood`, `quantityProduction`, `created_at`, `updated_at`) VALUES
(6, 1, '400.00', '2018-05-17 01:54:33', '2018-05-23 23:20:29'),
(8, 3, '100.00', '2018-05-17 22:44:01', '2018-05-17 22:44:01'),
(9, 2, '2000.00', '2018-05-19 00:43:11', '2018-05-23 23:20:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2018_05_05_032632_create_clients_table', 1),
(37, '2018_05_09_032643_create_foods_table', 1),
(38, '2018_05_10_001515_create_foods_production_table', 1),
(39, '2018_05_12_060441_create_recipes_table', 1),
(40, '2018_05_12_153929_create_recipes_details_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plates`
--

CREATE TABLE `plates` (
  `idPlate` bigint(20) NOT NULL,
  `idRecipe` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plates`
--

INSERT INTO `plates` (`idPlate`, `idRecipe`) VALUES
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE `recipes` (
  `idRecipe` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`idRecipe`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PASTA CON POLLO', '2018-05-18 19:20:21', '2018-05-18 19:20:21'),
(2, 'EMPANADA', '2018-05-18 23:40:39', '2018-05-18 23:40:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes_details`
--

CREATE TABLE `recipes_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idRecipe` bigint(20) UNSIGNED NOT NULL,
  `idFood` bigint(20) UNSIGNED NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `recipes_details`
--

INSERT INTO `recipes_details` (`id`, `idRecipe`, `idFood`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1000.00', NULL, NULL),
(2, 1, 2, '2000.00', NULL, NULL),
(3, 2, 3, '200.00', NULL, NULL),
(4, 2, 2, '2000.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manuel Castro', 'alejocastro2@gmail.com', '$2y$10$kXDXAn.p7xHlsr.fNweLKe6ziOk86sWMCEV0i.o5GO4xzNJpClXLu', NULL, '2018-05-16 22:16:08', '2018-05-16 22:16:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`idFood`);

--
-- Indices de la tabla `foods_production`
--
ALTER TABLE `foods_production`
  ADD PRIMARY KEY (`idProduction`),
  ADD UNIQUE KEY `foods_production_idfood_unique` (`idFood`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plates`
--
ALTER TABLE `plates`
  ADD PRIMARY KEY (`idPlate`),
  ADD KEY `idRecipe` (`idRecipe`);

--
-- Indices de la tabla `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`idRecipe`);

--
-- Indices de la tabla `recipes_details`
--
ALTER TABLE `recipes_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_details_idrecipe_index` (`idRecipe`),
  ADD KEY `recipes_details_idfood_index` (`idFood`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foods`
--
ALTER TABLE `foods`
  MODIFY `idFood` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `foods_production`
--
ALTER TABLE `foods_production`
  MODIFY `idProduction` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `plates`
--
ALTER TABLE `plates`
  MODIFY `idPlate` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `recipes`
--
ALTER TABLE `recipes`
  MODIFY `idRecipe` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recipes_details`
--
ALTER TABLE `recipes_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foods_production`
--
ALTER TABLE `foods_production`
  ADD CONSTRAINT `foods_production_idfood_foreign` FOREIGN KEY (`idFood`) REFERENCES `foods` (`idFood`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plates`
--
ALTER TABLE `plates`
  ADD CONSTRAINT `plates_ibfk_1` FOREIGN KEY (`idRecipe`) REFERENCES `recipes` (`idRecipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recipes_details`
--
ALTER TABLE `recipes_details`
  ADD CONSTRAINT `recipes_details_idfood_foreign` FOREIGN KEY (`idFood`) REFERENCES `foods` (`idFood`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recipes_details_idrecipe_foreign` FOREIGN KEY (`idRecipe`) REFERENCES `recipes` (`idRecipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
