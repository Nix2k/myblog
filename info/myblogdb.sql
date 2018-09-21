-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 21 2018 г., 19:20
-- Версия сервера: 5.5.61
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myblogdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `subject`, `text`, `name`, `email`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Тема обращения', 'ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст', 'Иван', 'ivan@mail.ru', NULL, '2018-09-19 16:46:06', '2018-09-19 16:46:06'),
(2, '123456', 'kjhgfdsbgjgnrdgdfyndnfy', 'etrdhdhf', 'mihail.bokov@gmail.com', NULL, '2018-09-19 17:48:04', '2018-09-19 17:48:04'),
(3, 'Theme', 'MessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage', 'Name', 'mihail.bokov@gmail.com', NULL, '2018-09-20 07:52:09', '2018-09-20 07:52:09'),
(4, 'Theme', 'MessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage', 'Name', 'mihail.bokov@gmail.com', NULL, '2018-09-20 08:52:05', '2018-09-20 08:52:05'),
(5, 'Theme', 'MessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage', 'Name', 'mihail.bokov@gmail.com', NULL, '2018-09-20 08:54:45', '2018-09-20 08:54:45'),
(6, 'Theme', 'MessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessageMessage\r\nMessageMessageMessageMessageMessage\r\nMessageMessageMessage', 'Name', 'mihail.bokov@gmail.com', NULL, '2018-09-20 08:56:55', '2018-09-20 08:56:55'),
(7, 'esedgdhfdhdhf', 'sgdfgdasgfdsfnggf2345ty', 'Иван', 'mihail.bokov@gmail.com', NULL, '2018-09-20 13:56:09', '2018-09-20 13:56:09'),
(8, 'esedgdhfdhdhf', 'sgdfgdasgfdsfnggf2345ty', 'Иван', 'mihail.bokov@gmail.com', NULL, '2018-09-20 14:54:19', '2018-09-20 14:54:19'),
(9, 'йцукен', 'gfjhdhfey748yn848snu8', 'Иван', 'mihail.bokov@gmail.com', NULL, '2018-09-20 17:13:49', '2018-09-20 17:13:49'),
(10, 'qwerty', 'фыва\r\nпролдж\r\nйцукен', 'Михаил', 'it-dev@yandex.ru', NULL, '2018-09-20 17:23:35', '2018-09-20 17:23:35'),
(11, '123456', 'вапролтптдоирнпг\r\nвапниож\r\nрпмрлшидлз\r\nрполдтзжщзшщшлщгиш\r\nпрамнршищшщ', 'Михаил', 'fdhd@dsgs.iq', NULL, '2018-09-20 17:43:11', '2018-09-20 17:43:11'),
(12, 'etryhgkjhgd', 'fdhjfgj\r\ndhfndngjh\r\nrdfgh\r\nfg gjhgkgk gjfg\r\ngf j hgjgfjg fhfjjf', 'Иван', 'ivan@mail.ru', NULL, '2018-09-21 14:36:14', '2018-09-21 14:36:14');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_09_15_070737_create_table', 1),
(3, '2018_09_16_175510_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Первая статья', '<p>Текст статьи</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <i>quis nostrud exercitation</i> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2018-09-19 16:44:47', '2018-09-21 13:12:04');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sessionhash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `sessionhash`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'mihail.bokov@gmail.com', 'daaad6e5604e8e17bd9f108d91e26afe6281dac8fda0091040a7a6d7bd9b43b5', 'c0600bf58c32ac743234a93278583674f97398bd1b85c7523018e8b913b1d6bd', NULL, '2018-09-21 13:11:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
