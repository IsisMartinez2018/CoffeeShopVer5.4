-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 16:25:27
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `last_name`, `email`, `password`, `job_title`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luna', 'Lovelace', 'luna@hotmail.com', '$2y$10$C8EGH0pUcqPGzINH7SMh5.MI/L3.azw86HZM60RR1eQQ5ozOdDXu6', 'administradora', 'mIWlvANSuDGA3wa1GRWTyx7PgRVJ2KAA0str8xh4VkzKzJTLiR7dQfIHUUdM', '2018-10-27 21:17:14', '2018-10-29 01:25:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Frio', 'Frio', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(2, 'Caliente', 'Caliente', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(3, 'Cremoso', 'Cremoso', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(4, 'Para llevar', 'Para llevar', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(5, 'Dulzor', 'Dulzor', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(6, 'Con alcohol', 'Con alcohol', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(7, 'Por sabor', 'Por sabor', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(8, 'Mezclas', 'Mezclas', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(9, 'Filtros', 'Filtros', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(10, 'Granos', 'Granos', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(11, 'Bolsitas', 'Bolsitas', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(12, 'Dulces acompañantes', 'Dulces acompañantes', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(13, 'Salados acompañantes', 'Salados acompañantes', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(14, 'Especiales de temporada', 'Especiales de temporada', '2018-11-19 03:56:35', '2018-11-19 03:56:35'),
(15, 'Por pais', 'Por pais', '2018-11-19 03:56:35', '2018-11-19 03:56:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(145, 617, 2, NULL, NULL),
(146, 618, 2, NULL, NULL),
(147, 619, 2, NULL, NULL),
(148, 620, 2, NULL, NULL),
(149, 621, 2, NULL, NULL),
(150, 622, 2, NULL, NULL),
(151, 623, 1, NULL, NULL),
(152, 624, 1, NULL, NULL),
(153, 625, 2, NULL, NULL),
(154, 626, 1, NULL, NULL),
(155, 627, 4, NULL, NULL),
(156, 628, 4, NULL, NULL),
(158, 630, 4, NULL, NULL),
(159, 631, 4, NULL, NULL),
(160, 632, 4, NULL, NULL),
(161, 633, 3, NULL, NULL),
(162, 634, 5, NULL, NULL),
(163, 635, 5, NULL, NULL),
(164, 636, 4, NULL, NULL),
(165, 637, 5, NULL, NULL),
(166, 638, 5, NULL, NULL),
(167, 639, 5, NULL, NULL),
(168, 640, 4, NULL, NULL),
(169, 641, 5, NULL, NULL),
(170, 642, 5, NULL, NULL),
(171, 643, 5, NULL, NULL),
(172, 644, 5, NULL, NULL),
(173, 645, 13, NULL, NULL),
(174, 646, 5, NULL, NULL),
(175, 647, 5, NULL, NULL),
(176, 648, 5, NULL, NULL),
(178, 650, 5, NULL, NULL),
(179, 651, 4, NULL, NULL),
(180, 652, 5, NULL, NULL),
(181, 653, 5, NULL, NULL),
(182, 654, 13, NULL, NULL),
(183, 655, 12, NULL, NULL),
(184, 656, 12, NULL, NULL),
(185, 657, 13, NULL, NULL),
(186, 658, 12, NULL, NULL),
(187, 659, 12, NULL, NULL),
(188, 660, 12, NULL, NULL),
(189, 661, 14, NULL, NULL),
(190, 662, 5, NULL, NULL),
(191, 663, 12, NULL, NULL),
(192, 664, 12, NULL, NULL),
(193, 665, 12, NULL, NULL),
(194, 666, 12, NULL, NULL),
(195, 667, 4, NULL, NULL),
(196, 668, 14, NULL, NULL),
(197, 669, 12, NULL, NULL),
(198, 670, 12, NULL, NULL),
(199, 671, 12, NULL, NULL),
(200, 672, 11, NULL, NULL),
(201, 673, 12, NULL, NULL),
(202, 674, 5, NULL, NULL),
(203, 675, 12, NULL, NULL),
(204, 676, 12, NULL, NULL),
(205, 677, 13, NULL, NULL),
(206, 678, 12, NULL, NULL),
(207, 679, 12, NULL, NULL),
(208, 680, 12, NULL, NULL),
(209, 681, 12, NULL, NULL),
(210, 682, 4, NULL, NULL),
(211, 662, 1, NULL, NULL),
(212, 647, 1, NULL, NULL),
(213, 646, 1, NULL, NULL),
(214, 626, 1, NULL, NULL),
(215, 623, 1, NULL, NULL),
(216, 659, 1, NULL, NULL),
(217, 659, 1, NULL, NULL),
(218, 663, 14, NULL, NULL),
(219, 638, 14, NULL, NULL),
(220, 640, 10, NULL, NULL),
(221, 651, 10, NULL, NULL),
(222, 640, 15, NULL, NULL),
(223, 651, 15, NULL, NULL),
(224, 627, 10, NULL, NULL),
(225, 628, 10, NULL, NULL),
(226, 636, 11, NULL, NULL),
(227, 629, 2, NULL, NULL),
(228, 629, 4, NULL, NULL),
(229, 649, 4, NULL, NULL),
(230, 683, 9, NULL, NULL),
(231, 684, 9, NULL, NULL),
(232, 631, 11, NULL, NULL),
(233, 643, 3, NULL, NULL),
(234, 669, 3, NULL, NULL),
(235, 650, 3, NULL, NULL),
(236, 653, 3, NULL, NULL),
(237, 665, 3, NULL, NULL),
(238, 674, 1, NULL, NULL),
(239, 625, 6, NULL, NULL),
(240, 620, 3, NULL, NULL),
(241, 618, 3, NULL, NULL),
(242, 625, 7, NULL, NULL),
(243, 621, 7, NULL, NULL),
(244, 621, 3, NULL, NULL),
(245, 624, 3, NULL, NULL),
(246, 619, 3, NULL, NULL),
(247, 626, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `percent_off` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent_off`, `created_at`, `updated_at`) VALUES
(1, 'ABC123', 'fixed', 3000, NULL, NULL, NULL),
(2, 'DEF456', 'percent', NULL, 50, NULL, NULL);

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
(1, '2018_10_25_151819_create_orders_table', 1),
(2, '2018_10_27_155538_create_admin_table', 2),
(6, '2018_11_05_152017_create_profile_table', 3),
(7, '2018_11_18_203150_create_category_product_table', 4),
(8, '2018_11_11_191742_create_category_table', 20),
(9, '2018_11_11_233043_create_products_table', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type_Coffee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Extra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dulzor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Cantidad`, `Fecha`, `Comentario`, `Type_Coffee`, `Size`, `Extra`, `Dulzor`, `id_users`, `created_at`, `updated_at`) VALUES
(2, 'Maria', 'Perezz', 'mariaperez@gmail.com', 2222222, 3, '2018-11-03', '24x7 Food service are available', 'Capuccino', 'S', 'Hielo', 'edulcorante', 3, '2018-10-25 20:58:45', '2018-11-02 20:11:48'),
(3, 'Maria', 'Perezw', 'mariaperez@gmail.com', 6666666, 3, '2018-10-26', 'Online Food Order booking', 'Americano', 'M', 'Crema', 'azucar', 3, '2018-10-25 21:43:41', '2018-10-25 21:43:41'),
(4, 'Peppa', 'Piggi', 'peppapiggy2028@gmail.com', 9999999, 9, '2018-10-28', 'Credit and debit card payment', 'Latte', 'M', 'Helado', 'edulcorante', 3, '2018-10-27 22:31:35', '2018-10-27 22:31:35'),
(5, 'Isis', 'Martinez', 'isisprueba@gmail.com', 8888888, 4, '2018-11-12', 'Credit and debit card payment', 'Capuccino', 'M', 'Crema', 'edulcorante', 4, '2018-11-11 05:26:52', '2018-11-11 05:26:52');

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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `description`, `featured`, `created_at`, `updated_at`) VALUES
(617, 'americano', 'americano', 'simple, americano, pure blunt flavor', 170, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(618, 'capuchino', 'capuchino', 'Milk foam, steamed milk and espresso', 300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(619, 'flat white', 'flat white', 'Steamed milk and espresso', 350, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(620, 'latte macchiato', 'latte macchiato', 'Milk foam, espresso and steamed milk with the gradient we love', 360, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(621, 'mocaccino', 'mocaccino', 'Chocolate in coffee? We have it. Steamed milk, hot chocolate and espresso', 450, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(622, 'expresso', 'expresso', 'Just espresso, with the right foam.', 290, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(623, 'ice coffee', 'ice coffee', 'On the rocks without the alcohol? And creamy.', 680, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(624, 'frappe', 'frappe', 'You like that cold feeling, with the cream burning your throat with ice.', 780, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(625, 'irish', 'irish', 'Whats better than alcohol or coffee? Joining them together', 1100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(626, 'affogato', 'affogato', 'The ice cream melts with the hot coffee pouring.', 1120, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(627, 'arabica', 'arabica', 'Arabica coffee beans, with the most quality', 2000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(628, 'robusta', 'robusta', 'Robusta coffee beans, with the most quality', 2000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(629, 'canned', 'canned', 'Coffee, but canned. You decide whether hot or cold', 340, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(630, 'capsule', 'capsule', 'On the go? not so much, use a coffee machine', 200, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(631, 'sachets', 'sachets', 'Just what we need when you want something fast', 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(632, 'instant', 'instant', 'Instant simple coffee', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(633, '3 milk', '3 milk', 'Three types of milk in just one cake. Try it.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(634, 'alfajor', 'alfajor', 'If this is really Argentinian, then they are genius.', 1000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(635, 'apple pie', 'apple pie', 'Best type of pie there exists. Just american.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(636, 'bags', 'bags', 'Coffee in little bags? Incredible.', 1150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(637, 'banana bread', 'banana bread', 'As the name tells, just banana bread.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(638, 'birthday cake cupcake', 'birthday cake cupcake', 'For YOU beloved one', 700, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(639, 'blueberry muffin', 'blueberry muffin', 'Not as sweet as a cupcake, just squishy', 720, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(640, 'brazil beans', 'brazil beans', 'Importation material, extra quality', 1300, '250gr. Made in brazil. Pure. No added ingredients nor sugar. From imported and local ingredients.', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(641, 'brownie', 'brownie', 'Name someone who doesnt love brownies. Exactly, no one', 770, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(642, 'butter cookies', 'butter cookies', 'The best type of cookie there is. They are also called danish. Woah.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(643, 'carrot cake', 'carrot cake', 'Have a slice of squishyness', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(644, 'cheesecake', 'cheesecake', 'If cheese wasnt good enough already, there it is, in a cake', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(645, 'chicken sandwich', 'chicken sandwich', 'I swear this isnt subways', 780, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(646, 'chocolate icecream', 'chocolate icecream', 'The right pal to a coffee break', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(647, 'chocolate chips', 'chocolate chips', 'The right pal to a coffee break, in another flavor', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(648, 'chocolate cupcake', 'chocolate cupcake', 'One cupcake is not enough', 590, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(649, 'chocolate syrup', 'chocolate syrup', 'Inside the coffee? Above it? You decide', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(650, 'coconut cake', 'coconut cake', 'Seeing this makes you droll', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(651, 'colombian beans', 'colombian beans', 'People say, best beans in the world', 2100, '250gr. Made in colombia. Pure. No added ingredients nor sugar. From imported and local ingredients.', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(652, 'cookies', 'cookies', 'Have one ...or two. Or three of these while coffeeing', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(653, 'cream puff', 'cream puff', 'Fancy stuff.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(654, 'croissant', 'croissant', 'Perfect as your breakfast', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(655, 'donuts', 'donuts', 'Endulge', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(656, 'double chocolate', 'double chocolate', 'How about it with a mochaccino?', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(657, 'empanadilla', 'empanadilla', 'Bites, and bites', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(658, 'macarons', 'macarons', 'A classic, fancy threat.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(659, 'mint icecream', 'mint icecream', 'Super refreshing', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(660, 'palmerita', 'palmerita', 'Adorably sweet', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(661, 'pan jamon', 'pan jamon', 'Got ya covered in christmas', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(662, 'pistachio icecream', 'pistachio icecream', 'Salty and sweet', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(663, 'pumpkin cake', 'pumpkin cake', 'For Halloween! or just whenever', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(664, 'rainbow cupcake', 'rainbow cupcake', 'A rainbow for the heart. Or your special occasion', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(665, 'strawberry cake', 'strawberry cake', 'A classic too', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(666, 'strawberry donut', 'strawberry donut', 'Strawberry on everything', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(667, 'strawberry syrup', 'strawberry syrup', 'Dont know if this is of your liking in your coffee, but recommend anyways', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(668, 'turron', 'turron', 'Wish to have it all christmas long', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(669, 'vainilla cake', 'vainilla cake', 'When you dont fancy that much amount of sugar', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(670, 'vainilla cupcake', 'vainilla cupcake', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(671, 'flan', 'flan', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(672, 'generic bags', 'generic bags', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(673, 'ginger cookies', 'ginger cookies', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(674, 'milkshakes', 'milkshakes', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(675, 'pan dulce', 'pan dulce', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(676, 'pan dulce chocolate', 'pan dulce chocolate', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(677, 'waffles', 'waffles', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(678, 'waffles dulces', 'waffles dulces', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(679, 'cereal bar', 'cereal bar', 'Mix of different types of nuts and rice cereal.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(680, 'ginger butter biscuits', 'ginger butter biscuits', 'With bakery cream inside.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(681, 'maria biscuits', 'maria biscuits', 'The classical maria biscuits.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(682, 'maria biscuits pack', 'maria biscuits pack', '24 packs. One price', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, '2018-11-19 04:04:04', '2018-11-19 04:04:04'),
(683, 'filtros', 'filtros', 'Filtros de marca. Buena calidad.', 800, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 1, '2018-11-19 04:30:00', '2018-11-19 04:30:00'),
(684, 'filtros genericos', 'filtros genericos', 'Filtros genericos. Simples.', 1200, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 1, '2018-11-19 04:30:00', '2018-11-19 04:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `tlf` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `tlf`, `email`, `direccion`, `avatar`, `facebook`, `twitter`, `google`, `instagram`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 5675436, 'isisprueba@gmail.com', 'P. Sherman Calle Wallaby 42 Sydney, Australia', '1542660172.jpg', 'isis_martinez', 'isistalk', 'isistalk', 'isistalk', 4, '2018-11-20 00:46:33', '2018-11-20 01:15:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Wuendy', 'Martinez', 'wuendy@gmail.com', '$2y$10$xI7zM8J0PkSKNZqIunhwIuI8MZkObieOqMQ2F9/3czkwHRcMSHcXy', 'LYTWgBW8chKZh3kusP5oj26xZujh2XDHjefRS64fuOJgEANARPqrvH4ofJZ1', '2018-10-22 21:31:29', '2018-10-22 21:31:29'),
(3, 'Maria', 'Perez', 'mariaperez@gmail.com', '$2y$10$5veNfDA7TnR0/hPJ/bhGY.O6366fb09/bvldGr6ec6DtBIPGHC/5K', 'i5mk85hLcu4Lk3iOZvdS4KcHzocC6s0xgvBhnqD8q2YzsjOmVBztLM2gujoy', '2018-10-22 22:14:23', '2018-10-22 22:14:23'),
(4, 'Isis', 'Martinez', 'isismartinez20@hotmail.com', '$2y$10$3r1A8.8JDUW.C8TBkzJzKupyj6D.m7lQrRWSZIXNyjq8HMeBa8im6', 'jNoCQqz6OrkzrwgNDPkfwZJTKCRNAnIszSLHYbK8acMhvFDoeNsBih7UwKND', '2018-10-28 23:01:08', '2018-10-28 23:01:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_users_foreign` (`id_users`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id_users_foreign` (`id_users`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT de la tabla `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=685;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `category_product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
