-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 09 2021 г., 20:10
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `courses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` int(8) NOT NULL,
  `title` varchar(40) NOT NULL,
  `text` varchar(200) NOT NULL,
  `url` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `title`, `text`, `url`) VALUES
(1, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(29, 'Online Music lesson', 'Join our lessons', '#'),
(36, 'Online English lesson', 'Join our lessons123123', 'seminar.com'),
(37, 'Online Music lesson', 'Join our lessons', '#'),
(38, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(40, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(42, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(46, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(48, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(50, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(52, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(56, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(57, 'Online Music lesson', 'Join our lessons', '#'),
(58, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(59, 'Online Music lesson', 'Join our lessons', '#'),
(60, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(61, 'Online Music lesson', 'Join our lessons', '#'),
(62, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(63, 'Online Music lesson', 'Join our lessons', '#'),
(64, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(65, 'Online Music lesson', 'Join our lessons', '#'),
(66, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(67, 'Online Music lesson', 'Join our lessons', '#'),
(68, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(69, 'Online Music lesson', 'Join our lessons', '#'),
(70, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(72, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(73, 'Online Music lesson', 'Join our lessons', '#'),
(74, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(75, 'Online Music lesson', 'Join our lessons', '#'),
(76, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(77, 'Online Music lesson', 'Join our lessons', '#'),
(78, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(79, 'Online Music lesson', 'Join our lessons', '#'),
(80, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(81, 'Online Music lesson', 'Join our lessons', '#'),
(82, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(83, 'Online Music lesson', 'Join our lessons', '#'),
(84, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(85, 'Online Music lesson', 'Join our lessons', '#'),
(86, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(87, 'Online Music lesson', 'Join our lessons', '#'),
(88, '123', '123', '123'),
(89, '', '', ''),
(90, '123123d', '123123d', '123123d'),
(91, '123asdasdasd', '1dasdasd', 'asdasdasd');

-- --------------------------------------------------------

--
-- Структура таблицы `old_main`
--

CREATE TABLE `old_main` (
  `id` int(8) NOT NULL,
  `old_id` int(8) NOT NULL,
  `old_title` varchar(40) NOT NULL,
  `old_text` varchar(200) NOT NULL,
  `old_url` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `old_main`
--

INSERT INTO `old_main` (`id`, `old_id`, `old_title`, `old_text`, `old_url`) VALUES
(28, 71, 'Online Music lesson', 'Join our lessons', '#'),
(29, 54, 'Online English lesson', 'Join our lessons', 'seminar.com'),
(30, 19, 'Online Music lesson', 'Join our lessons', '#'),
(31, 33, 'Online Music lesson', 'Join our lessons', '#');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `role` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `surname`, `email`, `phone`, `role`) VALUES
(12, 'mer4rr', '74fb828db2294525ad9f43776e53c341', 'Dmitry', 'Smirnov', 'smirnovdmital@mpei.ru', 'Smirnov', 1),
(13, 'Petrovich', '74fb828db2294525ad9f43776e53c341', 'Petr', 'Petrov', 'PetrovPP@mpei.ru', 'Petrov', 0),
(14, 'Ivan12345', '74fb828db2294525ad9f43776e53c341', 'Ivan', 'Ivanov', 'IvanovII@mpei.ru', 'Ivanov', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `old_main`
--
ALTER TABLE `old_main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT для таблицы `old_main`
--
ALTER TABLE `old_main`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
