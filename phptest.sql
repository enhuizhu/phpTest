-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-07-03 01:11:36
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phptest`
--

-- --------------------------------------------------------

--
-- 表的结构 `hobbies`
--

CREATE TABLE IF NOT EXISTS `hobbies` (
  `HobbyId` int(11) NOT NULL AUTO_INCREMENT,
  `HobbyName` varchar(20) NOT NULL,
  PRIMARY KEY (`HobbyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `hobbies`
--

INSERT INTO `hobbies` (`HobbyId`, `HobbyName`) VALUES
(1, 'Tennis'),
(2, 'Gaming'),
(3, 'Football');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `FavorHobbyId` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`ID`, `Name`, `Age`, `FavorHobbyId`) VALUES
(1, 'Danny', 26, 3),
(2, 'Andrew', 21, 2),
(3, 'Ed', 43, 1),
(5, 'client', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
