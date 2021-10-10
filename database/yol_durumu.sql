-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yol_durumu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirim`
--

CREATE TABLE `bildirim` (
  `id` int(11) NOT NULL,
  `ad` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `tckn` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `tel_no` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `yol_sorunu` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `gun` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yil` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `engel` varchar(10) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkili`
--

CREATE TABLE `yetkili` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `rol` varchar(60) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkili`
--

INSERT INTO `yetkili` (`id`, `kullanici_adi`, `sifre`, `rol`) VALUES
(26, 'diyarbakır', 'b706835de79a2b4e80506f582af3676a', '9.Bölge Müdürlüğü'),
(28, 'şanlıurfa', 'dfc7defac6624a80f02b02e22b14e8fd', '91.Şube Şefliği Şanlıurfa'),
(29, 'merkez', '1709bd1558d6214e65e563bbd5f4a346', '92.Şube Şefliği Merkez'),
(30, 'mardin', '1415fe9fea0fa1e45dddcff5682239a0', '93.Şube Şefliği Mardin'),
(31, 'siirt', '35613dde17e11caa281c2e7bc2ac7acc', '94.Şube Şefliği Siirt'),
(32, 'cizre', '2990cb071c6413d6cde1512f6474506a', '95.Şube Şefliği Cizre'),
(33, 'siverek', '7610db9e380ba9775b3c215346184a87', '96.Şube Şefliği Siverek'),
(34, 'batman', 'a2fe8c05877ec786290dd1450c3385cd', '97.Şube Şefliği Batman');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bildirim`
--
ALTER TABLE `bildirim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yetkili`
--
ALTER TABLE `yetkili`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bildirim`
--
ALTER TABLE `bildirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- Tablo için AUTO_INCREMENT değeri `yetkili`
--
ALTER TABLE `yetkili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
