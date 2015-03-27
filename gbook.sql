-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 27 2015 г., 23:18
-- Версия сервера: 5.5.30
-- Версия PHP: 5.4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ci_less`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gbook`
--

CREATE TABLE IF NOT EXISTS `gbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `gbook`
--

INSERT INTO `gbook` (`id`, `name`, `email`, `comment`) VALUES
(47, 'Ð”ÐµÐ½Ð¸Ñ', 'mail@mail', 'Ð’ÑÐµÐ¼ Ð¿Ñ€Ð¸Ð²ÐµÑ‚!)'),
(48, 'Ð˜Ð³Ð¾Ñ€ÑŒ', 'igor@ivanov', 'ÐŸÑ€Ð¸Ð²ÐµÑ‚'),
(51, 'ÐšÐ¾ÑÑ‚Ñ', 'sgdfngj@gdfgnkdfg', 'Hello'),
(52, 'Jhon', 'jn@li', ')))');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
