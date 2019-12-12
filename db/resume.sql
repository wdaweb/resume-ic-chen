-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `edu`
--

CREATE TABLE `edu` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `grad_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '就讀時間',
  `grad_st` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL' COMMENT '畢業狀態',
  `sch` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '學校',
  `dept` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '科系'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `edu`
--

INSERT INTO `edu` (`id`, `acct`, `see`, `grad_t`, `grad_st`, `sch`, `dept`) VALUES
(1, 'admin', 1, '2004 ~ 2008', '畢業', '淡江大學', '英文學系'),
(2, 'admin', 1, '2099 ~ 2099', '肆業', '一二三大學', '一二三系');

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(20) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `dur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '任職期間',
  `corp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司',
  `posit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '職稱',
  `jd` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '工作說明'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `acct`, `see`, `dur`, `corp`, `posit`, `jd`) VALUES
(1, 'admin', 1, '2010/10 ~ 2012/03 (1年5個月)', '中茂文化有限公司', '中文化專案管理', '負責國外供應商及客戶的書信，以及負責往返聯絡、管理技術文件、翻譯專業文件。'),
(2, 'admin', 1, '2012/04 ~ 2015/02 (2年11個月)', '中茂文化有限公司', '自由譯者', '技術文件、社群遊戲等等的編輯與翻譯。'),
(3, 'admin', 1, '2015/04 ~ 2019/04 (4年1個月)', '易韋有限公司', '全職英翻中資深編譯', '英翻中的翻譯、審稿。'),
(4, 'admin', 1, '2015/04 ~ 2019/09 (4年6個月)', '英商思迪股份有限公司', '自由譯者', '英翻中的翻譯、審稿。');

-- --------------------------------------------------------

--
-- 資料表結構 `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `see` tinyint(1) NOT NULL DEFAULT 0,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `img`
--

INSERT INTO `img` (`id`, `see`, `acct`, `filename`, `alt`) VALUES
(1, 1, 'admin', '23d50e04b0c3027b.jpg', '企鵝'),
(2, 0, 'admin', '7e7cd0b1jw1f811tiddxqj20fa0egdhz.jpg', '貓熊'),
(4, 0, 'admin', 'wzLgOqh - Imgur.jpg', '企鵝');

-- --------------------------------------------------------

--
-- 資料表結構 `reqs`
--

CREATE TABLE `reqs` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `reqs_posit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '期望職務',
  `reqs_jd` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '工作描述',
  `reqs_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '可上班時間',
  `reqs_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '期望工作性質',
  `reqs_place` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '期望工作地點',
  `reqs_pay` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '期望薪資'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `reqs`
--

INSERT INTO `reqs` (`id`, `acct`, `see`, `reqs_posit`, `reqs_jd`, `reqs_time`, `reqs_type`, `reqs_place`, `reqs_pay`) VALUES
(1, 'admin', 1, '全端/前端/後端網頁設計人員', '依照電腦輸入與輸出之多媒體功能，進行綜合設計，並用電腦網頁設計語言撰寫程式。', '隨時', '全職', '雙北地區', '38,000/月'),
(2, 'admin', 0, '中文化翻譯人員', '商業書信、契約、網站、商品介紹、型錄、新聞稿、操作說明書、觀光文章、系統介面等英翻中案件。', '隨時', '全職', '雙北地區', '38,000/月');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `cat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類',
  `skill` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '技能',
  `level` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '程度'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `acct`, `see`, `cat`, `skill`, `level`) VALUES
(1, 'admin', 1, '語言', '英文', 'TOEIC 金色'),
(2, 'admin', 1, '語言', '中文', '母語'),
(3, 'admin', 1, '設計/美工', 'Photoshop', '大致熟悉'),
(4, 'admin', 1, '設計/美工', 'Illustrator', '基本操作');

-- --------------------------------------------------------

--
-- 資料表結構 `social_m`
--

CREATE TABLE `social_m` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `fb` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `social_m`
--

INSERT INTO `social_m` (`id`, `acct`, `see`, `fb`, `ig`, `linkedin`, `github`, `youtube`, `twitter`) VALUES
(1, 'admin', 1, '', '', 'http://www.linkedin.com/in/irmachen', 'http://github.com/ic-chen', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `s_intro`
--

CREATE TABLE `s_intro` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `s_intro` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '自介',
  `bio` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `s_intro`
--

INSERT INTO `s_intro` (`id`, `acct`, `see`, `s_intro`, `bio`) VALUES
(1, 'admin', 1, '中文化譯者、網頁設計初學者', '在中文化翻譯領域有十年的工作經驗，目前正在慢慢學習網頁和程式設計，希望可以開拓出不一樣的人生。'),
(2, 'admin', 0, '中文化譯者、資深編譯', '能依循行業常規翻譯出流暢之中文、熟悉各種 CAT 翻譯工具，並具備 TOEIC 金色證書。');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `psw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '性別',
  `btd` date DEFAULT NULL COMMENT '生日',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電郵',
  `tel_cell` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '行動電話',
  `tel_home` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '家中電話',
  `addr` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '居住地區',
  `reg_time` timestamp NULL DEFAULT current_timestamp() COMMENT '註冊時間',
  `upt_time` timestamp NULL DEFAULT current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acct`, `psw`, `name`, `gender`, `btd`, `email`, `tel_cell`, `tel_home`, `addr`, `reg_time`, `upt_time`) VALUES
(1, 'admin', 'admin', '陳怡婷', '女性', '1986-07-09', 'irma_chen79@hotmail.com', '0929-810-875', '', '新北市永和區', '2019-12-11 03:21:24', '2019-12-11 03:21:24');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reqs`
--
ALTER TABLE `reqs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `social_m`
--
ALTER TABLE `social_m`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `s_intro`
--
ALTER TABLE `s_intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reqs`
--
ALTER TABLE `reqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `social_m`
--
ALTER TABLE `social_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_intro`
--
ALTER TABLE `s_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
