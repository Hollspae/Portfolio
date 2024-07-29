-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3309
-- Время создания: Июл 29 2024 г., 12:39
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

--
-- Дамп данных таблицы `Категория`
--

INSERT INTO `Категория` (`id_категории`, `Наименование`) VALUES
(1, 'Диджитал'),
(2, 'Традишион');

-- --------------------------------------------------------

--
-- Структура таблицы `Пользователь`
--

CREATE TABLE `Пользователь` (
  `id_пользователя` int NOT NULL,
  `Логин` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `Пароль` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Пользователь`
--

INSERT INTO `Пользователь` (`id_пользователя`, `Логин`, `Пароль`) VALUES
(1, 'Admin', '$2y$10$J6qDk/EslrHk3ECu7gWrSui7h7CN9M9bquKHclhRV3fq2CcOIx/oq');

-- --------------------------------------------------------

--
-- Структура таблицы `Год`
--

CREATE TABLE `Год` (
  `id_года` int NOT NULL,
  `Год` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Год`
--

INSERT INTO `Год` (`id_года`, `Год`) VALUES
(2, 2019),
(3, 2020),
(4, 2021),
(5, 2022),
(6, 2023),
(7, 2024),
(9, 2025);

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
-- Дамп данных таблицы `Работа`
--

INSERT INTO `Работа` (`id_работы`, `id_года`, `id_категории`, `Фото`) VALUES
(9, 2, 2, 'https://i.postimg.cc/G3Smtz5r/19-2.jpg'),
(10, 2, 2, 'https://i.postimg.cc/wTyTmJCN/19-3.jpg'),
(11, 2, 2, 'https://i.postimg.cc/RVkCQhmD/19-4.jpg'),
(12, 2, 2, 'https://i.postimg.cc/t4FqrbCC/19-5.jpg'),
(13, 2, 2, 'https://i.postimg.cc/Pqht97Pb/19-6.jpg'),
(14, 3, 2, 'https://i.postimg.cc/TP9R6cDz/19-7.jpg'),
(15, 3, 2, 'https://i.postimg.cc/dQRgS0Gf/2020-1.jpg'),
(16, 3, 2, 'https://i.postimg.cc/HkrZHW7d/20-5.jpg'),
(18, 3, 2, 'https://i.postimg.cc/HxgBQQvk/20-12.jpg'),
(20, 3, 2, 'https://i.postimg.cc/cC1hzdSq/20-10.jpg'),
(21, 3, 2, 'https://i.postimg.cc/br6gc4yZ/20-9.jpg'),
(22, 3, 2, 'https://i.postimg.cc/DZP558Rd/20-11.jpg'),
(23, 3, 2, 'https://i.postimg.cc/hPjMb4sT/20-8.jpg'),
(24, 3, 2, 'https://i.postimg.cc/9Fnbx3gS/20-7.jpg'),
(25, 3, 2, 'https://i.postimg.cc/JhwqLNL5/20u-6.jpg'),
(26, 4, 2, 'https://i.postimg.cc/9fGBFDX5/21-5.jpg'),
(27, 4, 2, 'https://i.postimg.cc/J4v3NNGC/21-3.jpg'),
(28, 4, 2, 'https://i.postimg.cc/mrGQqTYd/21-4.jpg'),
(29, 4, 2, 'https://i.postimg.cc/yd101nrc/21-2-2.jpg'),
(30, 5, 2, 'https://i.postimg.cc/Vv3SCF47/12.jpg'),
(32, 5, 2, 'https://i.postimg.cc/jjZLXTZn/11.jpg'),
(33, 5, 2, 'https://i.postimg.cc/hjvhZY5y/10.jpg'),
(34, 5, 2, 'https://i.postimg.cc/3NDNYv72/9.jpg'),
(36, 5, 2, 'https://i.postimg.cc/nMbzzhcg/8.jpg'),
(37, 5, 2, 'https://i.postimg.cc/v81tc2Zt/6.jpg'),
(38, 5, 2, 'https://i.postimg.cc/L4rBfkqK/7.jpg'),
(39, 5, 2, 'https://i.postimg.cc/gk8yKwRw/5.jpg'),
(40, 5, 2, 'https://i.postimg.cc/SKTcKc0P/4.jpg'),
(41, 5, 2, 'https://i.postimg.cc/3Rkm0WYx/3.jpg'),
(42, 5, 2, 'https://i.postimg.cc/nhKsXBmk/1.jpg'),
(43, 6, 2, 'https://i.postimg.cc/Pqp5mDp9/1.jpg'),
(44, 6, 2, 'https://i.postimg.cc/Lsc6vsjX/2.jpg'),
(45, 6, 2, 'https://i.postimg.cc/9Fb0VCH8/3.jpg'),
(46, 6, 2, 'https://i.postimg.cc/zGfBG6JJ/4.jpg'),
(47, 6, 2, 'https://i.postimg.cc/FHnKdpR0/5.jpg'),
(48, 6, 2, 'https://i.postimg.cc/15sXL42V/6.jpg'),
(49, 7, 2, 'https://i.postimg.cc/W30pyP77/11.jpg'),
(50, 5, 1, 'https://i.postimg.cc/65K3ZTh5/1.jpg'),
(51, 5, 1, 'https://i.postimg.cc/0QmkMqMw/2.jpg'),
(52, 5, 1, 'https://i.postimg.cc/QMvNdMtD/3.jpg'),
(55, 5, 1, 'https://i.postimg.cc/yNDYKR7n/6.jpg'),
(57, 5, 1, 'https://i.postimg.cc/SNGKfqZL/7.jpg'),
(58, 5, 1, 'https://i.postimg.cc/zGXGdMMs/4.jpg');

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
  ADD KEY `id_категории` (`id_категории`),
  ADD KEY `id_года_2` (`id_года`,`id_категории`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Категория`
--
ALTER TABLE `Категория`
  MODIFY `id_категории` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Пользователь`
--
ALTER TABLE `Пользователь`
  MODIFY `id_пользователя` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Год`
--
ALTER TABLE `Год`
  MODIFY `id_года` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `Работа`
--
ALTER TABLE `Работа`
  MODIFY `id_работы` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
