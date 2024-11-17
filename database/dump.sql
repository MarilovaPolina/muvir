-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 12 2023 г., 03:47
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `udmhack`
--

-- --------------------------------------------------------

--
-- Структура таблицы `excursion`
--

CREATE TABLE `excursion` (
  `id_exc` bigint UNSIGNED NOT NULL,
  `img_exc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_exc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description_exc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_exc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_exc` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `exc_request`
--

CREATE TABLE `exc_request` (
  `id_request` bigint UNSIGNED NOT NULL,
  `id_exc_request` bigint UNSIGNED NOT NULL,
  `phone_exc_request` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_exc_request` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_exc_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `fun`
--

CREATE TABLE `fun` (
  `id_fun` bigint UNSIGNED NOT NULL,
  `img_fun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_fun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description_fun` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_fun` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `price_fun` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `house`
--

CREATE TABLE `house` (
  `id_house` bigint UNSIGNED NOT NULL,
  `img_house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description_house` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `short_description_house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_house` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `house_request`
--

CREATE TABLE `house_request` (
  `id_request` bigint UNSIGNED NOT NULL,
  `id_house_request` bigint UNSIGNED NOT NULL,
  `name_house_request` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_house_request` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `number_house_request` int UNSIGNED NOT NULL,
  `checkin_request` datetime NOT NULL,
  `checkout_request` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id_post` bigint UNSIGNED NOT NULL,
  `img_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description_post` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` bigint UNSIGNED NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `patronymic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `surname`, `name`, `patronymic`, `phone`, `login`, `password`) VALUES
(3, 'test1', 'test2', 'test3', '43535445435', 'test', '$2y$10$VDI96aOgTQGSrP/c.u5rte/lSfJuzHgD3eWgtVnC2UliY/s2OAqPm');

-- --------------------------------------------------------

--
-- Структура таблицы `wedding_request`
--

CREATE TABLE `wedding_request` (
  `id_wedding_request` bigint UNSIGNED NOT NULL,
  `phone_wedding_request` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_wedding_request` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_wedding_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `excursion`
--
ALTER TABLE `excursion`
  ADD PRIMARY KEY (`id_exc`);

--
-- Индексы таблицы `exc_request`
--
ALTER TABLE `exc_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_exc_request` (`id_exc_request`);

--
-- Индексы таблицы `fun`
--
ALTER TABLE `fun`
  ADD PRIMARY KEY (`id_fun`);

--
-- Индексы таблицы `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id_house`);

--
-- Индексы таблицы `house_request`
--
ALTER TABLE `house_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_house_request` (`id_house_request`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `wedding_request`
--
ALTER TABLE `wedding_request`
  ADD PRIMARY KEY (`id_wedding_request`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `excursion`
--
ALTER TABLE `excursion`
  MODIFY `id_exc` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `exc_request`
--
ALTER TABLE `exc_request`
  MODIFY `id_request` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `fun`
--
ALTER TABLE `fun`
  MODIFY `id_fun` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `house`
--
ALTER TABLE `house`
  MODIFY `id_house` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `house_request`
--
ALTER TABLE `house_request`
  MODIFY `id_request` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id_post` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `wedding_request`
--
ALTER TABLE `wedding_request`
  MODIFY `id_wedding_request` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `exc_request`
--
ALTER TABLE `exc_request`
  ADD CONSTRAINT `exc_request_ibfk_1` FOREIGN KEY (`id_exc_request`) REFERENCES `excursion` (`id_exc`);

--
-- Ограничения внешнего ключа таблицы `house_request`
--
ALTER TABLE `house_request`
  ADD CONSTRAINT `house_request_ibfk_1` FOREIGN KEY (`id_house_request`) REFERENCES `house` (`id_house`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
