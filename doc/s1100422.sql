-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-17 08:41:48
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `s1100422`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `hi` text NOT NULL,
  `name` text NOT NULL,
  `intro1` text DEFAULT NULL,
  `intro2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `hi`, `name`, `intro1`, `intro2`) VALUES
(1, '安安你好', '這裡是西門桑吉爾夫', '22222', '222333');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '我是頁尾');

-- --------------------------------------------------------

--
-- 資料表結構 `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `intro` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `marquee`
--

INSERT INTO `marquee` (`id`, `name`, `sh`, `intro`) VALUES
(7, 'ame.jpg', 1, 'ame'),
(8, 'gura.jpg', 1, 'gura'),
(9, '666.jpg', 1, '666');

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL COMMENT '中文標題',
  `titleEng` text NOT NULL COMMENT '英文標題',
  `name` text NOT NULL COMMENT '檔案路徑',
  `href` text NOT NULL COMMENT '網址',
  `sh` tinyint(1) NOT NULL DEFAULT 1 COMMENT '顯示/隱藏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `titleEng`, `name`, `href`, `sh`) VALUES
(1, '萬年曆', 'calendar', 'cal_pre.jpg', 'http://220.128.133.15/s1100422/calendar/', 1),
(2, '投票系統', 'vote', 'vote_pre.jpg', '123', 1),
(3, 'SFV', 'SFV', 'ken_pre.png', '123', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `title`) VALUES
(1, '我是大字報');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `admin` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `account` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(24) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `admin`, `account`, `password`, `email`, `name`, `gender`, `birthday`) VALUES
(4, 1, 'A', 'A', 'A', 'A', 'A', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
