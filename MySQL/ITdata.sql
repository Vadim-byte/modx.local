-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2021 г., 10:09
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ITdata`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Category_New_Used`
--

CREATE TABLE `Category_New_Used` (
  `Cat` text NOT NULL,
  `idCat` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Category_New_Used`
--

INSERT INTO `Category_New_Used` (`Cat`, `idCat`) VALUES
('New', 1),
('Used', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Client`
--

CREATE TABLE `Client` (
  `IdClient` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `DataOfBirth` date NOT NULL,
  `MobNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Client`
--

INSERT INTO `Client` (`IdClient`, `Name`, `Surname`, `DataOfBirth`, `MobNumber`) VALUES
(1, 'Марина', 'Іванова', '1975-08-03', 665869631),
(2, 'Олександр', 'Брухальский', '2000-01-01', 950000000);

-- --------------------------------------------------------

--
-- Структура таблицы `Contact`
--

CREATE TABLE `Contact` (
  `IdCont` int(9) NOT NULL,
  `PIB` varchar(20) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Mes` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Contact`
--

INSERT INTO `Contact` (`IdCont`, `PIB`, `Mail`, `Mes`) VALUES
(1, '', '', ''),
(2, '123', '123', '123'),
(3, 'vadimka', '33', '33'),
(4, 'vadimka', '33', '33'),
(5, 'vadimka', '33', '33'),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '3', '3', '3'),
(13, '3', '3', '3'),
(14, '', '', ''),
(15, '', '', ''),
(16, '123', '123', '123'),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '123', '123', '123'),
(27, '123', '123', '123'),
(28, '123', '123', '123'),
(29, '123', '123', '123'),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, 'tiukarara', 'rarar', 'rara'),
(43, 'tiukarara', 'rarar', 'rara'),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, '', '', ''),
(50, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `GroupOf`
--

CREATE TABLE `GroupOf` (
  `idGroup` int(11) NOT NULL,
  `Group_Of` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `GroupOf`
--

INSERT INTO `GroupOf` (`idGroup`, `Group_Of`) VALUES
(1, 'ПК'),
(2, 'Ноутбуки'),
(3, 'Аксесуари');

-- --------------------------------------------------------

--
-- Структура таблицы `Order`
--

CREATE TABLE `Order` (
  `IdOrder` int(11) NOT NULL,
  `ClientName` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Data` date NOT NULL,
  `Price` int(9) NOT NULL,
  `RTP` varchar(255) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Places`
--

CREATE TABLE `Places` (
  `idPP` int(11) NOT NULL,
  `pick-up point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Places`
--

INSERT INTO `Places` (`idPP`, `pick-up point`) VALUES
(1, 'Pick up at the store\r\n'),
(2, 'Pick up at the post office\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `id` int(7) NOT NULL,
  `ProductName` varchar(150) NOT NULL,
  `Price` int(12) NOT NULL,
  `Warranty` int(3) NOT NULL,
  `GroupOfProduct` int(7) NOT NULL,
  `Category` int(7) NOT NULL,
  `Setting` int(11) NOT NULL,
  `About` text NOT NULL,
  `test123` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`id`, `ProductName`, `Price`, `Warranty`, `GroupOfProduct`, `Category`, `Setting`, `About`, `test123`) VALUES
(1, 'Ноутбук LENOVO ideapad S145-15API Platinum Grey (81UT000XRA)', 12999, 12, 2, 1, 0, 'Країна виробник - Китай\r\nОпераційна система - without OS\r\n', 0),
(2, 'Ноутбук Ноутбук MSI Modern 14 Gray (M14B10MW-437XUA)', 15999, 12, 2, 1, 0, 'Країна виробник - Англія\r\nОпераційна система - without OS\r\n', 0),
(3, 'Навушники Sven 312b', 699, 6, 3, 1, 0, 'Провідні навушники sven 312b кращі з кращих за свою ціну!', 0),
(4, 'Навушники Sven 3442a', 299, 6, 3, 1, 0, 'Гарна пара навушників.', 0),
(5, 'Ноутбук Samsung Omen X 2S 15-dg0002ur (7BV20EA) Shadow Black', 59000, 12, 2, 1, 499, 'Ігровий ноутбук, краща ціна у нас!', 0),
(6, 'Навушники Ab-ba 331', 9999, 6, 3, 1, 0, 'Ви давно шукаєте навушники передивляння тіктоку? Ці навушники ідеально вам підійдуть.', 0),
(7, 'Ноутбук Asus X543MA-GQ496', 14499, 12, 2, 1, 499, 'Супер ноутбук, для відпочинку!', 0),
(8, 'Ноутбук MacBook Air 2019', 29999, 12, 2, 2, 0, 'Б.в ноутбук, стан 5+', 0),
(9, 'Ноутбук MacBook Air 2017', 26499, 12, 2, 2, 0, 'Б.в ноутбук, стан 4+', 0),
(10, 'Навушники Anian G224', 999, 6, 3, 1, 0, 'Класні навушники, якщо ви полюбляєте дивитись фільми!', 0),
(11, 'Навушники H-V K332', 333, 6, 3, 1, 0, 'Вітаю з пасхою!', 0),
(12, 'Навушники JBL AM23', 699, 6, 3, 1, 0, 'Класні навушники для прослуховування музики.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ToOrder`
--

CREATE TABLE `ToOrder` (
  `IdToOrd` int(11) NOT NULL,
  `PIB` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Adr` varchar(255) NOT NULL,
  `Tel` int(10) NOT NULL,
  `IDT` mediumtext NOT NULL,
  `Mes` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Category_New_Used`
--
ALTER TABLE `Category_New_Used`
  ADD PRIMARY KEY (`idCat`),
  ADD KEY `idCat` (`idCat`);

--
-- Индексы таблицы `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`IdClient`),
  ADD KEY `IdClient` (`IdClient`),
  ADD KEY `Name` (`Name`,`Surname`);

--
-- Индексы таблицы `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`IdCont`);

--
-- Индексы таблицы `GroupOf`
--
ALTER TABLE `GroupOf`
  ADD PRIMARY KEY (`idGroup`),
  ADD KEY `idGroup` (`idGroup`);

--
-- Индексы таблицы `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`IdOrder`),
  ADD KEY `Client` (`ClientName`),
  ADD KEY `Product` (`Product`);

--
-- Индексы таблицы `Places`
--
ALTER TABLE `Places`
  ADD PRIMARY KEY (`idPP`),
  ADD KEY `idPP` (`idPP`,`pick-up point`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`GroupOfProduct`),
  ADD KEY `Category` (`Category`),
  ADD KEY `test123` (`test123`),
  ADD KEY `ProductName` (`ProductName`);

--
-- Индексы таблицы `ToOrder`
--
ALTER TABLE `ToOrder`
  ADD PRIMARY KEY (`IdToOrd`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Category_New_Used`
--
ALTER TABLE `Category_New_Used`
  MODIFY `idCat` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Client`
--
ALTER TABLE `Client`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `Contact`
--
ALTER TABLE `Contact`
  MODIFY `IdCont` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `GroupOf`
--
ALTER TABLE `GroupOf`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Order`
--
ALTER TABLE `Order`
  MODIFY `IdOrder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Places`
--
ALTER TABLE `Places`
  MODIFY `idPP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `ToOrder`
--
ALTER TABLE `ToOrder`
  MODIFY `IdToOrd` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`ClientName`) REFERENCES `Client` (`Name`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Product`) REFERENCES `Product` (`ProductName`);

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`GroupOfProduct`) REFERENCES `GroupOf` (`idGroup`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Category`) REFERENCES `Category_New_Used` (`idCat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
