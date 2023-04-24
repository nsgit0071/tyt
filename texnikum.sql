-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 05:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texnikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_site`
--

CREATE TABLE `admin_site` (
  `id` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `imgf` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `imgt` varchar(200) NOT NULL,
  `hero_h1` varchar(32) NOT NULL,
  `hero_h2` varchar(32) NOT NULL,
  `about_n` varchar(32) NOT NULL,
  `about_t` varchar(32) NOT NULL,
  `news_n` varchar(32) NOT NULL,
  `news_t` varchar(32) NOT NULL,
  `books_n` varchar(32) NOT NULL,
  `books_t` varchar(32) NOT NULL,
  `counts_n` varchar(200) NOT NULL,
  `team_n` varchar(32) NOT NULL,
  `team_t` varchar(32) NOT NULL,
  `contact_n` varchar(32) NOT NULL,
  `contact_t` varchar(32) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `location` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `tel` int(32) NOT NULL,
  `status` enum('0','1','','') NOT NULL,
  `telegram_link` varchar(200) NOT NULL,
  `facebook_link` varchar(200) NOT NULL,
  `instagram_link` varchar(200) NOT NULL,
  `youtube_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_site`
--

INSERT INTO `admin_site` (`id`, `logo`, `imgf`, `imgs`, `imgt`, `hero_h1`, `hero_h2`, `about_n`, `about_t`, `news_n`, `news_t`, `books_n`, `books_t`, `counts_n`, `team_n`, `team_t`, `contact_n`, `contact_t`, `map_link`, `location`, `email`, `tel`, `status`, `telegram_link`, `facebook_link`, `instagram_link`, `youtube_link`) VALUES
(4, 'imgl1653835153.png', 'imgf1653835153.jpg', 'imgs1653835153.jpg', 'imgt1653835153.jpg', 'TEMIR YO\'L TEXNIKUMI', 'Hush kelibsiz', 'Texnikum xaqida', 'Texnikum xaqida malumotlar', 'Yangliklar', 'Yangliklar Bo\'limi', 'Kutubxon', 'Bo\'yerda sizga kerakli kitoblarn', 'Yoshlar ittifoqi1', 'Tuzilma', 'Bizning tuzulmamiz', 'Bog\'lanish', 'Bizbilan bog\'lanish', 'Lorem ipsum dolor sit amet, cons', 'Adres', '@gmail.com', 998, '1', 'https://t.me/', 'https://www.facebook.com/', 'https://instagram.com/', 'youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `boglanish`
--

CREATE TABLE `boglanish` (
  `id` int(11) NOT NULL,
  `ism` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mavzu` varchar(200) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boglanish`
--

INSERT INTO `boglanish` (`id`, `ism`, `email`, `mavzu`, `Text`) VALUES
(6, 'Nurmuhammad', 'nurmuhammad', 'Test', 'TEST'),
(7, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'TEST'),
(8, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'TESt'),
(9, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'TEST'),
(10, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'TEST'),
(11, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'TEST1\r\n'),
(12, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'test'),
(13, 'Nurmuhammad', 'nurmuhammad@gmail.com', 'Test', 'Hello world'),
(14, 'dsdsdsddssdsdds', 'ds@gmail.com', 'dsdsd', 'dsds'),
(15, 'dsdsdsddssdsdds', 'ds@gmail.com', 'dsdsd', 'dsds');

-- --------------------------------------------------------

--
-- Table structure for table `bolim`
--

CREATE TABLE `bolim` (
  `id` int(11) NOT NULL,
  `Bolim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolim`
--

INSERT INTO `bolim` (`id`, `Bolim`) VALUES
(3, 'Aniq'),
(4, 'Salom');

-- --------------------------------------------------------

--
-- Table structure for table `haqida`
--

CREATE TABLE `haqida` (
  `id` int(11) NOT NULL,
  `rasm` varchar(200) NOT NULL,
  `nomi` varchar(100) NOT NULL,
  `text` varchar(900) NOT NULL,
  `qoshimcha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `haqida`
--

