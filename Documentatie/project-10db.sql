-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jan 2025 om 14:57
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-10`
--
CREATE DATABASE IF NOT EXISTS `project-10` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project-10`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `submitted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `phonenumber`, `message`, `submitted_at`, `created_at`, `updated_at`) VALUES
(1, 'Justine Connelly', 'milford.zboncak@example.net', '559-780-6732', 'Impedit modi sit fugit. Sed omnis unde quae quo perspiciatis illum. Quae ut voluptate delectus quo. Nam provident et magni voluptas natus et esse.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(2, 'Nella Langworth', 'opaucek@example.net', '(612) 506-7472', 'Et totam harum consequuntur voluptatem itaque quos minus. Autem sequi doloribus omnis in consectetur. Rerum repudiandae qui et ut quam consequatur ipsa.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(3, 'Dr. Sanford Little', 'justine.koch@example.org', '+1.952.443.3032', 'Laboriosam doloribus autem veniam et. Facere molestiae vitae odio consectetur. Est quidem facilis distinctio veritatis nihil dolor.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(4, 'Jaiden Cronin', 'whermiston@example.com', '+1-458-982-2628', 'Molestias dolores eos autem iusto sit vel. Quasi ut voluptatem molestias. Accusamus sed sed sit sed aut. Est aut et est sunt saepe. Consequatur omnis fugit error.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(5, 'Trever Raynor III', 'patience64@example.com', '1-386-812-5753', 'Ipsum eum at minima eos id. Ea corporis magni molestias dolores est aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(6, 'Shyanne Heaney', 'herzog.brendan@example.net', '1-910-688-1531', 'Et quo repellat esse asperiores. Eum sed distinctio explicabo sint repudiandae dolores numquam nemo. Laboriosam debitis sint aspernatur.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(7, 'Katherine Beier Sr.', 'isaiah72@example.org', '+1-402-849-9045', 'Vel laborum et tempore ut necessitatibus beatae voluptatibus. Fugit omnis dolore laborum. Illum necessitatibus aut rerum dolores.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(8, 'Isaac Bailey', 'lelia33@example.net', '+1-309-517-1914', 'Ut aut exercitationem deserunt quaerat quo inventore qui. Explicabo quibusdam saepe eaque incidunt asperiores similique aliquam ratione.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(9, 'Dr. Alfonzo Rau', 'zelma62@example.com', '+1.310.268.9327', 'Qui enim omnis magnam tempore. Dolorem suscipit aut vel voluptas. Saepe rerum porro qui autem sunt optio sunt consectetur. Cum voluptas dolorem dolorum fugit sunt totam.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(10, 'Raleigh Barrows', 'edythe47@example.org', '229.992.4585', 'Sit omnis et sapiente expedita possimus eveniet. Error earum cumque rem quo pariatur ut nostrum ullam. Odio quo accusamus nemo sed et voluptas libero.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(11, 'Mr. Osvaldo Macejkovic V', 'damore.nakia@example.org', '336-445-5354', 'Iure blanditiis quis odio consequatur error. Ea aperiam blanditiis vel rerum. Ipsam eius quod at consequatur ipsam quia velit eum. Natus impedit soluta rerum cum.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(12, 'Kieran Rempel', 'alfred.denesik@example.net', '+1.702.522.0624', 'Asperiores quo ullam quia itaque earum. Unde natus voluptas libero et repudiandae et quia. Tempora dolorem eveniet reiciendis sed et. Sit laudantium omnis numquam soluta.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(13, 'Dr. Houston Strosin', 'hyatt.rey@example.org', '936-462-0980', 'Sed adipisci ratione quia. Eum est est ut amet aut pariatur. Porro quis vel reprehenderit dicta. Perferendis totam quisquam eaque voluptatem aperiam sed. Earum aperiam minima est impedit.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(14, 'Dean Connelly', 'thomas31@example.com', '(413) 369-1672', 'Voluptatem et voluptas et corrupti. Fugit repellendus ut animi cum. Deserunt et perferendis molestias ex est molestias. Alias non aperiam qui voluptas consequatur modi corporis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(15, 'Ms. Margie McGlynn', 'keenan.bartell@example.net', '215.918.8712', 'Consectetur ullam ea culpa architecto omnis repudiandae. Quidem perferendis dolorem porro expedita doloribus. Officia molestiae nam in enim iste. Exercitationem et quos quod labore harum et.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(16, 'Dr. Madaline Kulas', 'angelina.ruecker@example.net', '(218) 443-0689', 'Blanditiis sit laudantium et facere. Nihil fugiat est labore ut quas quod non ea. Est aut omnis quia pariatur fugiat in molestiae.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(17, 'Lupe Jakubowski', 'estevan70@example.org', '+1.601.208.4577', 'Sapiente quod quo ipsam vel. Adipisci qui earum inventore velit omnis. Dignissimos aut fugiat ea aspernatur est molestias.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(18, 'Howard Hills', 'iwuckert@example.com', '(928) 314-6008', 'Libero et repudiandae perferendis ad et. Eum et quis minima recusandae eos aspernatur eveniet. Expedita rerum sequi et. Deserunt et et et.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(19, 'Efrain Rempel', 'oosinski@example.net', '636-685-3795', 'Ut voluptates temporibus non omnis. Dolores pariatur voluptas aut est inventore omnis in. Inventore voluptatum et eius dolorem. Beatae harum est corporis nesciunt.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(20, 'Mr. Hugh Zboncak MD', 'huel.birdie@example.com', '+16819812167', 'Voluptatem ipsam aut ut aliquid nihil laborum animi. Ipsam incidunt veniam aut natus. Vel voluptatem facilis vel quo cupiditate omnis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(21, 'Garry Russel', 'mueller.claud@example.com', '669-218-6402', 'Et aut maxime rerum. Eum quis blanditiis quod explicabo dolorem ut nisi. Laborum ex nihil quas nostrum. Distinctio vel tempore dolor amet aut aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(22, 'Dr. Ismael Altenwerth', 'ikoelpin@example.net', '513-647-3803', 'Eum iusto adipisci vel pariatur. Dolorum sunt dolorem recusandae est provident sint voluptate. Et soluta quis id vel dolores. Ea nemo et suscipit dolore omnis et quos vero.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(23, 'Fanny Lang', 'eschmidt@example.com', '(269) 235-0194', 'Ratione cumque quas quasi esse vitae harum. Explicabo perferendis qui ea. Maxime maxime quia veritatis eos voluptas ipsum corporis autem. Laboriosam repudiandae magni minus asperiores.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(24, 'Mr. Sydney Marvin Jr.', 'lynch.tristin@example.net', '601-434-4251', 'Velit ipsa alias porro provident. Quidem dolor qui commodi nisi dolores. Ipsum sit explicabo dolorem repellat et. Asperiores aspernatur quis eum voluptatem.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(25, 'Marvin Upton', 'kaci94@example.org', '+1 (225) 876-7660', 'Accusantium dolor officia laboriosam consequuntur. Nihil sint vitae corrupti et eius aliquid. Quo assumenda aut quod.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(26, 'Norma Parker', 'madison94@example.org', '+15864493456', 'Voluptatem accusantium sit distinctio consequuntur. Et qui maxime dolores dolorem laudantium ullam eum. Corrupti exercitationem quia dolores veniam.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(27, 'Oceane O\'Reilly', 'tressa06@example.com', '(321) 360-5596', 'Vel amet placeat dolor ea nulla reiciendis quos. Doloribus est sed sit aspernatur quia minima quia. Omnis aliquam ipsa modi quibusdam quis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(28, 'Meagan Schultz', 'leonor.dickinson@example.com', '+1 (346) 470-6583', 'Harum voluptatem quas ea sint ullam earum. Voluptatem sint animi debitis sit. Qui voluptate qui nobis nobis. Voluptas quisquam repellendus provident accusantium.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(29, 'Marlee Nitzsche', 'buddy79@example.com', '270-959-6801', 'Aliquam aut vel quod voluptatem at. Quisquam illum odit occaecati in aut ipsa. Distinctio quisquam aut tenetur illo.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(30, 'Marcia Kemmer', 'nina.kovacek@example.org', '820-479-4394', 'Quam sed impedit et porro. Et qui veniam consequatur saepe.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(31, 'Maryjane Kassulke DVM', 'avis66@example.net', '346-649-3399', 'Aut labore magnam temporibus vel rem quos magni et. Beatae incidunt consequatur labore eveniet aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(32, 'Evie Goodwin', 'pouros.stephany@example.net', '(878) 247-1720', 'Quam sunt velit enim. Dolores et ut sint et magnam. Sapiente sequi et a aut atque enim cupiditate.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(33, 'Katarina Weber', 'emanuel34@example.net', '+1-970-746-1406', 'Temporibus aperiam ipsam quia animi. Nobis doloremque animi aut. Est consequuntur incidunt consectetur quibusdam alias qui. Nam debitis qui et voluptatibus omnis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(34, 'Eleanora Kemmer', 'ewunsch@example.org', '520-278-8964', 'Nesciunt dicta eos nobis ipsa sint et unde et. Delectus odio praesentium iure iusto beatae veritatis molestias. Ipsam dolorum nisi eum ut et.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(35, 'Avis Collier', 'jdach@example.net', '1-603-370-8081', 'Nesciunt blanditiis error sed ducimus eius. Sit asperiores ullam labore necessitatibus ut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(36, 'Jerrold Williamson I', 'hcole@example.com', '+1.501.333.9242', 'Quaerat sint vitae nesciunt. Error temporibus placeat doloribus tenetur ipsum velit. Accusantium harum quibusdam dolore voluptatem sapiente. Cum dolore ut voluptatem suscipit.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(37, 'Mariam West', 'maynard.west@example.com', '+1-425-860-2397', 'Similique quo qui enim iusto expedita incidunt dolores. Facilis est animi magnam commodi quas qui fugit. Omnis aut nostrum sed dignissimos aut quia. Cum cupiditate quod sit sint hic.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(38, 'Milton Bartell', 'coy.hodkiewicz@example.org', '971.235.8443', 'Ad molestiae modi enim doloribus. Non excepturi quas fugiat dolorum. In aliquid sit omnis quo. Non quis voluptate voluptates eveniet.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(39, 'Ms. Cortney Morissette MD', 'nolan.renee@example.com', '575.540.5899', 'Esse unde quos aut ab. Ullam natus saepe qui consequatur repellendus. Itaque quibusdam ea quibusdam vitae ut. Minima consequatur consectetur ipsam quo aut sunt.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(40, 'Dr. Gunnar Balistreri MD', 'fritsch.anika@example.net', '(870) 243-3678', 'Quaerat ea saepe et consectetur molestiae. Error consequatur alias consequuntur aut quis. Similique enim in velit occaecati voluptate ad. Error rerum iusto nostrum minima.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(41, 'Dr. Kyra Kemmer', 'brekke.yasmin@example.net', '+1-805-843-1878', 'Dolore et doloremque qui non a maxime aliquam consectetur. Voluptates atque commodi officiis enim distinctio. Officiis tempore aliquid dolorem rerum nesciunt alias quia.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(42, 'Gianni Grady III', 'dariana02@example.org', '240-950-7623', 'Voluptas deleniti sequi voluptatem enim. Qui eum omnis minima saepe. Totam fugit perspiciatis ducimus ex incidunt qui. Eveniet perspiciatis porro neque qui quae.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(43, 'Tyree Nitzsche', 'horacio.feest@example.com', '(479) 498-5073', 'Mollitia deserunt sed consequatur nulla. Voluptas non omnis quo fugiat natus alias earum mollitia.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(44, 'Emery Kessler', 'mikel.quitzon@example.com', '+1-757-513-4523', 'Laborum rerum quasi et incidunt delectus. Atque eum quaerat aperiam dignissimos eius minus. Qui culpa quis nemo sit itaque eligendi. Repellat dolor quisquam occaecati reiciendis aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(45, 'Ernest Hessel', 'courtney.blanda@example.com', '1-831-222-3645', 'Occaecati dignissimos hic omnis id. Similique quam ut voluptatem aut aliquam quis deserunt deserunt. Voluptatem facilis excepturi est ab facere qui itaque.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(46, 'Jermaine Thiel', 'kritchie@example.net', '+12255746588', 'Ducimus veniam qui ad aut recusandae doloremque. Autem ipsum aut ut distinctio. Sint voluptatem atque soluta perspiciatis cum expedita. Laborum ullam quod est sit.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(47, 'Bonnie Beier', 'mcglynn.faustino@example.net', '+1-763-458-8104', 'At eum ipsa laudantium aut incidunt mollitia omnis quis. Dolores a illo adipisci quia minus.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(48, 'Omer Price', 'nortiz@example.net', '1-660-488-2204', 'Quod voluptatem quia alias et. In molestiae aut reiciendis cum eum ad. Est dolor quia quod deleniti ipsam est culpa. Molestias harum rem dolor assumenda.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(49, 'Crystel Fadel', 'mann.mae@example.com', '248-766-2577', 'Rerum necessitatibus illo et laborum ab qui dolor. Sed dolor cumque sequi natus. Unde eum sunt illo dolores. Expedita aspernatur quod id vel aut inventore quibusdam.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(50, 'Loren Wisozk II', 'enid53@example.com', '(325) 858-6934', 'Qui labore qui ipsum aspernatur provident eligendi vero natus. A sint dolor est aut laudantium. Blanditiis velit quia perferendis harum quis minima voluptas.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(51, 'Brisa Strosin', 'bgusikowski@example.org', '313.594.2021', 'Temporibus totam aliquam eveniet iure iusto. Ut ipsam pariatur ut dolores eum quis. Dolorem et incidunt dolores natus vel.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(52, 'Mr. Ayden Dooley', 'wayne88@example.com', '+1.323.777.2374', 'Aut aut unde consequatur unde nihil cupiditate est. Consectetur omnis nam quia aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(53, 'Helena Skiles', 'pietro.dickens@example.org', '1-912-219-3472', 'Occaecati libero molestiae in. Rerum libero suscipit et quod quam dolorum voluptatem. Ea laudantium sit recusandae cumque id quia tempore. Modi pariatur doloremque velit sint error voluptatum.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(54, 'Bert Roob', 'velma34@example.com', '386-275-0921', 'Odit ut magni aspernatur est ducimus dicta excepturi quidem. Maiores iusto occaecati dignissimos recusandae. Et pariatur est reprehenderit consequatur qui. Atque tempore distinctio autem voluptas ea.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(55, 'Annabel Schmeler', 'buckridge.kim@example.org', '830.386.4919', 'Rerum rerum cumque distinctio nulla. Quia voluptas eum ad aut rerum nemo. Natus sed consectetur corrupti est. Quibusdam eius distinctio ut sit pariatur nulla sit.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(56, 'Lois Gislason', 'charity.weissnat@example.com', '+1-724-653-4160', 'Velit est maiores molestiae quos qui quia incidunt. Tenetur rem aut fuga aperiam soluta incidunt. Ab ab est qui dignissimos ipsam unde. Harum nostrum facere ipsum.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(57, 'Kiana Kutch', 'ferne17@example.org', '+1.503.300.6800', 'Pariatur consectetur accusamus culpa consequatur. Id autem adipisci eveniet voluptas. Tempore doloremque aliquid nesciunt adipisci est omnis accusantium alias.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(58, 'Fatima Bode', 'ubaldo29@example.com', '+1-323-662-2182', 'Laboriosam perferendis quis at vero saepe ab. Tenetur perferendis dolor velit unde atque. Perferendis ea vel sunt ea cumque eum et.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(59, 'Mr. Kay Halvorson', 'nnienow@example.org', '341.872.0109', 'Omnis corporis reiciendis animi delectus fugiat consequuntur ab. Qui nostrum unde voluptatem nam. Vel sunt et autem occaecati impedit voluptates. Facilis explicabo et id.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(60, 'Dr. Deon Gottlieb I', 'jarret.will@example.com', '+1 (283) 467-1412', 'Similique non velit commodi beatae ut. Aut eum iure hic magni qui aliquid nostrum eos. Adipisci voluptas quos voluptatem dolores. Asperiores magnam consequuntur et perferendis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(61, 'Dr. Makenna Quitzon', 'areynolds@example.net', '+18483871344', 'Libero in beatae quasi officia voluptates illum mollitia. Eos ea cum distinctio hic. Ut aliquid quo repudiandae consequatur.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(62, 'Alice Carroll MD', 'ernestina.adams@example.com', '+12819824837', 'Porro quo iusto dolores. Voluptatum aperiam expedita aperiam dolor molestiae impedit. Aliquid et cum velit placeat adipisci.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(63, 'Carlo Lemke I', 'hbeier@example.com', '+1.956.468.9615', 'Et quaerat aliquam est inventore ipsa aut aut. Inventore sit qui ducimus accusamus nulla aut. Vel aut vel culpa accusantium magnam. Ut mollitia occaecati explicabo incidunt natus.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(64, 'Giovanni Tremblay III', 'oberbrunner.eugenia@example.org', '323.621.8963', 'Eveniet aliquid et qui accusamus atque nobis inventore. Dolorem delectus eius commodi qui aut. Dolor enim consectetur ducimus porro molestiae ratione aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(65, 'Miss Nova Ferry', 'ella.welch@example.org', '951-744-1553', 'Maiores est adipisci quia vel eum voluptatem praesentium. Est iste iste est esse iure nemo tempore. Repellendus eius laboriosam minima atque ea culpa.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(66, 'Antwon Hand I', 'dpfannerstill@example.net', '(606) 696-6157', 'Et voluptatem magnam consequatur sapiente asperiores ut et. Totam sit aut impedit. Error consectetur quam iste aut qui dolor quia minus.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(67, 'Andreane Ledner', 'stracke.matilde@example.net', '+1 (831) 339-5843', 'Voluptas sit omnis corrupti quo. Quasi aperiam illo voluptatem dolore quo mollitia. Distinctio sapiente ad adipisci expedita provident. Nihil eius atque earum temporibus ducimus.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(68, 'Clyde Dickinson Jr.', 'tatyana24@example.com', '+1 (405) 785-7237', 'Commodi voluptas dolorum enim sunt. Nihil modi ratione labore amet. Aut impedit architecto quas harum dolores earum.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(69, 'Bonita Corwin MD', 'uking@example.org', '+1-267-782-7226', 'Est officiis ut eum. Aperiam et qui voluptatibus eveniet aut eligendi. Sit voluptatum exercitationem aliquid nulla perspiciatis harum error suscipit. Repellendus ratione quae nulla veritatis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(70, 'Janessa Hirthe', 'orunte@example.org', '1-470-207-9269', 'Vel quia consequatur voluptate quam. Est voluptatum magni officiis ea qui soluta. Qui qui rem non ipsam aut id. Eos nam ut sequi. Fugit in veniam similique corporis autem ut ea.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(71, 'Germaine Osinski', 'annalise.wuckert@example.net', '+1.978.609.8942', 'Doloremque magnam nihil maxime cum corrupti tempore. Possimus ut modi adipisci nam. Animi aut quasi voluptates molestias omnis. Explicabo qui rem magni facilis et facere dolor.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(72, 'Kathryne Schaefer Jr.', 'walsh.geovanny@example.com', '+1-959-363-7083', 'Fugiat deleniti iure aperiam voluptas quidem. Doloremque ea repudiandae mollitia nam. Repudiandae eius sit est voluptatem.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(73, 'Dr. Marisol Hayes', 'bernardo79@example.net', '+1-763-732-8356', 'Quia hic quis natus quia qui voluptates. Quo molestiae quod ipsa et doloremque. Voluptatem sed eos eius adipisci earum.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(74, 'Annabel Johnson', 'jmcclure@example.org', '+1 (573) 537-5141', 'Maxime rerum eligendi amet. Aut perferendis et est quia dignissimos quia. Numquam qui ab dolor eos porro fugiat.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(75, 'Miss Herminia Keeling DVM', 'vbogan@example.com', '940.336.8207', 'Nostrum aut corporis laudantium totam architecto dolores ex. Et temporibus iusto architecto nulla velit sed. Est mollitia voluptates non. Molestiae voluptas sequi dolorem voluptate placeat.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(76, 'Margarete Will', 'bdonnelly@example.com', '650-994-6121', 'Voluptas quis earum temporibus consectetur. Aut sint ut architecto est repellendus. Ut ipsum voluptas est optio. Ut delectus eum velit fugiat tempore voluptatem esse. Est quas voluptatibus odit.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(77, 'Thea Lesch', 'efrain43@example.net', '+1-256-220-8058', 'Totam deleniti aperiam quaerat vero ab dolores voluptatem molestiae. Praesentium sed labore odio eum natus aut.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(78, 'Eldora Kuphal', 'rkuhn@example.net', '+1-830-708-8084', 'Eos itaque voluptas dolor dicta qui non. Ratione consequatur quo aliquid. Sunt deleniti voluptatem quam minus architecto atque vel.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(79, 'Priscilla Kilback II', 'erwin.boyer@example.org', '+1-213-803-5284', 'Eaque quis minima aspernatur itaque. Beatae assumenda omnis aspernatur quia temporibus. Tenetur nemo sit eaque quod iure. Rerum placeat qui voluptatem omnis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(80, 'Yvette Moore IV', 'rodger.ohara@example.net', '(815) 584-9145', 'Et eius aut ipsum. Praesentium voluptatem perspiciatis et qui rerum. Quidem temporibus cumque non maxime fugit accusantium a.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(81, 'Lucas Kihn', 'considine.haylie@example.org', '+1 (234) 953-6425', 'Et beatae autem exercitationem qui repellat. Dolor omnis nulla aliquam velit deserunt architecto.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(82, 'Dr. Rogelio Hyatt', 'twilkinson@example.com', '1-714-956-3713', 'Rerum odit eius voluptatem nesciunt optio. Omnis provident non nihil fugit ab provident sunt. Qui expedita molestiae amet quibusdam sapiente.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(83, 'Mrs. Abagail Denesik DVM', 'qbotsford@example.org', '620.446.1422', 'Dicta officiis deleniti dicta sapiente provident velit praesentium. Aliquid iusto consequatur dolorum debitis aut in nihil.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(84, 'Branson Jerde I', 'hoeger.beau@example.org', '(702) 970-8055', 'Architecto dolor voluptas quaerat minus. Molestias suscipit a explicabo in.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(85, 'Prof. Saige Aufderhar', 'tania.brekke@example.net', '+1 (331) 814-2393', 'Earum quod aut cupiditate maxime ut. Culpa rerum autem ea. Nihil est qui doloremque est quos laudantium. Quod et occaecati blanditiis quos et.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(86, 'Ona Rolfson PhD', 'eleuschke@example.org', '603-541-9566', 'Optio et molestiae facere vitae tempore enim. Alias quia culpa nihil atque deserunt nam. Dolorum laudantium rerum voluptates. Doloremque iure eum officiis nam.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(87, 'Nona Daugherty', 'emmerich.annabel@example.com', '+19808902732', 'Ut ut dolorem ut est earum iusto. Nemo aut aut ad. Nam aut ipsa dolorem soluta.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(88, 'Mr. Laron Kutch II', 'tglover@example.org', '609-335-3998', 'Pariatur distinctio repudiandae eos. Facilis provident recusandae id consequuntur dolores et asperiores. Distinctio laboriosam qui facere eligendi. Minus et ut eum reiciendis tempora voluptas nobis.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(89, 'Connor Champlin', 'ortiz.andres@example.org', '458-249-6664', 'Excepturi sit sit eum et. Ut qui quidem veniam est omnis adipisci. Quaerat provident beatae quam dignissimos ut recusandae mollitia tempore.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(90, 'Garrison Johns II', 'arno.emard@example.com', '610-702-3915', 'Unde soluta quia possimus id. Quas culpa et non eveniet. Et id rem omnis neque accusantium temporibus earum.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(91, 'Arden Walsh', 'romaguera.walter@example.net', '+1-256-720-9685', 'Commodi quia eius ullam molestiae dicta ullam ut. Illo quia sed quasi mollitia blanditiis. Hic alias est veniam laboriosam sit consequatur adipisci.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(92, 'Itzel Stehr', 'kane63@example.org', '+1 (380) 425-1609', 'Itaque molestias dolorem tempora maxime inventore nisi. Quo sit vero et fugiat ut unde. Facilis quia inventore corrupti quisquam ut et dignissimos.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(93, 'Ms. Freida Wiza Jr.', 'jakubowski.ethan@example.net', '786-402-2853', 'Quidem in voluptate molestias. Accusantium voluptas vel impedit expedita sint blanditiis. Dignissimos fuga cupiditate quidem quam suscipit voluptas.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(94, 'Lisandro Heidenreich', 'xaufderhar@example.org', '1-747-742-8879', 'Sint veniam ipsa quis perspiciatis. Quisquam dolor rerum sed modi nisi. Sit distinctio laboriosam quibusdam quae maiores ut. Est excepturi quas ad unde tenetur dolores.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(95, 'Kasey Hermann I', 'rowland.mcglynn@example.com', '1-743-313-8697', 'Repudiandae id qui a fugit. Est odit eos vel deserunt quis sit. Magni eum labore asperiores dolores maiores.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(96, 'Carlos Treutel DDS', 'gibson.guadalupe@example.net', '+1 (972) 839-7475', 'Nam omnis repellendus alias nobis sed rem rerum. Officia sunt est sunt et aut laboriosam consequuntur. Occaecati at ut est tempora.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(97, 'Ambrose Morar', 'kovacek.manley@example.net', '+1 (786) 928-7715', 'Laudantium quasi voluptas aliquid. Voluptatibus suscipit consequatur voluptatem. Blanditiis deleniti quidem facere deleniti fugiat.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(98, 'Kathleen Rowe Sr.', 'kreiger.cary@example.net', '412.994.6506', 'Ut aut corporis totam amet totam eum non. Eaque consectetur nesciunt impedit rerum. Aut sit placeat nulla id eveniet. Sit minus ratione rerum ut et eaque.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(99, 'Israel Dickinson', 'jones.alivia@example.org', '+1-201-618-5727', 'Aut rem officiis ut quam dolorem neque. Est dignissimos aut enim et. Dolor quas modi qui aspernatur.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(100, 'Abigail King', 'mariane42@example.net', '(973) 626-0058', 'Placeat possimus aliquam vel esse qui ex. Quae deleniti nam qui ratione praesentium. Velit libero dolor error rerum quia commodi. Debitis iusto vitae quia dolorum eos.', NULL, '2025-01-30 12:56:14', '2025-01-30 12:56:14');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `event_type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ticket_link` varchar(255) DEFAULT NULL,
  `event_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_requests`
--

CREATE TABLE `event_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` enum('To-Do','In Progress','Done') NOT NULL DEFAULT 'To-Do',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `event_requests`
--

INSERT INTO `event_requests` (`id`, `name`, `email`, `phone`, `details`, `date`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Antonia Witting', 'vrice@example.com', '220.972.4691', 'Illum dolorum ipsum iusto error corrupti voluptatum sequi. Ea ratione excepturi odio autem nihil officiis. Quas quae blanditiis necessitatibus qui sunt.', '2009-09-18', 'South Emilehaven', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(2, 'Dr. Lucas Bernhard III', 'lizeth22@example.com', '+1 (636) 659-3570', 'Quidem iste omnis quasi ab autem. Commodi cum quae et nostrum repudiandae. Ducimus deserunt harum voluptas facilis et debitis nobis. Hic dignissimos qui dolor.', '1972-01-17', 'Fionaburgh', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(3, 'Ms. Elyssa Heaney', 'qsatterfield@example.com', '254.818.7216', 'Officiis quibusdam totam animi ab. Est aliquam ipsa impedit. Modi cupiditate ex distinctio odio atque quibusdam quibusdam. Sit dolore praesentium non quo.', '2005-09-07', 'New Wernerside', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(4, 'Zora Becker', 'smith.rosina@example.org', '1-878-371-3662', 'Vel similique numquam occaecati voluptatibus dolorum nihil sunt minus. In eaque rerum exercitationem perspiciatis. Quo qui nulla delectus et. Fuga culpa vel nobis quidem repellendus molestiae.', '1982-05-03', 'Richmondside', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(5, 'Prof. Randy Jast', 'keeling.rebecca@example.net', '+1-832-252-0684', 'Blanditiis omnis placeat soluta in alias aut velit. Possimus excepturi ut vitae officia sed. Magnam quo quae accusantium. Exercitationem porro est et sed.', '1998-12-06', 'North Meredith', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(6, 'Helene Predovic DDS', 'ptromp@example.com', '+1.321.330.0712', 'Sunt cumque vel rerum quaerat aut nobis nihil. Deserunt recusandae eum voluptate in saepe. Explicabo et mollitia officiis earum numquam consequatur sint est.', '1982-09-02', 'O\'Connellville', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(7, 'Prof. Santos Dickens', 'reymundo.greenfelder@example.net', '+1-959-331-2698', 'Est eos sapiente illum beatae eum qui. Provident omnis culpa quae earum ut sunt. Molestiae porro dicta adipisci nesciunt consequuntur. Autem quae aut iusto beatae labore rerum sit.', '1992-06-13', 'O\'Connertown', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(8, 'Prof. Luna Tillman', 'yvette81@example.net', '845.782.6071', 'Ipsa hic qui voluptate sequi voluptatem sit. Necessitatibus quo rem repellat pariatur. Voluptatem qui ipsa veritatis quibusdam perferendis libero.', '1980-04-10', 'West Jovanishire', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(9, 'Agustin Toy DVM', 'xjerde@example.com', '+1-334-729-4572', 'Qui voluptatem facilis dolorem velit perferendis. Dolorem aliquam dolorem voluptates dolor eos. Sint architecto quis voluptatem blanditiis iure ut rerum.', '1972-07-16', 'Predovicfort', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(10, 'Alba Marks V', 'allie.rau@example.org', '223.901.8572', 'Sunt aut asperiores occaecati laboriosam. Aut repellat non eius tempore officia sit nostrum. Quos cum saepe delectus provident. Adipisci quo non ea molestiae.', '2014-06-20', 'New Eugene', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(11, 'Gretchen Kassulke', 'tyler.prohaska@example.org', '+1-480-512-1134', 'Dolores officia nihil tempora itaque. Qui incidunt cum ipsam iure et non. Rerum et rerum deleniti in alias voluptatem quia.', '2016-09-14', 'Wiegandview', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(12, 'Prof. Estefania Harber', 'raynor.jamil@example.net', '+1 (615) 962-2136', 'Voluptatem temporibus corrupti est rerum est in. Ex harum sit optio voluptatem iure. Qui eligendi quia laudantium.', '2009-10-20', 'North Georgettemouth', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(13, 'Ronaldo Muller', 'ankunding.kathryn@example.org', '(234) 330-4905', 'Eum possimus autem ut illo quibusdam. Deleniti nemo debitis ex eius. Reprehenderit et consequatur quos accusamus et voluptatum. Ut adipisci sunt ducimus velit.', '2023-06-29', 'South Jerrodport', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(14, 'Miss Rossie Kautzer', 'jeanie.veum@example.net', '(667) 463-0576', 'Beatae molestiae facilis dicta aliquam. Aliquid voluptatum aut veniam minus ducimus repudiandae temporibus quis. Soluta pariatur et aut incidunt magni quidem iusto.', '2005-04-09', 'Lorineton', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(15, 'Mr. Murphy Padberg', 'jeromy.deckow@example.net', '714.823.8428', 'Dignissimos veritatis veniam asperiores. Consequatur totam voluptates ullam iusto dolore. Asperiores ut reprehenderit ut nobis.', '1988-08-27', 'North Queen', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(16, 'Prof. Litzy Gaylord Sr.', 'lacy.bernhard@example.net', '+1.820.999.7022', 'Omnis harum ullam non sunt totam eum corrupti. Fuga sapiente labore est quod fugit. Sit doloremque omnis iste non voluptas consectetur quos.', '2003-07-17', 'New Alvahchester', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(17, 'Dr. Patricia Conn I', 'brayan.cassin@example.net', '(463) 815-9728', 'Numquam optio ex optio laborum eaque vel omnis. Repellat corporis ut dignissimos at necessitatibus sed est officia. A itaque sunt a enim. Est voluptatem et officia et.', '1970-08-27', 'New Maiyaport', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(18, 'Angel Sporer', 'qtreutel@example.net', '(979) 548-4048', 'Vel sequi ratione voluptates eligendi autem quae nam numquam. Vel illum quidem quia voluptates nihil. Facilis repellat et rerum.', '1978-05-07', 'West Pinkie', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(19, 'Prof. Jettie Effertz', 'salvatore.kshlerin@example.net', '+18658399619', 'Qui et molestiae quod. Asperiores voluptas eum est iusto aut sunt. Et id optio officia laborum quos.', '1991-05-27', 'Reichelfurt', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(20, 'Matilda Rice', 'eziemann@example.net', '650.256.4965', 'Ducimus rem quasi est sunt quod eum. Qui praesentium qui minus vel alias. Est voluptatem sit voluptatem temporibus molestiae occaecati. Accusamus voluptatum nihil eligendi deleniti eum.', '1977-01-20', 'Maiyahaven', 'To-Do', '2025-01-30 12:56:14', '2025-01-30 12:56:14');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `foto_galeries`
--

CREATE TABLE `foto_galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `foto_galeries`
--

