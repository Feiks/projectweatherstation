-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 29 2019 г., 01:13
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `weatherstaion`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rain_guage`
--

CREATE TABLE `rain_guage` (
  `id` int(50) NOT NULL,
  `Rain_guage` int(50) NOT NULL COMMENT 'mL',
  `wind_speed` int(50) NOT NULL COMMENT 'mps',
  `temperature` int(20) NOT NULL COMMENT '~C',
  `light_sensor` int(20) NOT NULL COMMENT 'ON',
  `humidity` int(20) NOT NULL COMMENT '%',
  `pressure` int(20) NOT NULL COMMENT 'Pa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rain_guage`
--

INSERT INTO `rain_guage` (`id`, `Rain_guage`, `wind_speed`, `temperature`, `light_sensor`, `humidity`, `pressure`) VALUES
(1, 5, 25, 28, 1, 23, 21);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rain_guage`
--
ALTER TABLE `rain_guage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rain_guage`
--
ALTER TABLE `rain_guage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
