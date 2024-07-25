-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3309
-- Время создания: Июл 25 2024 г., 15:47
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portfolio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Категория`
--

CREATE TABLE `Категория` (
  `id_категории` int NOT NULL,
  `Наименование` varchar(55) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Пользователь`
--

CREATE TABLE `Пользователь` (
  `id_пользователя` int NOT NULL,
  `Логин` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `Пароль` varchar(55) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Год`
--

CREATE TABLE `Год` (
  `id_года` int NOT NULL,
  `Год` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Работа`
--

CREATE TABLE `Работа` (
  `id_работы` int NOT NULL,
  `id_года` int NOT NULL,
  `id_категории` int NOT NULL,
  `Фото` varchar(55) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Категория`
--
ALTER TABLE `Категория`
  ADD PRIMARY KEY (`id_категории`);

--
-- Индексы таблицы `Пользователь`
--
ALTER TABLE `Пользователь`
  ADD PRIMARY KEY (`id_пользователя`);

--
-- Индексы таблицы `Год`
--
ALTER TABLE `Год`
  ADD PRIMARY KEY (`id_года`);

--
-- Индексы таблицы `Работа`
--
ALTER TABLE `Работа`
  ADD PRIMARY KEY (`id_работы`),
  ADD KEY `id_года` (`id_года`),
  ADD KEY `id_категории` (`id_категории`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Категория`
--
ALTER TABLE `Категория`
  MODIFY `id_категории` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Пользователь`
--
ALTER TABLE `Пользователь`
  MODIFY `id_пользователя` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Год`
--
ALTER TABLE `Год`
  MODIFY `id_года` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Работа`
--
ALTER TABLE `Работа`
  MODIFY `id_работы` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Работа`
--
ALTER TABLE `Работа`
  ADD CONSTRAINT `работа_ibfk_1` FOREIGN KEY (`id_года`) REFERENCES `Год` (`id_года`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `работа_ibfk_2` FOREIGN KEY (`id_категории`) REFERENCES `Категория` (`id_категории`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