INSERT INTO `haqida` (`id`, `rasm`, `nomi`, `text`, `qoshimcha`) VALUES
(3, 'img1644858765.jpg', 'Қўқон темир йўл транспорти  коллежи тарихи', 'Туркистонни подшо Россияси забт этгандан кейин,  Ўрта Осиёни Россиянинг марказий районлари билан бевосита боғлайдиган темир йўллар қурилиб, ишга туширила бошланди. Аслида бу темир йўллар рус капитализмининг иқтисодий манфаатларини ва харбий стратегиясини кўзлаб қурилган эди. 1895 йил 25 майда Самарканддан Қўқон орқали Андижонга темир йўл магистрали ўтказиш ҳақида хукумат фармони эълон қилинди. Самарқанд-Андижон темир йўл магистрали Қўқон-Горчакова станцияси машрути бўйича 1889 йилда битказилди ва 1 майдан поездлар қатнови бошланди. 1910 йилда Қўқондан-Наманганга темир йўл қуриш учун акционерлар жамияти тузилди ва 1911 йил бахорида темир йўл қурилиши бошланиб, 1912 йилда ишга тушди. Асрлар давомида юк ва одам ташишда тижорат ишларида ', 'Қўқон темир йўл транспорти  коллежи тарихи\r\n\r\nТуркистонни подшо Россияси забт этгандан кейин,  Ўрта Осиёни Россиянинг марказий районлари билан бевосита боғлайдиган темир йўллар қурилиб, ишга туширила бошланди. Аслида бу темир йўллар рус капитализмининг иқтисодий манфаатларини ва харбий стратегиясини кўзлаб қурилган эди. 1895 йил 25 майда Самарканддан Қўқон орқали Андижонга темир йўл магистрали ўтказиш ҳақида хукумат фармони эълон қилинди. Самарқанд-Андижон темир йўл магистрали Қўқон-Горчакова станцияси машрути бўйича 1889 йилда битказилди ва 1 майдан поездлар қатнови бошланди. 1910 йилда Қўқондан-Наманганга темир йўл қуриш учун акционерлар жамияти тузилди ва 1911 йил бахорида темир йўл қурилиши бошланиб, 1912 йилда ишга тушди. Асрлар давомида юк ва одам ташишда тижорат ишларида “Буюк ипак йўли”да асосан туя ва от-уловдан фойдаланиб келган Ўрта Осиё халқлари учун янги темир йўл транспортининг барпо қилиниши катта тарихий воқеа бўлди ва ўз навбатида тезкорлик билан хал қилиниши керак бўлган муаммоларни кун тартибига қуйди. Бу муаммоларнинг энг мухимларидан бири янги темир йўл магистрали учун мутахассис кадрларни тайёрлашни йўлга қўйиш лозим эди. Туркистон ўлкаси халқлари учун янгилик бўлган темирйўлчи касби пайдо бўлди. Бу сўз жуда кенг маънода бўлиб, у “машинист”, “ёрдамчи машинист” “йўл устаси”, “чилангар”, “диспечер”, “станция навбатчиси” каби ўнлаб мутахассисликларни қамраб олар эди. Темир йўл транспорти учун мутахассислар тайёрлаш ишлари дастлаб Красноводск, Самарқанд, Тошкент каби темир йўл узеллари қошидаги турли хилдаги курслар, хунар мактабларида ва якка шогирдлар тайёрлаш орқали амалга оширила бошланди. Темир йўл магистрали Фарғона водийсида фаолият бошлангандан сўнг йирик темир йўл узелига айланиб қолган Қўқон шаҳрида бирин-кетин мухим иншоатлар – локомотив депоси ва бошқа темир йўл корхоналари ишга тушди. Мазкур темир йўл станцияларидаги депо ва устахоналр учун турли мутахассис кадрлар – локоматив машинистлари, уларнинг ёрдамчилари, йўл қуриш ва таъмирлаш ишчилари тайёрлаб беришда 1923 йил 9 ноябридан ўз фаолиятини бошқарган Қўқон темир йўл станцияси қошидаги темирйўлчи шогирдлар тайёрлаш мактаби '),
(6, 'img1642659489.jpg', 'Қўқон темир йўл транспорти  коллежи тарихи', '<p><span style=\"background-color:rgba(0, 0, 0, 0.05); color:rgb(133, 135, 150); font-family:nunito,-apple-system,blinkmacsystemfont,segoe ui,roboto,helvetica neue,arial,sans-serif,apple color emoji,segoe ui emoji,segoe ui symbol,noto color emoji; font-size:16px\">Туркистонни подшо Россияси забт этгандан кейин, Ўрта Осиёни Россиянинг марказий районлари билан бевосита боғлайдиган темир йўллар қурилиб, ишга туширила бошланди. Аслида бу темир йўллар рус капитализмининг иқтисодий манфаатларини ва харбий стратегиясини кўзлаб қурилган эди. 1895 йил 25 майда Самарканддан Қўқон орқали Андижонга темир йўл магистрали ўтказиш ҳақида хукумат фармони эълон қилинди. Самарқанд-Андижон темир йўл магистрали Қўқон-Горчакова станцияси машрути бўйича 1889 йилда битказилди ва 1 майдан поездлар қатнови бошланди. 1910 йилда Қўқондан-Наманганга темир йўл қуриш учун акционерлар жамияти тузилди ва 1911 йил бахорида', 'Қўқон темир йўл транспорти коллежи тарихи\r\n\r\nТуркистонни подшо Россияси забт этгандан кейин, Ўрта Осиёни Россиянинг марказий районлари билан бевосита боғлайдиган темир йўллар қурилиб, ишга туширила бошланди. Аслида бу темир йўллар рус капитализмининг иқтисодий манфаатларини ва харбий стратегиясини кўзлаб қурилган эди. 1895 йил 25 майда Самарканддан Қўқон орқали Андижонга темир йўл магистрали ўтказиш ҳақида хукумат фармони эълон қилинди. Самарқанд-Андижон темир йўл магистрали Қўқон-Горчакова станцияси машрути бўйича 1889 йилда битказилди ва 1 майдан поездлар қатнови бошланди. 1910 йилда Қўқондан-Наманганга темир йўл қуриш учун акционерлар жамияти тузилди ва 1911 йил бахорида темир йўл қурилиши бошланиб, 1912 йилда ишга тушди. Асрлар давомида юк ва одам ташишда тижорат ишларида “Буюк ипак йўли”да асосан туя ва от-уловдан фойдаланиб келган Ўрта Осиё халқлари учун янги темир йўл транспортининг барпо қилиниши катта тарихий воқеа бўлди ва ўз навбатида тезкорлик билан хал қилиниши керак бўлган муаммоларни кун тартибига қуйди. Бу муаммоларнинг энг мухимларидан бири янги темир йўл магистрали учун мутахассис кадрларни тайёрлашни йўлга қўйиш лозим эди. Туркистон ўлкаси халқлари учун янгилик бўлган темирйўлчи касби пайдо бўлди. Бу сўз жуда кенг маънода бўлиб, у “машинист”, “ёрдамчи машинист” “йўл устаси”, “чилангар”, “диспечер”, “станция навбатчиси” каби ўнлаб мутахассисликларни қамраб олар эди. Темир йўл транспорти учун мутахассислар тайёрлаш ишлари дастлаб Красноводск, Самарқанд, Тошкент каби темир йўл узеллари қошидаги турли хилдаги курслар, хунар мактабларида ва якка шогирдлар тайёрлаш орқали амалга оширила бошланди. Темир йўл магистрали Фарғона водийсида фаолият бошлангандан сўнг йирик темир йўл узелига айланиб қолган Қўқон шаҳрида бирин-кетин мухим иншоатлар – локомотив депоси ва бошқа темир йўл корхоналари ишга тушди. Мазкур темир йўл станцияларидаги депо ва устахоналр учун турли мутахассис кадрлар – локоматив машинистлари, уларнинг ёрдамчилари, йўл қуриш ва таъмирлаш ишчилари тайёрлаб беришда 1923 йил 9 ноябридан ўз фаолиятини бошқарган Қўқон темир йўл станцияси қошидаги темирйўлчи шогирдлар тайёрлаш мактаби'),
(7, 'img1643339036.jpg', 'Қўқон темир йўл транспорти  коллежи тарихи', 'Туркистонни подшо Россияси забт этгандан кейин,  Ўрта Осиёни Россиянинг марказий районлари билан бевосита боғлайдиган темир йўллар қурилиб, ишга туширила бошланди. Аслида бу темир йўллар рус капитализмининг иқтисодий манфаатларини ва харбий стратегиясини кўзлаб қурилган эди. 1895 йил 25 майда Самарканддан Қўқон орқали Андижонга темир йўл магистрали ўтказиш ҳақида хукумат фармони эълон қилинди. Самарқанд-Андижон темир йўл магистрали Қўқон-Горчакова станцияси машрути бўйича 1889 йилда битказилди ва 1 майдан поездлар қатнови бошланди. 1910 йилда Қўқондан-Наманганга темир йўл қуриш учун акционерлар жамияти тузилди ва 1911 йил бахорида темир йўл қурилиши бошланиб, 1912 йилда ишга тушди. Асрлар давомида юк ва одам ташишда тижорат ишларида ', 'AAA'),
(8, 'img1643339065.jpg', 'Қўқон темир йўл транспорти  коллежи тарихи', 'Туркистонни подшо Россияси забт этгандан кейин,  Ўрта Осиёни Россиянинг марказий районлари билан бевосита боғлайдиган темир йўллар қурилиб, ишга туширила бошланди. Аслида бу темир йўллар рус капитализмининг иқтисодий манфаатларини ва харбий стратегиясини кўзлаб қурилган эди. 1895 йил 25 майда Самарканддан Қўқон орқали Андижонга темир йўл магистрали ўтказиш ҳақида хукумат фармони эълон қилинди. Самарқанд-Андижон темир йўл магистрали Қўқон-Горчакова станцияси машрути бўйича 1889 йилда битказилди ва 1 майдан поездлар қатнови бошланди. 1910 йилда Қўқондан-Наманганга темир йўл қуриш учун акционерлар жамияти тузилди ва 1911 йил бахорида темир йўл қурилиши бошланиб, 1912 йилда ишга тушди. Асрлар давомида юк ва одам ташишда тижорат ишларида ', 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `kitoblar`
--

CREATE TABLE `kitoblar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(200) NOT NULL,
  `nomi` varchar(70) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `rasmm` varchar(200) NOT NULL,
  `bolim` enum('filter-app','filter-card','filter-web','<?php echo $row->Bolim ?>') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitoblar`
--

INSERT INTO `kitoblar` (`id`, `rasm`, `nomi`, `Text`, `rasmm`, `bolim`) VALUES
(20, 'img1644860628.pdf', 'Kitoblar', '<p style=\"text-align:center\"><strong>Fizika</strong></p>', 'img1644860628.jpg', 'filter-app'),
(21, 'img1644860609.pdf', 'Kitoblar', 'Raqamlar bilan terish: Bu holatda kubik yuzasidagi 1-9gacha bo’lgan qovurg’alarni tartib bilan terib chiqish kerak bo’ladi. Faqatgina oxirgi qatorda birinchi navbatda 8 qovurg’a so’ngra 7-9 qovurg’alar joylanadi. (Eslatman raqamlar bilan terishda qovurg’a', 'img1644860609.jfif', 'filter-card');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1640623019),
('m130524_201442_init', 1640623023),
('m190124_110200_add_verification_token_column_to_user_table', 1640623023);

