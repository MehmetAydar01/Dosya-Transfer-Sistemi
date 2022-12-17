-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Ara 2022, 04:38:34
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projefinal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `linkler`
--

DROP TABLE IF EXISTS `linkler`;
CREATE TABLE IF NOT EXISTS `linkler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `dosyaboyutu` varchar(255) NOT NULL,
  `yuklemeTarihi` datetime DEFAULT NULL,
  `sonKullanmaTarihi` datetime DEFAULT NULL,
  `indirildi` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `linkler`
--

INSERT INTO `linkler` (`id`, `url`, `dosyaboyutu`, `yuklemeTarihi`, `sonKullanmaTarihi`, `indirildi`) VALUES
(118, 'indir/622dc0.zip', '1092513', '2022-12-03 03:15:15', '2022-12-10 03:15:15', 1),
(119, 'indir/34ef52.zip', '1092513', '2022-12-03 03:18:43', '2022-12-10 03:18:43', 1),
(122, 'indir/f69a66.zip', '98252', '2022-12-03 04:08:42', '2022-12-10 04:08:42', 1),
(124, 'indir/e59558.zip', '74260', '2022-12-03 04:21:04', '2022-12-10 04:21:04', 0),
(125, 'indir/9b17fc.zip', '1092513', '2022-12-03 04:21:47', '2022-12-10 04:21:47', 1),
(126, 'indir/a9588d.zip', '1092513', '2022-12-03 04:23:25', '2022-12-10 04:23:25', 0),
(127, 'indir/19f7e1.zip', '33067', '2022-12-03 04:27:55', '2022-12-10 04:27:55', 1),
(128, 'indir/ef92e9.zip', '52936', '2022-12-03 04:28:45', '2022-12-10 04:28:45', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