INSERT INTO `foto_galeries` (`id`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'seeder2.jpg', '7', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(2, 'seeder5.jpg', '7', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(3, 'seeder.jpg', '8', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(4, 'seeder.jpg', '8', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(5, 'seeder5.jpg', '1', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(6, 'seeder5.jpg', '5', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(7, 'seeder.jpg', '5', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(8, 'seeder3.png', '6', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(9, 'seeder4.jpg', '6', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(10, 'seeder.jpg', '3', '2025-01-30 12:56:14', '2025-01-30 12:56:14');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_28_114706_create_scrappers_table', 1),
(5, '2024_11_29_113924_create_admins_table', 1),
(6, '2024_11_29_114442_create_events_table', 1),
(7, '2024_11_29_114809_create_event_requests_table', 1),
(8, '2024_11_29_114926_create_reviews_table', 1),
(9, '2024_11_29_115008_create_newsletter_subscribers_table', 1),
(10, '2024_11_29_115021_create_contact_forms_table', 1),
(11, '2024_11_30_114125_create_foto_galeries_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Wilfrid Rogahn', 'scarter@example.org', 4, 'Eveniet quas et sit ut illum ut dolor nemo.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(2, 'Lori Stokes', 'isabella.beatty@example.net', 4, 'Vero modi et eius.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(3, 'Miss Zola O\'Reilly', 'streich.theo@example.net', 2, 'Autem aut necessitatibus fuga ut quia officiis.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(4, 'Dr. Krystel Botsford V', 'eskiles@example.org', 1, 'Assumenda sunt sit nihil eveniet.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(5, 'Ms. Pascale Ullrich', 'neha94@example.net', 1, 'Molestiae ad molestias natus esse.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(6, 'Hilario Blick', 'stroman.avery@example.net', 1, 'Labore nihil at consectetur aut eos.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(7, 'Daisy McClure', 'clementina01@example.com', 1, 'Et a ad illum eveniet consectetur eius.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(8, 'Pablo Schimmel IV', 'egusikowski@example.net', 5, 'Reprehenderit hic eius omnis.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(9, 'Jerad McGlynn', 'hudson.jenifer@example.org', 2, 'Commodi libero non laudantium nesciunt.', '2025-01-30 12:56:14', '2025-01-30 12:56:14'),
(10, 'Matilda Von', 'montana40@example.org', 2, 'Repudiandae harum inventore vel beatae.', '2025-01-30 12:56:14', '2025-01-30 12:56:14');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `scrapper`
--

CREATE TABLE `scrapper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `last_run_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'OpusEvents', 'opuseventsnederland@gmail.com', NULL, '$2y$12$7.Vg8DgqpuTN/1PW9/poOeO3D2tgHey8r2ygkpW5QTTyP6pQKgoPm', 'RkogbI8Byv', '2025-01-30 12:56:14', '2025-01-30 12:56:14');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexen voor tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexen voor tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexen voor tabel `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `event_requests`
--
ALTER TABLE `event_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexen voor tabel `foto_galeries`
--
ALTER TABLE `foto_galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexen voor tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscribers_email_unique` (`email`);

--
-- Indexen voor tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `scrapper`
--
ALTER TABLE `scrapper`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT voor een tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `event_requests`
--
ALTER TABLE `event_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `foto_galeries`
--
ALTER TABLE `foto_galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `scrapper`
--
ALTER TABLE `scrapper`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