-- --------------------------------------------------------

--
-- Table structure for table `tuzilma`
--

CREATE TABLE `tuzilma` (
  `id` int(11) NOT NULL,
  `rasm` varchar(200) NOT NULL,
  `ism` varchar(255) NOT NULL,
  `familiya` varchar(255) NOT NULL,
  `mansab` varchar(255) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuzilma`
--

INSERT INTO `tuzilma` (`id`, `rasm`, `ism`, `familiya`, `mansab`, `telegram`, `instagram`, `facebook`, `tel`, `text`) VALUES
(9, 'tuzilma1644860912.jpg', 'Pistonchi', 'Palonchiyev', 'Raxbar', 'https://t.me/', 'https://instagram.com/', 'https://www.facebook.com/', '+998999990071', '<p>TEST</p>\r\n'),
(10, 'img1644157242.jpg', 'Pistonchi', 'Palonchiyev', 'Raxbar', 'https://t.me/', 'https://instagram.com/', 'https://www.facebook.com/', '99999999', 'TEST'),
(11, 'img1644157264.jpg', 'Pistonchi', 'Palonchiyev', 'Raxbar', 'https://t.me/', 'https://instagram.com/', 'https://www.facebook.com/', '99999999', 'TEST'),
(12, 'img1644157282.png', 'Pistonchi', 'Palonchiyev', 'Raxbar', 'https://t.me/', 'https://instagram.com/', 'https://www.facebook.com/', '99999999', 'TEST'),
(13, 'tuzilma1644166408.jpg', 'Pistonchi', 'Palonchiyev', 'Ishchi', 'https://t.me/', 'https://instagram.com/', 'https://www.facebook.com/', '99999999', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, possimus mollitia iste amet neque earum, provident ut temporibus dicta obcaecati quisquam cumque reprehenderit ea. Quisquam cupiditate optio quidem reprehenderit a?</p>\r\n'),
(14, 'tuzilma1644165852.jpg', 'Pistonchi', 'Palonchiyev', 'Raxbar', 'https://t.me/nurmuhammad0071', 'https://instagram.com', 'https://www.facebook.com/', '+998999990071', '<h1 style=\"text-align: center;\"><span style=\"font-size:72px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:#000080\"><s><u><em><strong><span style=\"background-color:#FFD700\">TEST</span></strong></em></u></s></span></span></span></h1>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(6, 'ns0071', 'NihFV3WitXlU7qmwhYyShk2lfet05bX7', '$2y$13$rz7blGFJcOd1SKD5LMevTe.j.5pERZnF8TMTl48llIEEZS4AtUqmm', NULL, 'nurmuhammadsultonovich571@gmail.com', 10, 1642965021, 1642965036, '-rghGeQIHMYFB-rGVxbjNq1cbdUBELHM_1642965021');

-- --------------------------------------------------------

--
-- Table structure for table `yangliklar`
--

CREATE TABLE `yangliklar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(200) NOT NULL,
  `nomi` varchar(70) NOT NULL,
  `text` varchar(200) NOT NULL,
  `qosimcha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yangliklar`
--

INSERT INTO `yangliklar` (`id`, `rasm`, `nomi`, `text`, `qosimcha`) VALUES
(2, 'img1644858741.jfif', 'Yangliklar', 'Мустақил, одил судлов деганда ҳали ҳамон кўпчилигимизнинг хаёлимизга суд ишларига кимларнингдир аралашиш-аралашмаслиги ёки қайсидир бир идораларнинг суд ва судьялар фаолиятига таъсир кўрсатиши ё кўрса', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a'),
(3, 'img1642616228.jpg', 'Yangliklar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a', ''),
(4, 'img1642621583.png', 'Yangliklar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a', ''),
(6, 'img1642964722.jpg', 'Yangliklar', 'A', 'A'),
(7, 'img1643308277.jpg', 'Yangliklar', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a');

-- --------------------------------------------------------

--
-- Table structure for table `yangliklarv`
--

CREATE TABLE `yangliklarv` (
  `id` int(11) NOT NULL,
  `tube_link` varchar(1200) NOT NULL,
  `nomi` varchar(255) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `qoshimcha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yangliklarv`
--

INSERT INTO `yangliklarv` (`id`, `tube_link`, `nomi`, `Text`, `qoshimcha`) VALUES
(1, '<iframe width=\"286\" height=\"200\" src=\"https://www.youtube.com/embed/eBbrEQw7kcg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ' Lorem ipsum dolor sit amet', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v'),
(2, '<iframe width=\"286\" height=\"200\" src=\"https://www.youtube.com/embed/nUUsUAPEjFc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ' Lorem ipsum dolor sit amet', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v'),
(3, '<iframe width=\"286\" height=\"200\" src=\"https://www.youtube.com/embed/WVirG7HbWNg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ' Lorem ipsum dolor sit amet', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v'),
(4, '<iframe width=\"286\" height=\"200\" src=\"https://www.youtube.com/embed/WVirG7HbWNg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ' Lorem ipsum dolor sit amet', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v'),
(5, '<iframe width=\"286\" height=\"200\" src=\"https://www.youtube.com/embed/lrDqe1l-H5M\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', ' Lorem ipsum dolor sit amet', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto aspernatur distinctio fugit inventore, ipsam laborum mollitia natus necessitatibus placeat provident quaerat qui repellat repudiandae ullam veritatis v');

-- --------------------------------------------------------

--
-- Table structure for table `yoshlar`
--

CREATE TABLE `yoshlar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(200) NOT NULL,
  `nomi` varchar(200) NOT NULL,
  `Text` text NOT NULL,
  `qoshimcha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yoshlar`
--

INSERT INTO `yoshlar` (`id`, `rasm`, `nomi`, `Text`, `qoshimcha`) VALUES
(2, 'img1644860927.jpg', 'Yoshlar ittifoqi', 'Maqsad va vazifalar\r\n\r\nO‘zbekiston yoshlar ittifoqi jismonan sog‘lom, ma’nan yetuk va intellektual rivojlangan, mustaqil fikrlaydigan yosh avlodni shakllantirish, yoshlarni tashqi tahdidlar va “ommaviy madaniyat”ning zararli ta’siridan muhofaza qilish, yoshlarning huquq va qonuniy manfaatlarini himoya qilishga har tomonlama ko‘maklashish va shart-sharoitlarni yaratish maqsadida jismoniy shaxslar tomonidan ittifoq tashkiliy-huquqiy shaklida tuzilgan, O‘zbekiston yoshlarini birlashtiruvchi nodavlat notijorat tashkilotidir.\r\n\r\nIttifoqning asosiy maqsadi yoshlarni mamlakatda amalga oshirilayotgan demokratik, siyosiy va iqtisodiy islohotlarni yanada chuqurlashtirish, jamiyatda tinchlik va hamjihatlikni mustahkamlash, O‘zbekistonni jahonning rivojlangan mamlakatlari qatoriga kirishi jarayonlariga jalb qilish hamda yosh avlodning huquqlari, erkinliklari va qonuniy manfaatlarini samarali himoya qilishni ta’minlash, yigit-qizlarning ma’naviy va kasbiy saviyasini yuksaltirish, ularning intellektual va ijodiy salohiyatini ro‘yobga chiqarishga ko‘maklashishdan iborat.\r\n\r\nIttifoqning asosiy vazifalari quyidagilardan iborat:\r\n\r\nbarkamol, mustaqil fikrlaydigan, o‘zining hayotiy pozitsiyasi va qat’iy e’tiqodiga ega, jamiyat hayotida munosib o‘rin egallash, mamlakatni isloh qilish, yangilash jarayonlarida hal qiluvchi kuch va tayanch bo‘lishga qodir yoshlarni shakllantirish, ularning siyosiy madaniyati, huquqiy savodxonligi va huquqiy ongini yuksaltirish;\r\nyoshlarni, xususan uyushmagan yoshlarni ma’naviy-axloqiy jihatdan va harbiy vatanparvarlik ruhida tarbiyalash, ularda tarixiy xotira, milliy g‘urur va o‘zlikni anglash, ro‘y berayotgan voqealarga daxldorlik, milliy va umuminsoniy qadriyatlarga hurmat tuyg‘ularini shakllantirish;\r\nyoshlarning huquq va qonuniy manfaatlarini himoya qilish, ularning zamonaviy kasblarni egallashga bo‘lgan intilishini qo‘llab-quvvatlash, tadbirkorlik faoliyatiga jalb qilish;\r\niste’dodli yoshlarni qo‘llab-quvvatlash, ular o‘z ijodiy va intellektual salohiyatini ro‘yobga chiqarishlari uchun shart-sharoitlar yaratish hamda ilmiy faoliyatga jalb qilish;\r\nyoshlar, xususan uyushmagan yoshlar o‘rtasida sog‘lom turmush tarzi, ekologik madaniyatni shakllantirish, ularni jismoniy tarbiya va sport bilan muntazam shug‘ullanishga keng jalb qilish;\r\nyoshlarni, xususan uyushmagan yoshlarni diniy-ekstremistik va boshqa buzg‘unchi tashkilotlar ta’siridan, chetdan “ommaviy madaniyat” niqobi ostida kirib kelayotgan salbiy ta’sir va tahdidlardan asrash, yoshlar o‘rtasida huquqbuzarlik va jinoyatchilikni profilaktika qilish va oldini olishga ko‘maklashish va boshqalar.', 'SALOM'),
(3, 'img1642994658.jpg', 'Yoshlar ittifoqi', 'TT', 'AA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_site`
--
ALTER TABLE `admin_site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boglanish`
--
ALTER TABLE `boglanish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bolim`
--
ALTER TABLE `bolim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haqida`
--
ALTER TABLE `haqida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitoblar`
--
ALTER TABLE `kitoblar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tuzilma`
--
ALTER TABLE `tuzilma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `yangliklar`
--
ALTER TABLE `yangliklar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yangliklarv`
--
ALTER TABLE `yangliklarv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yoshlar`
--
ALTER TABLE `yoshlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_site`
--
ALTER TABLE `admin_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boglanish`
--
ALTER TABLE `boglanish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bolim`
--
ALTER TABLE `bolim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `haqida`
--
ALTER TABLE `haqida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kitoblar`
--
ALTER TABLE `kitoblar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tuzilma`
--
ALTER TABLE `tuzilma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `yangliklar`
--
ALTER TABLE `yangliklar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `yangliklarv`
--
ALTER TABLE `yangliklarv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yoshlar`
--
ALTER TABLE `yoshlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
