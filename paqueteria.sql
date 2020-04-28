-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2020 a las 12:49:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paqueteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('44269b117ab6f9b582895292676ad20ca38d6dc1668bd486c79ef1445dc1839849cb7dbae4efc5e4', 7, 2, NULL, '[]', 0, '2020-04-28 10:24:42', '2020-04-28 10:24:42', '2021-04-28 03:24:42'),
('4a98f1bb0bb87887c88a2b1896699ce8732a528d4b9f8078a2cbe26c5126ce3b604030897fa8e539', 7, 2, NULL, '[]', 0, '2020-04-28 10:25:18', '2020-04-28 10:25:18', '2021-04-28 03:25:18'),
('958435a07ab24342d6239a41f7a722a575834e5ab38e7b9d886d3b1e4e0d44954c3fae10b422b7cc', 4, 2, NULL, '[]', 0, '2020-04-28 07:19:35', '2020-04-28 07:19:35', '2021-04-28 00:19:35'),
('ce9974e5577132e618283e42585607aa224868324b6e7e01bb057a5965c4a874837085db8420dd5c', 7, 2, NULL, '[]', 0, '2020-04-28 10:25:26', '2020-04-28 10:25:26', '2021-04-28 03:25:26'),
('ceec11b51f9de6bb94a991198950cd55f29c5bdc15716115ab51a4ca3ee8b7d614062990d51aca99', 7, 2, NULL, '[]', 0, '2020-04-28 10:24:36', '2020-04-28 10:24:36', '2021-04-28 03:24:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'j4wEDEhVfkaOVE2vt5s0EhNcVU2LvPqHbxd67GN1', 'http://localhost', 1, 0, 0, '2020-04-15 11:25:16', '2020-04-15 11:25:16'),
(2, NULL, 'Laravel Password Grant Client', '10tX4Cg8XgWXpFq7OX9x4ZSFiGoesQQ5K57ulj7x', 'http://localhost', 0, 1, 0, '2020-04-15 11:25:16', '2020-04-15 11:25:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-04-15 11:25:16', '2020-04-15 11:25:16'),
(2, 3, '2020-04-27 11:51:44', '2020-04-27 11:51:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('00c719f0a3579f3e5e1be740ad1471cfcc56cfed87a9a8497ac5e2a52fc166ff6ca61c12d649bb92', '44269b117ab6f9b582895292676ad20ca38d6dc1668bd486c79ef1445dc1839849cb7dbae4efc5e4', 0, '2021-04-28 03:24:42'),
('0cd1aa12c61f028c64a1202a04606cff1ea9507dd0306c3ad40cc9c399e8c0b9720cccea1d0210de', 'ce9974e5577132e618283e42585607aa224868324b6e7e01bb057a5965c4a874837085db8420dd5c', 0, '2021-04-28 03:25:26'),
('3846f9f1ebf05bb5b15b9e03ebedacf9dc0cb6fa568662b37968f354507b37c29220085eb5f37001', 'ceec11b51f9de6bb94a991198950cd55f29c5bdc15716115ab51a4ca3ee8b7d614062990d51aca99', 0, '2021-04-28 03:24:36'),
('bda825a9d4760545578841c1cf3ef2acef80c0cb580a60bc28436d0c92772fca3887b567b8bd936a', '958435a07ab24342d6239a41f7a722a575834e5ab38e7b9d886d3b1e4e0d44954c3fae10b422b7cc', 0, '2021-04-28 00:19:35'),
('f90619d639ac5c70b4201f5de3ccc7257984ec14309c9e29911a67139b7fd65f3c07bc5725b1a110', '4a98f1bb0bb87887c88a2b1896699ce8732a528d4b9f8078a2cbe26c5126ce3b604030897fa8e539', 0, '2021-04-28 03:25:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `tipo_tarea` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado_tarea` varchar(25) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `id_user`, `fecha`, `tipo_tarea`, `descripcion`, `estado_tarea`, `ubicacion`, `created_at`, `updated_at`) VALUES
(1, 7, '2020-04-26 01:07:08', 'Mantenimiento', 'Mantenimiento al equipo de carga.', 'Pendiente', 'Planta', '2020-04-26 01:07:08', '2020-04-28 13:45:06'),
(2, 7, '2020-04-26 06:39:06', 'Capturar ordenes', 'Capturar ordenes de paquetes. ', 'Pendiente', 'Planta', '2020-04-26 06:39:06', NULL),
(3, 7, '2020-04-28 06:56:50', 'Entregar paquetes', 'Distribuir  paquetes para entrega local.', 'Nueva', 'Fuera', '2020-04-28 13:56:50', '2020-04-28 13:56:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `descripcion`) VALUES
(0, 'Administrador'),
(1, 'Repartidor de Planta'),
(2, 'Repartidor domicilio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tarea`
--

CREATE TABLE `tipo_tarea` (
  `id` int(11) NOT NULL,
  `tipo_tarea_nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_tarea`
--

INSERT INTO `tipo_tarea` (`id`, `tipo_tarea_nombre`) VALUES
(1, 'Mantenimiento'),
(2, 'Capturar ordenes'),
(3, 'Entrega de paquetes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tipos_usuario` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_tipos_usuario`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 0, 'Karen Liliana Mendivil', 'karenlili14@gmail.com', NULL, '$2y$10$3GWgQ4ypCurafOAgW.nEQu/Pqq7JuDGGw/lAMrMeOnxG2bOmc0THS', NULL, '2020-04-23 15:59:25', '2020-04-23 15:59:25'),
(5, 0, 'Eduardo Antolin', 'eduardoantolin@email.com', NULL, '$2y$10$ohVWqZSEUPlrPWQPTN5g6u90H7enPEy5uG/FFEicZvFioecbN3AC6', NULL, '2020-04-24 08:42:15', '2020-04-24 08:42:15'),
(6, 0, 'Emma Sofia Mendivil', 'emmasofia@email.com', NULL, '$2y$10$a4NOeDnOlCeJsFda.Ob8zOZ6lSZP8.hZ5dutH1KcSUqsnooOSfJCS', NULL, '2020-04-24 08:43:23', '2020-04-24 08:43:23'),
(7, 2, 'Jose Rodriguez', 'joserodri@email.com', NULL, '$2y$10$LYyqEufRZYZIKr62i8K/nelMsoYLydKaFJJewHIYILxmbUqU2ifZ6', NULL, '2020-04-25 16:06:48', '2020-04-25 16:06:48'),
(11, 1, 'Prueba eliminar 6', 'pruebaEliminar5@gmail.com', NULL, '$2y$10$phhYn/bkR/nvguvJFJ.Cp.GdbX4EyXx5B3FRtYFTytpfndQzmhFKy', NULL, '2020-04-26 15:44:38', '2020-04-27 05:57:39'),
(12, 1, 'Prueba eliminar 6', 'pruebaEliminar6@gmail.com', NULL, '$2y$10$Z9CTDHi.7xYrirKW/12tT.FNtctxy0qXRTam16tf4b.2Ixcelhbsy', NULL, '2020-04-26 15:46:51', '2020-04-26 15:46:51'),
(14, 1, 'Prueba eliminar 8', 'pruebaEliminar8@gmail.com', NULL, '$2y$10$aGfqsmpEfud6Qttbmt.Bfe36mKyWzV4Ln0ey3iQHb1FPu0v65izmC', NULL, '2020-04-26 15:51:44', '2020-04-26 15:51:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_tarea`
--
ALTER TABLE `tipo_tarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_tipos_usuario` (`id_tipos_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_tarea`
--
ALTER TABLE `tipo_tarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_tipos_usuario`) REFERENCES `tipos_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
