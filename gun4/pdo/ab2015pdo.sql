-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Şub 2015, 16:15:53
-- Sunucu sürümü: 5.6.14
-- PHP Sürümü: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ab2015php`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE IF NOT EXISTS `iller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ilinadi` varchar(31) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`id`, `ilinadi`) VALUES
(1, 'Adana'),
(2, 'Antalyaaa'),
(3, 'diyarbakır'),
(4, 'eskişehir'),
(5, 'balıkesir'),
(6, 'istanbul'),
(7, 'asd'),
(8, 'asd'),
(9, 'asd'),
(10, 'asd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE IF NOT EXISTS `kisiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yas` int(3) DEFAULT NULL,
  `cinsiyet` varchar(15) DEFAULT NULL,
  `ad` varchar(31) DEFAULT NULL,
  `soyad` varchar(31) DEFAULT NULL,
  `il` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `yas`, `cinsiyet`, `ad`, `soyad`, `il`) VALUES
(2, 28, 'erkek', 'ömer', 'çlşi', 2),
(9, 23, 'kadin', 'ayşe', 'yılmaz', 6),
(8, 23, 'erkek', 'ali ', 'veli', 3),
(10, 65, 'erkek', 'ali', 'yılmaz', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
