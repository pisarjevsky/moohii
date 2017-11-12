-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 08 2017 р., 00:24
-- Версія сервера: 10.1.28-MariaDB
-- Версія PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `news`
--

-- --------------------------------------------------------

--
-- Структура таблиці `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_mess` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `likes`
--

INSERT INTO `likes` (`id`, `id_mess`, `count`) VALUES
(1, 5, 10),
(2, 7, 345);

-- --------------------------------------------------------

--
-- Структура таблиці `mess`
--

CREATE TABLE `mess` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `message` text CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `mess`
--

INSERT INTO `mess` (`id`, `author`, `message`, `date`, `time`, `likes`) VALUES
(262, 'Автор 1', 'Привет', '2008-11-17', '00:22:40', 0),
(263, 'Автор 1', 'Раздватри', '2008-11-17', '00:22:54', 0),
(264, 'Евгений', 'Сообщение 2', '2008-11-17', '00:23:02', 0);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `mess`
--
ALTER TABLE `mess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
