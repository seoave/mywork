-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Час створення: Гру 31 2022 р., 11:54
-- Версія сервера: 5.7.33
-- Версія PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mywork`
--

-- --------------------------------------------------------

--
-- Структура таблиці `applicants`
--

CREATE TABLE `applicants` (
  `applicantId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблиці `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` text,
  `website` varchar(255) DEFAULT NULL,
  `employees` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `technologies` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `companies`
--

INSERT INTO `companies` (`id`, `userId`, `name`, `about`, `website`, `employees`, `country`, `city`, `technologies`) VALUES
(1, 4, 'Google', 'Very big company                                 ', 'https://google.com', 50000, 'Bahamas', 'Ivanivka-city', 'CSS,Docker,Git,HTML,New Skill,PHP,SCSS,Symfony');

-- --------------------------------------------------------

--
-- Структура таблиці `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `companyId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `description` text,
  `skills` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `english` varchar(255) DEFAULT NULL,
  `jobTypes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблиці `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `experience_term` float DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `experience` text,
  `about` text CHARACTER SET utf8,
  `english` varchar(30) DEFAULT NULL,
  `job_types` varchar(120) DEFAULT NULL,
  `education` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `position`, `salary`, `experience_term`, `country`, `city`, `skills`, `category`, `experience`, `about`, `english`, `job_types`, `education`) VALUES
(3, 13, 'PHP developer, CSS developer', 1000, 5, 'Australia', 'Kyiv', 'PHP,GIT', 'PHP', 'My Experience', 'About me text', 'No English', 'Remote,Office,Part-time', 'My Education'),
(4, 12, 'PHP developer, CSS developer', 500, 2, 'Antarctica', 'Kyiv', 'CSS,Docker,Git,HTML,JS,New Skill,New Skill2,PHP,SCSS', 'PHP', 'My Experience is great', 'I was born in WildWestWorld', 'Beginner/Elementary', 'Remote,Office,Part-time', 'My education is great');

-- --------------------------------------------------------

--
-- Структура таблиці `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skillName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `skills`
--

INSERT INTO `skills` (`id`, `skillName`) VALUES
(3, 'CSS'),
(11, 'Docker'),
(2, 'Git'),
(4, 'HTML'),
(9, 'JS'),
(10, 'New Skill'),
(13, 'New Skill2'),
(1, 'PHP'),
(5, 'SCSS'),
(12, 'Symfony'),
(14, 'Symfony6');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` int(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `salt`, `password`, `birthday`, `country`, `city`, `phone`, `photo`) VALUES
(4, 'Dolores', 'recruiter', 'dolores@mail.ww', 'QEe5hFCRsYeNr', '0227e4c8c059bcd8712848e397f36578', 189291600, 'Austria', 'Wien', '+380971234567', 'Dolores.jpg'),
(6, 'Clementine Pennyfeather', 'recruiter', 'klementine@mail.ww', 'P2xdcFJqS21cn', '616b50710c6068187b5aef505604cefe', 341528400, 'Armenia', 'Wien', '+380971234567', 'Clementine_Pennyfeather.webp'),
(12, 'Bernard Show', 'candidate', 'bernard@mail.ww', 'cG5y42E3gZ3Z8', 'e2e8933c95a98cd53bf4e6eb4f1b6b2d', 189291600, 'Argentina', 'Wien', '+380971234567', 'Bernard_infobox.webp'),
(13, 'Ford', 'candidate', 'ford@mail.ww', '8RiaW4gdNITtP', 'd73ccc8e0f03faf13e9c2e9f10891833', -933476400, 'United States', 'California', '+380678887766', 'Robert_Ford_Les_Echorces.webp'),
(14, 'admin', 'administrator', 'admin@admin', 'T3KRGm79Oj2w0', '427f4380ec0bdc97e779edef363d13cd', -10800, 'Bahrain', NULL, NULL, NULL),
(15, 'Dada', 'candidate', 'sss@ddd.mail', 'V1qIUMLDOpASx', '3994baa0a456f62334f72f501d38ca62', NULL, NULL, NULL, NULL, NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicantId`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Індекси таблиці `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `userId` (`userId`);

--
-- Індекси таблиці `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `companyId` (`companyId`);

--
-- Індекси таблиці `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Індекси таблиці `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skillName` (`skillName`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicantId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `companies` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
