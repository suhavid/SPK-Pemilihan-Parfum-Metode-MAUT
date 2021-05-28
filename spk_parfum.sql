-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2020 pada 02.44
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_parfum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_aroma` varchar(225) NOT NULL,
  `komposisi` varchar(255) NOT NULL,
  `ketahanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `harga`, `jenis_aroma`, `komposisi`, `ketahanan`) VALUES
(29, 'Adelle', 200000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(30, 'DKNY', 400000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(31, 'Belagio', 150000, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(32, 'Casturi Putih', 37500, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(33, 'Guava', 50000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(64, 'Chicago', 150000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(83, 'Hugo Boss M', 37500, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(85, 'Jaguar', 100000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(88, 'Lovely', 75000, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(94, 'Malaikat Subuh', 150000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(96, 'Adidas', 30000, 'Kuat', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(97, 'Anasoi', 75000, 'Sedang', '25% Bibit : 75% Alkohol', '>= 2Jam dan < 5Jam'),
(98, 'Alien Muler', 75000, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(99, 'Apel', 20000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 5Jam dan < 8Jam'),
(100, 'Afril', 150000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(101, 'Barbie', 200000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(102, 'Binamor', 150000, 'Sedang', '25% Bibit : 75% Alkohol', '< 2Jam'),
(103, 'Boss Aqua', 20000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(104, 'Blackberry', 25000, 'Sedang', '25% Bibit : 75% Alkohol', '< 2Jam'),
(105, 'Bulgary Blue', 300000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(106, 'Cafe', 15000, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(107, 'Casablanca', 120000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 2Jam dan < 5Jam'),
(109, 'Cool Water W', 150000, 'Sedang', '25% Bibit : 75% Alkohol', '< 2Jam'),
(110, 'Charlie White', 300000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(111, 'Cendana', 90000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(112, 'Dafidoff W', 150000, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(113, 'D&G', 50000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(114, 'Dunhill Black', 75000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 2Jam dan < 5Jam'),
(115, 'Dunhill', 50000, 'Kuat', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(116, 'Diamor W', 37500, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(117, 'Escada', 180000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(118, 'Escape', 75000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(119, 'E Aiger M', 37500, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(120, 'Fanbo', 90000, 'Lemah', '25% Bibit : 75% Alkohol', '< 2Jam'),
(121, 'Gatsby', 75000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(122, 'Givenci', 150000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(123, 'Guess', 70000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(124, 'Halle Barry', 20000, 'Sedang', '25% Bibit : 75% Alkohol', '< 2Jam'),
(125, 'Good Live', 120000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(126, 'Harazuku Love', 75000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(127, 'Harmes Voyage', 150000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(128, 'Hiden Fantasy', 50000, 'Kuat', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(129, 'Isalan Kiss', 75000, 'Kuat', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(130, 'Jeruk', 80000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 5Jam dan < 8Jam'),
(131, 'Joop', 75000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(132, 'Jpg M', 120000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(133, 'Jovan', 130000, 'Lemah', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(134, 'Manggo', 300000, 'Sedang', '75% Bibit : 25% Alkohol', '>= 8Jam'),
(135, 'Melati', 100000, 'Sedang', '50% Bibit : 50% Alkohol', '>= 5Jam dan < 8Jam'),
(136, 'Ariel', 40000, 'Lemah', '75% Bibit : 25% Alkohol', '>= 8Jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(225) NOT NULL,
  `bobot_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES
(1, 'Jenis Aroma', 25),
(2, 'Ketahanan', 25),
(3, 'Komposisi', 25),
(4, 'Harga', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `pilihan_kriteria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `alternatif_id`, `kriteria_id`, `pilihan_kriteria_id`) VALUES
(1, 19, 1, 3),
(2, 20, 0, 12),
(11, 20, 1, 3),
(13, 22, 2, 4),
(15, 20, 3, 3),
(16, 22, 1, 3),
(17, 22, 4, 6),
(18, 22, 3, 5),
(20, 21, 1, 11),
(21, 21, 0, 15),
(22, 21, 0, 4),
(23, 21, 0, 12),
(24, 20, 0, 13),
(25, 20, 2, 4),
(26, 21, 3, 15),
(27, 21, 4, 6),
(28, 21, 2, 12),
(29, 20, 4, 9),
(30, 29, 1, 16),
(31, 29, 2, 24),
(32, 29, 3, 14),
(33, 29, 4, 21),
(34, 30, 1, 17),
(35, 30, 2, 25),
(36, 30, 3, 5),
(37, 30, 4, 22),
(38, 31, 1, 11),
(39, 31, 2, 23),
(40, 31, 3, 15),
(41, 31, 4, 21),
(42, 32, 1, 11),
(44, 32, 3, 15),
(45, 32, 4, 19),
(46, 32, 2, 23),
(47, 33, 1, 16),
(48, 33, 2, 24),
(49, 33, 3, 14),
(50, 33, 4, 20),
(52, 37, 4, 28),
(53, 37, 1, 29),
(54, 37, 3, 30),
(55, 37, 2, 31),
(56, 38, 4, 32),
(57, 38, 1, 33),
(58, 38, 3, 34),
(59, 38, 2, 35),
(60, 39, 4, 36),
(61, 39, 1, 37),
(62, 39, 3, 38),
(63, 39, 2, 39),
(64, 40, 4, 40),
(65, 40, 1, 41),
(66, 40, 3, 42),
(67, 40, 2, 43),
(68, 41, 4, 44),
(69, 41, 1, 45),
(70, 41, 3, 46),
(71, 41, 2, 47),
(72, 42, 4, 48),
(73, 42, 1, 49),
(74, 42, 3, 50),
(75, 42, 2, 51),
(76, 43, 4, 52),
(77, 43, 1, 53),
(78, 43, 3, 54),
(79, 43, 2, 55),
(80, 44, 4, 56),
(81, 44, 1, 57),
(82, 44, 3, 58),
(83, 44, 2, 59),
(84, 45, 4, 60),
(85, 45, 1, 61),
(86, 45, 3, 62),
(87, 45, 2, 63),
(88, 46, 4, 64),
(89, 46, 1, 65),
(90, 46, 3, 66),
(91, 46, 2, 67),
(92, 47, 4, 68),
(93, 47, 1, 69),
(94, 47, 3, 70),
(95, 47, 2, 71),
(96, 48, 4, 72),
(97, 48, 1, 73),
(98, 48, 3, 74),
(99, 48, 2, 75),
(100, 49, 4, 76),
(101, 49, 1, 77),
(102, 49, 3, 78),
(103, 49, 2, 79),
(104, 50, 4, 80),
(105, 50, 1, 81),
(106, 50, 3, 82),
(107, 50, 2, 83),
(108, 51, 4, 84),
(109, 51, 1, 85),
(110, 51, 3, 86),
(111, 51, 2, 87),
(112, 52, 4, 88),
(113, 52, 1, 89),
(114, 52, 3, 90),
(115, 52, 2, 91),
(116, 53, 4, 92),
(117, 53, 1, 93),
(118, 53, 3, 94),
(119, 53, 2, 95),
(120, 54, 4, 96),
(121, 54, 1, 97),
(122, 54, 3, 98),
(123, 54, 2, 99),
(124, 55, 4, 100),
(125, 55, 1, 101),
(126, 55, 3, 102),
(127, 55, 2, 103),
(128, 56, 4, 104),
(129, 56, 1, 105),
(130, 56, 3, 106),
(131, 56, 2, 107),
(132, 57, 4, 108),
(133, 57, 1, 109),
(134, 57, 3, 110),
(135, 57, 2, 111),
(136, 58, 4, 112),
(137, 58, 1, 113),
(138, 58, 3, 114),
(139, 58, 2, 115),
(140, 59, 4, 116),
(141, 59, 1, 117),
(142, 59, 3, 118),
(143, 59, 2, 119),
(144, 60, 4, 120),
(145, 60, 1, 121),
(146, 60, 3, 122),
(147, 60, 2, 123),
(148, 61, 4, 124),
(149, 61, 1, 125),
(150, 61, 3, 126),
(151, 61, 2, 127),
(152, 62, 4, 128),
(153, 62, 1, 129),
(154, 62, 3, 130),
(155, 62, 2, 131),
(156, 63, 4, 132),
(157, 63, 1, 133),
(158, 63, 3, 134),
(159, 63, 2, 135),
(160, 64, 4, 136),
(161, 64, 1, 137),
(162, 64, 3, 138),
(163, 64, 2, 139),
(164, 65, 4, 140),
(165, 65, 1, 141),
(166, 65, 3, 142),
(167, 65, 2, 143),
(168, 66, 4, 144),
(169, 66, 1, 145),
(170, 66, 3, 146),
(171, 66, 2, 147),
(172, 67, 4, 148),
(173, 67, 1, 149),
(174, 67, 3, 150),
(175, 67, 2, 151),
(176, 68, 4, 152),
(177, 68, 1, 153),
(178, 68, 3, 154),
(179, 68, 2, 155),
(180, 69, 4, 156),
(181, 69, 1, 157),
(182, 69, 3, 158),
(183, 69, 2, 159),
(184, 70, 4, 160),
(185, 70, 1, 161),
(186, 70, 3, 162),
(187, 70, 2, 163),
(188, 71, 4, 164),
(189, 71, 1, 165),
(190, 71, 3, 166),
(191, 71, 2, 167),
(192, 72, 4, 168),
(193, 72, 1, 169),
(194, 72, 3, 170),
(195, 72, 2, 171),
(196, 73, 4, 172),
(197, 73, 1, 173),
(198, 73, 3, 174),
(199, 73, 2, 175),
(200, 74, 4, 176),
(201, 74, 1, 177),
(202, 74, 3, 178),
(203, 74, 2, 179),
(204, 75, 4, 180),
(205, 75, 1, 181),
(206, 75, 3, 182),
(207, 75, 2, 183),
(208, 76, 4, 184),
(209, 76, 1, 185),
(210, 76, 3, 186),
(211, 76, 2, 187),
(212, 77, 4, 188),
(213, 77, 1, 189),
(214, 77, 3, 190),
(215, 77, 2, 191),
(216, 78, 4, 192),
(217, 78, 1, 193),
(218, 78, 3, 194),
(219, 78, 2, 195),
(220, 79, 4, 196),
(221, 79, 1, 197),
(222, 79, 3, 198),
(223, 79, 2, 199),
(224, 80, 4, 200),
(225, 80, 1, 201),
(226, 80, 3, 202),
(227, 80, 2, 203),
(228, 81, 4, 204),
(229, 81, 1, 205),
(230, 81, 3, 206),
(231, 81, 2, 207),
(232, 82, 4, 208),
(233, 82, 1, 209),
(234, 82, 3, 210),
(235, 82, 2, 211),
(236, 83, 4, 212),
(237, 83, 1, 213),
(238, 83, 3, 214),
(239, 83, 2, 215),
(240, 84, 4, 216),
(241, 84, 1, 217),
(242, 84, 3, 218),
(243, 84, 2, 219),
(244, 85, 4, 220),
(245, 85, 1, 221),
(246, 85, 3, 222),
(247, 85, 2, 223),
(248, 86, 4, 224),
(249, 86, 1, 225),
(250, 86, 3, 226),
(251, 86, 2, 227),
(252, 87, 4, 228),
(253, 87, 1, 229),
(254, 87, 3, 230),
(255, 87, 2, 231),
(256, 88, 4, 232),
(257, 88, 1, 233),
(258, 88, 3, 234),
(259, 88, 2, 235),
(260, 89, 4, 236),
(261, 89, 1, 237),
(262, 89, 3, 238),
(263, 89, 2, 239),
(264, 90, 4, 240),
(265, 90, 1, 241),
(266, 90, 3, 242),
(267, 90, 2, 243),
(268, 91, 4, 244),
(269, 91, 1, 245),
(270, 91, 3, 246),
(271, 91, 2, 247),
(272, 92, 4, 248),
(273, 92, 1, 249),
(274, 92, 3, 250),
(275, 92, 2, 251),
(276, 93, 4, 252),
(277, 93, 1, 253),
(278, 93, 3, 254),
(279, 93, 2, 255),
(280, 94, 4, 256),
(281, 94, 1, 257),
(282, 94, 3, 258),
(283, 94, 2, 259),
(284, 95, 4, 260),
(285, 95, 1, 261),
(286, 95, 3, 262),
(287, 95, 2, 263),
(288, 96, 4, 264),
(289, 96, 1, 265),
(290, 96, 3, 266),
(291, 96, 2, 267),
(292, 97, 4, 268),
(293, 97, 1, 269),
(294, 97, 3, 270),
(295, 97, 2, 271),
(296, 98, 4, 272),
(297, 98, 1, 273),
(298, 98, 3, 274),
(299, 98, 2, 275),
(300, 99, 4, 276),
(301, 99, 1, 277),
(302, 99, 3, 278),
(303, 99, 2, 279),
(304, 100, 4, 280),
(305, 100, 1, 281),
(306, 100, 3, 282),
(307, 100, 2, 283),
(308, 101, 4, 284),
(309, 101, 1, 285),
(310, 101, 3, 286),
(311, 101, 2, 287),
(312, 102, 4, 288),
(313, 102, 1, 289),
(314, 102, 3, 290),
(315, 102, 2, 291),
(316, 103, 4, 292),
(317, 103, 1, 293),
(318, 103, 3, 294),
(319, 103, 2, 295),
(320, 104, 4, 296),
(321, 104, 1, 297),
(322, 104, 3, 298),
(323, 104, 2, 299),
(324, 105, 4, 300),
(325, 105, 1, 301),
(326, 105, 3, 302),
(327, 105, 2, 303),
(328, 106, 4, 304),
(329, 106, 1, 305),
(330, 106, 3, 306),
(331, 106, 2, 307),
(332, 107, 4, 308),
(333, 107, 1, 309),
(334, 107, 3, 310),
(335, 107, 2, 311),
(336, 108, 4, 312),
(337, 108, 1, 313),
(338, 108, 3, 314),
(339, 108, 2, 315),
(340, 109, 4, 316),
(341, 109, 1, 317),
(342, 109, 3, 318),
(343, 109, 2, 319),
(344, 110, 4, 320),
(345, 110, 1, 321),
(346, 110, 3, 322),
(347, 110, 2, 323),
(348, 111, 4, 324),
(349, 111, 1, 325),
(350, 111, 3, 326),
(351, 111, 2, 327),
(352, 112, 4, 328),
(353, 112, 1, 329),
(354, 112, 3, 330),
(355, 112, 2, 331),
(356, 113, 4, 332),
(357, 113, 1, 333),
(358, 113, 3, 334),
(359, 113, 2, 335),
(360, 114, 4, 336),
(361, 114, 1, 337),
(362, 114, 3, 338),
(363, 114, 2, 339),
(364, 115, 4, 340),
(365, 115, 1, 341),
(366, 115, 3, 342),
(367, 115, 2, 343),
(368, 116, 4, 344),
(369, 116, 1, 345),
(370, 116, 3, 346),
(371, 116, 2, 347),
(372, 117, 4, 348),
(373, 117, 1, 349),
(374, 117, 3, 350),
(375, 117, 2, 351),
(376, 118, 4, 352),
(377, 118, 1, 353),
(378, 118, 3, 354),
(379, 118, 2, 355),
(380, 119, 4, 356),
(381, 119, 1, 357),
(382, 119, 3, 358),
(383, 119, 2, 359),
(384, 120, 4, 360),
(385, 120, 1, 361),
(386, 120, 3, 362),
(387, 120, 2, 363),
(388, 121, 4, 364),
(389, 121, 1, 365),
(390, 121, 3, 366),
(391, 121, 2, 367),
(392, 122, 4, 368),
(393, 122, 1, 369),
(394, 122, 3, 370),
(395, 122, 2, 371),
(396, 123, 4, 372),
(397, 123, 1, 373),
(398, 123, 3, 374),
(399, 123, 2, 375),
(400, 124, 4, 376),
(401, 124, 1, 377),
(402, 124, 3, 378),
(403, 124, 2, 379),
(404, 125, 4, 380),
(405, 125, 1, 381),
(406, 125, 3, 382),
(407, 125, 2, 383),
(408, 126, 4, 384),
(409, 126, 1, 385),
(410, 126, 3, 386),
(411, 126, 2, 387),
(412, 127, 4, 388),
(413, 127, 1, 389),
(414, 127, 3, 390),
(415, 127, 2, 391),
(416, 128, 4, 392),
(417, 128, 1, 393),
(418, 128, 3, 394),
(419, 128, 2, 395),
(420, 129, 4, 396),
(421, 129, 1, 397),
(422, 129, 3, 398),
(423, 129, 2, 399),
(424, 130, 4, 400),
(425, 130, 1, 401),
(426, 130, 3, 402),
(427, 130, 2, 403),
(428, 131, 4, 404),
(429, 131, 1, 405),
(430, 131, 3, 406),
(431, 131, 2, 407),
(432, 132, 4, 408),
(433, 132, 1, 409),
(434, 132, 3, 410),
(435, 132, 2, 411),
(436, 133, 4, 412),
(437, 133, 1, 413),
(438, 133, 3, 414),
(439, 133, 2, 415),
(440, 134, 4, 416),
(441, 134, 1, 417),
(442, 134, 3, 418),
(443, 134, 2, 419),
(444, 135, 4, 420),
(445, 135, 1, 421),
(446, 135, 3, 422),
(447, 135, 2, 423),
(448, 136, 4, 424),
(449, 136, 1, 425),
(450, 136, 3, 426),
(451, 136, 2, 427);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan_kriteria`
--

CREATE TABLE `pilihan_kriteria` (
  `id_pilihan_kriteria` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `nama_pilihan_kriteria` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pilihan_kriteria`
--

INSERT INTO `pilihan_kriteria` (`id_pilihan_kriteria`, `kriteria_id`, `nama_pilihan_kriteria`, `nilai`) VALUES
(4, 0, 'sedang', 2),
(5, 3, '75% Bibit : 25% Alkohol', 3),
(9, 0, 'sangat bagus', 5),
(11, 1, 'Lemah', 1),
(14, 3, '50% Bibit : 50% Alkohol', 2),
(15, 3, '25% Bibit : 75% Alkohol', 1),
(16, 1, 'Sedang', 3),
(17, 1, 'Kuat', 2),
(18, 4, '< Rp.15.000', 5),
(19, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(20, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(21, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(22, 4, '> Rp.400.000', 1),
(23, 2, '> 8 Jam', 4),
(24, 2, '> 8 Jam', 4),
(25, 2, '>= 8 Jam', 4),
(26, 2, '> 12 jam', 4),
(27, 0, '220', 22),
(28, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(29, 1, 'Sedang', 3),
(30, 3, '75% Bibit : 25% Alkohol', 1),
(31, 2, '> 12 jam', 4),
(32, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(33, 1, 'Sedang', 3),
(34, 3, '75% Bibit : 25% Alkohol', 1),
(35, 2, '> 12 jam', 4),
(36, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(37, 1, 'Sedang', 3),
(38, 3, '75% Bibit : 25% Alkohol', 3),
(39, 2, '> 12 jam', 4),
(40, 4, '> Rp.400.000', 1),
(41, 1, 'Lemah', 1),
(42, 3, '25% Bibit : 75% Alkohol', 1),
(43, 2, '< 3 Jam', 1),
(44, 4, '< Rp.15.000', 5),
(45, 1, 'Sedang', 3),
(46, 3, '75% Bibit : 25% Alkohol', 3),
(47, 2, '< 3 Jam', 1),
(48, 4, '> Rp.400.000', 1),
(49, 1, 'Lemah', 1),
(50, 3, '25% Bibit : 75% Alkohol', 1),
(51, 2, '< 3 Jam', 1),
(52, 4, '< Rp.15.000', 5),
(53, 1, 'Sedang', 3),
(54, 3, '25% Bibit : 75% Alkohol', 1),
(55, 2, '>= 3Jam dan  < 8 Jam', 2),
(56, 4, '< Rp.15.000', 5),
(57, 1, 'Lemah', 1),
(58, 3, '25% Bibit : 75% Alkohol', 1),
(59, 2, '>= 3Jam dan  < 8 Jam', 2),
(60, 4, '< Rp.15.000', 5),
(61, 1, 'Lemah', 1),
(62, 3, '75% Bibit : 25% Alkohol', 3),
(63, 2, '< 3 Jam', 1),
(64, 4, '< Rp.15.000', 5),
(65, 1, 'Sedang', 3),
(66, 3, '25% Bibit : 75% Alkohol', 1),
(67, 2, '>= 3Jam dan  < 8 Jam', 2),
(68, 4, '< Rp.15.000', 5),
(69, 1, 'Lemah', 1),
(70, 3, '25% Bibit : 75% Alkohol', 1),
(71, 2, '< 3 Jam', 1),
(72, 4, '< Rp.15.000', 5),
(73, 1, 'Lemah', 1),
(74, 3, '25% Bibit : 75% Alkohol', 1),
(75, 2, '< 3 Jam', 1),
(76, 4, '< Rp.15.000', 5),
(77, 1, 'Lemah', 1),
(78, 3, '50% Bibit : 50% Alkohol', 2),
(79, 2, '< 3 Jam', 1),
(80, 4, '< Rp.15.000', 5),
(81, 1, 'Lemah', 1),
(82, 3, '25% Bibit : 75% Alkohol', 1),
(83, 2, '< 3 Jam', 1),
(84, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(85, 1, 'Kuat', 2),
(86, 3, '50% Bibit : 50% Alkohol', 2),
(87, 2, '>= 3Jam dan  < 8 Jam', 2),
(88, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(89, 1, 'Sedang', 3),
(90, 3, '25% Bibit : 75% Alkohol', 1),
(91, 2, '< 3 Jam', 1),
(92, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(93, 1, 'Lemah', 1),
(94, 3, '25% Bibit : 75% Alkohol', 1),
(95, 2, '< 3 Jam', 1),
(96, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(97, 1, 'Sedang', 3),
(98, 3, '50% Bibit : 50% Alkohol', 2),
(99, 2, '>= 3Jam dan  < 8 Jam', 2),
(100, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(101, 1, 'Sedang', 3),
(102, 3, '75% Bibit : 25% Alkohol', 3),
(103, 2, '>= 8Jam dan < 12Jam', 3),
(104, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(105, 1, 'Lemah', 1),
(106, 3, '25% Bibit : 75% Alkohol', 1),
(107, 2, '< 3 Jam', 1),
(108, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(109, 1, 'Sedang', 3),
(110, 3, '50% Bibit : 50% Alkohol', 2),
(111, 2, '>= 3Jam dan  < 8 Jam', 2),
(112, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(113, 1, 'Sedang', 3),
(114, 3, '25% Bibit : 75% Alkohol', 1),
(115, 2, '< 3 Jam', 1),
(116, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(117, 1, 'Sedang', 3),
(118, 3, '50% Bibit : 50% Alkohol', 2),
(119, 2, '>= 3Jam dan  < 8 Jam', 2),
(120, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(121, 1, 'Sedang', 3),
(122, 3, '25% Bibit : 75% Alkohol', 1),
(123, 2, '< 3 Jam', 1),
(124, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(125, 1, 'Sedang', 3),
(126, 3, '75% Bibit : 25% Alkohol', 3),
(127, 2, '>= 8Jam dan < 12Jam', 3),
(128, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(129, 1, 'Lemah', 1),
(130, 3, '25% Bibit : 75% Alkohol', 1),
(131, 2, '< 3 Jam', 1),
(132, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(133, 1, 'Sedang', 3),
(134, 3, '50% Bibit : 50% Alkohol', 2),
(135, 2, '>= 3Jam dan  < 8 Jam', 2),
(136, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(137, 1, 'Kuat', 2),
(138, 3, '75% Bibit : 25% Alkohol', 3),
(139, 2, '>= 8 Jam', 4),
(140, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(141, 1, 'Sedang', 3),
(142, 3, '25% Bibit : 75% Alkohol', 1),
(143, 2, '< 3 Jam', 1),
(144, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(145, 1, 'Sedang', 3),
(146, 3, '75% Bibit : 25% Alkohol', 3),
(147, 2, '>= 8Jam dan < 12Jam', 3),
(148, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(149, 1, 'Kuat', 2),
(150, 3, '75% Bibit : 25% Alkohol', 3),
(151, 2, '>= 8Jam dan < 12Jam', 3),
(152, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(153, 1, 'Lemah', 1),
(154, 3, '25% Bibit : 75% Alkohol', 1),
(155, 2, '< 3 Jam', 1),
(156, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(157, 1, 'Sedang', 3),
(158, 3, '50% Bibit : 50% Alkohol', 2),
(159, 2, '>= 3Jam dan  < 8 Jam', 2),
(160, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(161, 1, 'Sedang', 3),
(162, 3, '75% Bibit : 25% Alkohol', 3),
(163, 2, '>= 8Jam dan < 12Jam', 3),
(164, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(165, 1, 'Lemah', 1),
(166, 3, '25% Bibit : 75% Alkohol', 1),
(167, 2, '< 3 Jam', 1),
(168, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(169, 1, 'Sedang', 3),
(170, 3, '75% Bibit : 25% Alkohol', 3),
(171, 2, '>= 8Jam dan < 12Jam', 3),
(172, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(173, 1, 'Kuat', 2),
(174, 3, '75% Bibit : 25% Alkohol', 3),
(175, 2, '>= 8Jam dan < 12Jam', 3),
(176, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(177, 1, 'Lemah', 1),
(178, 3, '25% Bibit : 75% Alkohol', 1),
(179, 2, '< 3 Jam', 1),
(180, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(181, 1, 'Lemah', 1),
(182, 3, '25% Bibit : 75% Alkohol', 1),
(183, 2, '< 3 Jam', 1),
(184, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(185, 1, 'Kuat', 2),
(186, 3, '50% Bibit : 50% Alkohol', 2),
(187, 2, '>= 8Jam dan < 12Jam', 3),
(188, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(189, 1, 'Sedang', 3),
(190, 3, '50% Bibit : 50% Alkohol', 2),
(191, 2, '>= 3Jam dan  < 8 Jam', 2),
(192, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(193, 1, 'Sedang', 3),
(194, 3, '25% Bibit : 75% Alkohol', 1),
(195, 2, '< 3 Jam', 1),
(196, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(197, 1, 'Sedang', 3),
(198, 3, '50% Bibit : 50% Alkohol', 2),
(199, 2, '>= 3Jam dan  < 8 Jam', 2),
(200, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(201, 1, 'Sedang', 3),
(202, 3, '75% Bibit : 25% Alkohol', 3),
(203, 2, '>= 8Jam dan < 12Jam', 3),
(204, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(205, 1, 'Sedang', 3),
(206, 3, '75% Bibit : 25% Alkohol', 3),
(207, 2, '>= 8Jam dan < 12Jam', 3),
(208, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(209, 1, 'Kuat', 2),
(210, 3, '50% Bibit : 50% Alkohol', 2),
(211, 2, '>= 3Jam dan  < 8 Jam', 2),
(212, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(213, 1, 'Lemah', 1),
(214, 3, '25% Bibit : 75% Alkohol', 1),
(215, 2, '> 8 Jam', 4),
(216, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(217, 1, 'Kuat', 2),
(218, 3, '75% Bibit : 25% Alkohol', 3),
(219, 2, '>= 8Jam dan < 12Jam', 3),
(220, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(221, 1, 'Sedang', 3),
(222, 3, '50% Bibit : 50% Alkohol', 2),
(223, 2, '> 8 Jam', 4),
(224, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(225, 1, 'Sedang', 3),
(226, 3, '75% Bibit : 25% Alkohol', 3),
(227, 2, '>= 8Jam dan < 12Jam', 3),
(228, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(229, 1, 'Sedang', 3),
(230, 3, '75% Bibit : 25% Alkohol', 3),
(231, 2, '>= 8Jam dan < 12Jam', 3),
(232, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(233, 1, 'Lemah', 1),
(234, 3, '25% Bibit : 75% Alkohol', 1),
(235, 2, '> 8 Jam', 4),
(236, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(237, 1, 'Sedang', 3),
(238, 3, '50% Bibit : 50% Alkohol', 2),
(239, 2, '>= 3Jam dan  < 8 Jam', 2),
(240, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(241, 1, 'Kuat', 2),
(242, 3, '75% Bibit : 25% Alkohol', 3),
(243, 2, '>= 8Jam dan < 12Jam', 3),
(244, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(245, 1, 'Sedang', 3),
(246, 3, '75% Bibit : 25% Alkohol', 3),
(247, 2, '>= 8Jam dan < 12Jam', 3),
(248, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(249, 1, 'Sedang', 3),
(250, 3, '50% Bibit : 50% Alkohol', 2),
(251, 2, '>= 3Jam dan  < 8 Jam', 2),
(252, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(253, 1, 'Kuat', 2),
(254, 3, '75% Bibit : 25% Alkohol', 3),
(255, 2, '>= 8Jam dan < 12Jam', 3),
(256, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(257, 1, 'Kuat', 2),
(258, 3, '75% Bibit : 25% Alkohol', 3),
(259, 2, '>= 8 Jam', 4),
(260, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(261, 1, 'Sedang', 3),
(262, 3, '50% Bibit : 50% Alkohol', 2),
(263, 2, '>= 8Jam dan < 12Jam', 3),
(264, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(265, 1, 'Kuat', 2),
(266, 3, '50% Bibit : 50% Alkohol', 2),
(267, 2, '>= 8 Jam', 4),
(268, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(269, 1, 'Sedang', 3),
(270, 3, '25% Bibit : 75% Alkohol', 1),
(271, 2, '>= 8 Jam', 4),
(272, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(273, 1, 'Lemah', 1),
(274, 3, '25% Bibit : 75% Alkohol', 1),
(275, 2, '> 12 jam', 4),
(276, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(277, 1, 'Kuat', 2),
(278, 3, '75% Bibit : 25% Alkohol', 3),
(279, 2, '>= 8 Jam', 4),
(280, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(281, 1, 'Sedang', 3),
(282, 3, '75% Bibit : 25% Alkohol', 3),
(283, 2, '>= 8 Jam', 4),
(284, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(285, 1, 'Sedang', 3),
(286, 3, '50% Bibit : 50% Alkohol', 2),
(287, 2, '> 12 jam', 4),
(288, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(289, 1, 'Sedang', 3),
(290, 3, '25% Bibit : 75% Alkohol', 1),
(291, 2, '> 12 jam', 4),
(292, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(293, 1, 'Sedang', 3),
(294, 3, '50% Bibit : 50% Alkohol', 2),
(295, 2, '> 12 jam', 4),
(296, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(297, 1, 'Sedang', 3),
(298, 3, '25% Bibit : 75% Alkohol', 1),
(299, 2, '>= 8 Jam', 4),
(300, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(301, 1, 'Sedang', 3),
(302, 3, '75% Bibit : 25% Alkohol', 3),
(303, 2, '>= 8 Jam', 4),
(304, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(305, 1, 'Lemah', 1),
(306, 3, '25% Bibit : 75% Alkohol', 1),
(307, 2, '> 12 jam', 4),
(308, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(309, 1, 'Sedang', 3),
(310, 3, '50% Bibit : 50% Alkohol', 2),
(311, 2, '>= 8 Jam', 4),
(312, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(313, 1, 'Kuat', 2),
(314, 3, '75% Bibit : 25% Alkohol', 3),
(315, 2, '>= 8 Jam', 4),
(316, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(317, 1, 'Sedang', 3),
(318, 3, '25% Bibit : 75% Alkohol', 1),
(319, 2, '> 12 jam', 4),
(320, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(321, 1, 'Sedang', 3),
(322, 3, '75% Bibit : 25% Alkohol', 3),
(323, 2, '>= 8 Jam', 4),
(324, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(325, 1, 'Kuat', 2),
(326, 3, '75% Bibit : 25% Alkohol', 3),
(327, 2, '>= 8 Jam', 4),
(328, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(329, 1, 'Lemah', 1),
(330, 3, '25% Bibit : 75% Alkohol', 1),
(331, 2, '>= 12 jam', 4),
(332, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(333, 1, 'Sedang', 3),
(334, 3, '50% Bibit : 50% Alkohol', 2),
(335, 2, '>= 12 jam', 4),
(336, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(337, 1, 'Sedang', 3),
(338, 3, '75% Bibit : 25% Alkohol', 3),
(339, 2, '>= 8 Jam', 4),
(340, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(341, 1, 'Kuat', 2),
(342, 3, '50% Bibit : 50% Alkohol', 2),
(343, 2, '>= 8 Jam', 4),
(344, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(345, 1, 'Lemah', 1),
(346, 3, '25% Bibit : 75% Alkohol', 1),
(347, 2, '>= 8 Jam', 4),
(348, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(349, 1, 'Sedang', 3),
(350, 3, '75% Bibit : 25% Alkohol', 3),
(351, 2, '>= 8 Jam', 4),
(352, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(353, 1, 'Kuat', 2),
(354, 3, '75% Bibit : 25% Alkohol', 3),
(355, 2, '>= 8 Jam', 4),
(356, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(357, 1, 'Lemah', 1),
(358, 3, '25% Bibit : 75% Alkohol', 1),
(359, 2, '>= 8 Jam', 4),
(360, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(361, 1, 'Lemah', 1),
(362, 3, '25% Bibit : 75% Alkohol', 1),
(363, 2, '>= 8 Jam', 4),
(364, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(365, 1, 'Kuat', 2),
(366, 3, '75% Bibit : 25% Alkohol', 3),
(367, 2, '>= 8 Jam', 4),
(368, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(369, 1, 'Kuat', 2),
(370, 3, '75% Bibit : 25% Alkohol', 3),
(371, 2, '>= 8 Jam', 4),
(372, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(373, 1, 'Sedang', 3),
(374, 3, '50% Bibit : 50% Alkohol', 2),
(375, 2, '>= 8 Jam', 4),
(376, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(377, 1, 'Sedang', 3),
(378, 3, '25% Bibit : 75% Alkohol', 1),
(379, 2, '>= 8 Jam', 4),
(380, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(381, 1, 'Sedang', 3),
(382, 3, '50% Bibit : 50% Alkohol', 2),
(383, 2, '>= 8 Jam', 4),
(384, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(385, 1, 'Sedang', 3),
(386, 3, '75% Bibit : 25% Alkohol', 3),
(387, 2, '>= 8 Jam', 4),
(388, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(389, 1, 'Sedang', 3),
(390, 3, '75% Bibit : 25% Alkohol', 3),
(391, 2, '>= 8 Jam', 4),
(392, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(393, 1, 'Kuat', 2),
(394, 3, '50% Bibit : 50% Alkohol', 2),
(395, 2, '>= 8 Jam', 4),
(396, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(397, 1, 'Kuat', 2),
(398, 3, '75% Bibit : 25% Alkohol', 3),
(399, 2, '>= 8 Jam', 4),
(400, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(401, 1, 'Sedang', 3),
(402, 3, '75% Bibit : 25% Alkohol', 3),
(403, 2, '>= 8 Jam', 4),
(404, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(405, 1, 'Sedang', 3),
(406, 3, '75% Bibit : 25% Alkohol', 3),
(407, 2, '>= 8 Jam', 4),
(408, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(409, 1, 'Sedang', 3),
(410, 3, '50% Bibit : 50% Alkohol', 2),
(411, 2, '>= 8 Jam', 4),
(412, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(413, 1, 'Lemah', 1),
(414, 3, '75% Bibit : 25% Alkohol', 3),
(415, 2, '>= 8 Jam', 4),
(416, 4, '>= Rp.150.000 dan < Rp.400.000', 2),
(417, 1, 'Sedang', 3),
(418, 3, '75% Bibit : 25% Alkohol', 3),
(419, 2, '>= 8 Jam', 4),
(420, 4, '>= Rp.50.000 dan < Rp.150.000', 3),
(421, 1, 'Sedang', 3),
(422, 3, '50% Bibit : 50% Alkohol', 2),
(423, 2, '>= 8 Jam', 4),
(424, 4, '>= Rp.15.000 dan < Rp.50.000', 4),
(425, 1, 'Lemah', 1),
(426, 3, '75% Bibit : 25% Alkohol', 3),
(427, 2, '>= 8 Jam', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$ml83HGMMj9/8lQ9yTVmhrO/jIQiGPEwvn0cIXYRP2W3fIaUHeo7G.', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1597097222, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` mediumint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pilihan_kriteria`
--
ALTER TABLE `pilihan_kriteria`
  ADD PRIMARY KEY (`id_pilihan_kriteria`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT untuk tabel `pilihan_kriteria`
--
ALTER TABLE `pilihan_kriteria`
  MODIFY `id_pilihan_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
