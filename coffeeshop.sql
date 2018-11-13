-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 23:03:52
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
(5, '2018_11_05_152017_create_profile_table', 3);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `description`, `created_at`, `updated_at`) VALUES
(274, 'americano', 'americano', 'simple, americano, pure blunt flavor', 170, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(275, 'capuchino', 'capuchino', 'Milk foam, steamed milk and espresso', 300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(276, 'flat white', 'flat white', 'Steamed milk and espresso', 350, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(277, 'latte macchiato', 'latte macchiato', 'Milk foam, espresso and steamed milk with the gradient we love', 360, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(278, 'mocaccino', 'mocaccino', 'Chocolate in coffee? We have it. Steamed milk, hot chocolate and espresso', 450, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(279, 'expresso', 'expresso', 'Just espresso, with the right foam.', 290, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(280, 'ice coffee', 'ice coffee', 'On the rocks without the alcohol? And creamy.', 680, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(281, 'frappe', 'frappe', 'You like that cold feeling, with the cream burning your throat with ice.', 780, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(282, 'irish', 'irish', 'Whats better than alcohol or coffee? Joining them together', 1100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(283, 'affogato', 'affogato', 'The ice cream melts with the hot coffee pouring.', 1120, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(284, 'arabica', 'arabica', 'Arabica coffee beans, with the most quality', 2000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(285, 'robusta', 'robusta', 'Robusta coffee beans, with the most quality', 2000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(286, 'canned', 'canned', 'Coffee, but canned. You decide whether hot or cold', 340, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(287, 'capsule', 'capsule', 'On the go? not so much, use a coffee machine', 200, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(288, 'sachets', 'sachets', 'Just what we need when you want something fast', 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(289, 'instant', 'instant', 'Instant simple coffee', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(290, '3 milk', '3 milk', 'Three types of milk in just one cake. Try it.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(291, 'alfajor', 'alfajor', 'If this is really Argentinian, then they are genius.', 1000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(292, 'apple pie', 'apple pie', 'Best type of pie there exists. Just american.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(293, 'bags', 'bags', 'Coffee in little bags? Incredible.', 1150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(294, 'banana bread', 'banana bread', 'As the name tells, just banana bread.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(295, 'birthday cake cupcake', 'birthday cake cupcake', 'For YOU beloved one', 700, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(296, 'blueberry muffin', 'blueberry muffin', 'Not as sweet as a cupcake, just squishy', 720, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(297, 'brazil beans', 'brazil beans', 'Importation material, extra quality', 1300, '250gr. Made in brazil. Pure. No added ingredients nor sugar. From imported and local ingredients.', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(298, 'brownie', 'brownie', 'Name someone who doesnt love brownies. Exactly, no one', 770, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(299, 'butter cookies', 'butter cookies', 'The best type of cookie there is. They are also called danish. Woah.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(300, 'carrot cake', 'carrot cake', 'Have a slice of squishyness', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(301, 'cheesecake', 'cheesecake', 'If cheese wasnt good enough already, there it is, in a cake', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(302, 'chicken sandwich', 'chicken sandwich', 'I swear this isnt subways', 780, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(303, 'chocolate icecream', 'chocolate icecream', 'The right pal to a coffee break', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(304, 'chocolate chips', 'chocolate chips', 'The right pal to a coffee break, in another flavor', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(305, 'chocolate cupcake', 'chocolate cupcake', 'One cupcake is not enough', 590, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(306, 'chocolate syrup', 'chocolate syrup', 'Inside the coffee? Above it? You decide', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(307, 'coconut cake', 'coconut cake', 'Seeing this makes you droll', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(308, 'colombian beans', 'colombian beans', 'People say, best beans in the world', 2100, '250gr. Made in colombia. Pure. No added ingredients nor sugar. From imported and local ingredients.', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(309, 'cookies', 'cookies', 'Have one ...or two. Or three of these while coffeeing', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(310, 'cream puff', 'cream puff', 'Fancy stuff.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(311, 'croissant', 'croissant', 'Perfect as your breakfast', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(312, 'donuts', 'donuts', 'Endulge', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(313, 'double chocolate', 'double chocolate', 'How about it with a mochaccino?', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(314, 'empanadilla', 'empanadilla', 'Bites, and bites', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(315, 'macarons', 'macarons', 'A classic, fancy threat.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(316, 'mint icecream', 'mint icecream', 'Super refreshing', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(317, 'palmerita', 'palmerita', 'Adorably sweet', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(318, 'pan jamon', 'pan jamon', 'Got ya covered in christmas', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(319, 'pistachio icecream', 'pistachio icecream', 'Salty and sweet', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(320, 'pumpkin cake', 'pumpkin cake', 'For Halloween! or just whenever', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(321, 'rainbow cupcake', 'rainbow cupcake', 'A rainbow for the heart. Or your special occasion', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(322, 'strawberry cake', 'strawberry cake', 'A classic too', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(323, 'strawberry donut', 'strawberry donut', 'Strawberry on everything', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(324, 'strawberry syrup', 'strawberry syrup', 'Dont know if this is of your liking in your coffee, but recommend anyways', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(325, 'turron', 'turron', 'Wish to have it all christmas long', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(326, 'vainilla cake', 'vainila cake', 'When you dont fancy that much amount of sugar', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(327, 'vainilla cupcake', 'vainilla cupcake', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(328, 'flan', 'flan', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(329, 'generic bags', 'generic bags', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(330, 'ginger cookies', 'ginger cookies', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(331, 'milkshakes', 'milkshakes', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(332, 'pan dulce', 'pan dulce', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(333, 'pan dulce chocolate', 'pan dulce chocolate', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(334, 'waffles', 'waffles', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(335, 'waffles dulces', 'waffles dulces', 'Simple.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(336, 'cereal bar', 'cereal bar', 'Mix of different types of nuts and rice cereal.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(337, 'ginger butter biscuits', 'ginger butter biscuits', 'With bakery cream inside.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(338, 'maria biscuits', 'maria biscuits', 'The classical maria biscuits.', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02'),
(339, 'maria biscuits pack', 'maria biscuits pack', '24 packs. One price', 1300, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '2018-11-14 01:36:02', '2018-11-14 01:36:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `tlf` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `tlf`, `email`, `direccion`, `avatar`, `facebook`, `twitter`, `google`, `instagram`, `id_users`, `created_at`, `updated_at`) VALUES
(9, 8888888, 'isismartinez20@hotmail.com', 'Lorem ipsum dolor sit amet consectetur adipiscing elit class, senectus pellentesque parturient malesuada mi convallis auctor semper, egestas vel cras nec nisi varius ultrices.', '1541891590.jpg', 'isis_martinez', 'isistalk', 'isistalk', 'isistalk', 4, '2018-11-06 23:02:28', '2018-11-11 03:48:50'),
(10, NULL, NULL, NULL, '1541889775.jpg', 'isis_martinez', 'isistalk', 'isistalk', 'isistalk', 4, '2018-11-11 03:12:55', '2018-11-11 03:12:55');

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
(4, 'Isis', 'Martinez', 'isismartinez20@hotmail.com', '$2y$10$3r1A8.8JDUW.C8TBkzJzKupyj6D.m7lQrRWSZIXNyjq8HMeBa8im6', 'BnDD15WDuqdIDMDMJdLrooip84Df1GWWEZjtNNqr6cZTQUvaKanGVi1tYa6L', '2018-10-28 23:01:08', '2018-10-28 23:01:08');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

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
