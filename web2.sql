-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2018. Már 05. 23:47
-- Kiszolgáló verziója: 10.1.19-MariaDB
-- PHP verzió: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `web2`
--
CREATE DATABASE IF NOT EXISTS `web2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web2`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `utonev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT '',
  `jogosultsag` varchar(2) NOT NULL DEFAULT '_1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--



-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `url` varchar(30) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `szulo` varchar(30) NOT NULL,
  `jogosultsag` varchar(2) NOT NULL,
  `sorrend` tinyint(4) NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`url`, `nev`, `szulo`, `jogosultsag`, `sorrend`) VALUES
('posztok', 'Posztok', 'fociinfo', '01', 80),
('csapatok', 'Csapatok', 'fociinfo', '11', 40),
('belepes', 'Belépés', '', '10', 60),
('fociinfo', 'Fociinfo', '', '11', 20),
('jatekosok', 'Játékosok', 'fociinfo', '01', 50),
('kilepes', 'Kilépés', '', '01', 70),
('linkek', 'Linkek', '', '10', 30),
('bejelentkezes', 'Bejelentkezés', 'belepes', '10', 90),
('regisztralas', 'Regisztrálás', 'belepes', '10', 100),
('hirek', 'Hírek', '', '01', 110),
('nyitolap', 'Nyitólap', '', '11', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
