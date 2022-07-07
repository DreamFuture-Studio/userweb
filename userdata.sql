-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-07-07 17:05:56
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 資料庫: `userdata`
--

-- --------------------------------------------------------

--
-- 資料表結構 `username`
--

CREATE TABLE `username` (
  `name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `username`
--

INSERT INTO `username` (`name`, `account`, `password`, `id`) VALUES
('', 'C110151118', '87878788', 0002);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `username`
--
ALTER TABLE `username`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;