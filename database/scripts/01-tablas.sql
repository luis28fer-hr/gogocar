CREATE TABLE `viajes` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `persona_ofrece_id` bigint,
    `automovil_id` int,
    `tipo_viaje_id` int,
    `punto_salida` varchar(100),
    `hora_salida` datetime,
    `punto_llegada` varchar(100),
    `hora_llegada` datetime,
    `comentarios` varchar(255),
    `asientos_disponibles` tinyint,
    `activo` boolean,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `tiposViajes` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `descripcion` varchar(255),
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `solicitudes` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `viaje_id` int,
    `estatus_id` int,
    `usuario_id` int,
    `comentarios` varchar(255),
    `fecha_solicitado` datetime,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `estatusSolicitudes` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `descripcion` varchar(50),
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `users` (
    `id` bigint PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) UNIQUE NOT NULL,
    `password` varchar(255) NOT NULL,
    `remember_token` varchar(100) DEFAULT NULL,
    `nombre` varchar(255),
    `apellido_paterno` varchar(255),
    `apellido_materno` varchar(255),
    `matricula` varchar(50),
    `telefono_celular` bigint(10),
    `es_cliente` boolean,
    `verificado` boolean,
    `email_verified_at` timestamp DEFAULT NULL,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `autos` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `usuario_id` bigint,
    `placa` varchar(255),
    `marca` varchar(255),
    `modelo` varchar(255),
    `capacidad` tinyint,
    `no_seguro` varchar(255),
    `verificado` boolean,
    `activo` boolean,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `calificaciones` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `viaje_id` int,
    `persona_califica_id` int,
    `persona_calificada_id` int,
    `puntuacion` tinyint,
    `comentarios` varchar(255),
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `failed_jobs` (
    `id` bigint PRIMARY KEY AUTO_INCREMENT,
    `uuid` varchar(255) NOT NULL,
    `connection` text NOT NULL,
    `queue` text NOT NULL,
    `payload` longtext NOT NULL,
    `exception` longtext NOT NULL,
    `failed_at` timestamp NOT NULL,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `password_resets_tokens` (
    `id` bigint PRIMARY KEY AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `token` varchar(255) NOT NULL,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
CREATE TABLE `personal_access_tokens` (
    `id` bigint PRIMARY KEY AUTO_INCREMENT,
    `tokenable_type` varchar(255) NOT NULL,
    `tokenable_id` bigint NOT NULL,
    `name` varchar(255) NOT NULL,
    `token` varchar(64) NOT NULL,
    `abilities` text,
    `last_used_at` timestamp DEFAULT NULL,
    `expires_at` timestamp DEFAULT NULL,
    `created_at` timestamp DEFAULT NULL,
    `updated_at` timestamp DEFAULT NULL,
    `deleted_at` timestamp DEFAULT null
);
ALTER TABLE `viajes`
ADD FOREIGN KEY (`persona_ofrece_id`) REFERENCES `users` (`id`);
ALTER TABLE `viajes`
ADD FOREIGN KEY (`automovil_id`) REFERENCES `autos` (`id`);
ALTER TABLE `viajes`
ADD FOREIGN KEY (`tipo_viaje_id`) REFERENCES `tiposViajes` (`id`);
ALTER TABLE `solicitudes`
ADD FOREIGN KEY (`viaje_id`) REFERENCES `viajes` (`id`);
ALTER TABLE `solicitudes`
ADD FOREIGN KEY (`estatus_id`) REFERENCES `estatusSolicitudes` (`id`);
ALTER TABLE `autos`
ADD FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);
ALTER TABLE `calificaciones`
ADD FOREIGN KEY (`viaje_id`) REFERENCES `viajes` (`id`);