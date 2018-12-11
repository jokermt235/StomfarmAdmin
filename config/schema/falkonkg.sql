-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 09:53 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-4+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falkonkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `next_id` int(11) DEFAULT NULL,
  `prev_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `next_id`, `prev_id`, `image`, `url`, `created`, `user_id`) VALUES
(13, 'Занимая высокопоставленные должности, Зилалиев регистрировал на родственников дорогие офисные помещения в центре столицы и имел незадекларированную большую сумму в банке.  ', 'екисты установили, что с 2011-го по 2017 год гражданин Дуйшенбек Зилалиев занимал различные руководящие должности в государственных структурах, в том числе председателя Фонда управления государственным имуществом, директора Государственного агентства по геологии и минеральным ресурсам. \r\n\r\nПрезидент Кыргызстана Сооронбай Жээнбеков. Архивное фото\r\n© ПРЕСС-СЛУЖБА ПРЕЗИДЕНТА КР / СУЛТАН ДОСАЛИЕВ\r\nГод президентства Жээнбекова — какие громкие дела были возбуждены\r\nС 2011-го по 2016 год он в официальном порядке представлял декларации о доходах, расходах, об имуществе и обязательствах, согласно которым за указанный период в совокупности его доход составил всего 2 миллиона 541 тысячу 527 сомов. За это же время доходы его супруги составили 408 тысяч сомов. Но следствие установило, что у бывшего вице-премьера имеются имущество и крупные денежные активы с неустановленным источником происхождения, которые в значительной степени превышают его официальные доходы. \r\nПо данным пресс-службы ГКНБ, Зилалиев, находясь на государственной службе, получил 889 тысяч 900 долларов, не вошедших в декларацию. Эти деньги он держал в коммерческом банке до сентября текущего года. \r\n\r\nКроме того, у Зилалиева обнаружены незадекларированные квартиры, дома и участки. В апреле прошлого года он оформил на одного из своих родственников два офисных помещения в центре Бишкека, их стоимость, согласно договорам купли-продажи, составляет 34 миллиона и 19 миллионов сомов. \r\n\r\nТакже Зилалиев, будучи директором Государственного агентства геологии, оформил на безработного родственника лицензии на золоторудные, известняковые и другие месторождения Кыргызстана.\r\n', NULL, NULL, '1544434428_4e3307fa1affc2ab961ac524770325c5.jpg', 'Zanimaya vysokopostavlennye dolzhnosti, Zilaliev registriroval na rodstvennikov dorogie ofisnye pomescheniya v centre stolicy i imel nezadeklarirovannuyu bol\'shuyu summu v banke.  -id-13', '2018-12-10 09:33:50', NULL),
(12, 'Адвокаты потерпевшей стороны требуют для обвиняемого пожизненного лишения свободы. ', 'БИШКЕК, 10 дек — Sputnik. Марса Бодошева, обвиняемого в убийстве Бурулай Турдали кызы, адвокаты потерпевшей стороны требуют приговорить к пожизненному лишению свободы.\r\n\r\nПроцесс проходит в здании Свердловского районного суда Бишкека. Суд перешел к прениям сторон.\r\n\r\nПамяти Бурулай — на стене общежития в Бишкеке появился ее потрет. Видео\r\n© SPUTNIK / ЭМИЛЬ САДЫРОВ , АРХИВНЫЕ КАДРЫ ПРЕДОСТАВЛЕНЫ МИРГУЛЬ ТУРДАЛИЕВОЙ\r\nПамяти Бурулай — на стене общежития в Бишкеке появился ее потрет. Видео\r\nГособвинитель требует назначить обвиняемому в похищении и убийстве Бодошеву 23 года лишения свободы с учетом времени, проведенного в СИЗО (день за два). Акмату Сеитову, который считается соучастником похищения, прокурор просил назначить 7 лет заключения с учетом срока в СИЗО.\r\nВ свою очередь адвокаты потерпевшей стороны требуют приговорить Бодошева к пожизненному лишению свободы.\r\n\r\nБурулай Турдали кызы похитили 27 мая этого года с целью вступления в брак против ее воли. Милиционеры остановили машину с девушкой на посту в Сосновке, Бурулай и двоих мужчин доставили в Жайыльский РОВД, где она была убита. В совершении преступления обвиняется похититель Бодошев.', NULL, NULL, '1544434292_5cece0b87d2e34243f4f37c57d1cee05.jpg', 'Advokaty poterpevshey storony trebuyut dlya obvinyaemogo pozhiznennogo lisheniya svobody. -id-12', '2018-12-10 09:31:38', NULL),
(15, 'РусГидро" требует от Кыргызстана выкупить его долю в ВНК ГЭС', 'БИШКЕК, 11 дек — Sputnik. Публичное акционерное общество "РусГидро" требует, чтобы ОАО "Электрические станции" выкупило все акции ЗАО "Верхне-Нарынские ГЭС", сообщается на сайте энергетической компании. \r\n\r\nРабочий на заводе. Архивное фото\r\n© SPUTNIK / КИРИЛЛ БРАГА\r\nСтройки века, оставшиеся на бумаге, — шесть мегапроектов в Кыргызстане\r\nНапомним, для строительства Верхне-Нарынского каскада гидроэлектростанций было создано данное ЗАО. "Русгидро" и "Электрические станции" имеют по 50 процентов акций. Однако проект так и не был реализован, и соглашение расторгли. Расходы российской компании составили 37 миллионов, чтобы изыскать их, "Русгидро" обратилось в международный арбитраж. "Электрические станции" являются государственной собственностью.', NULL, NULL, '1544520530_ee32ef6ae5af2943005af20f88e91e9f.jpg', 'RusGidro" trebuet ot Kyrgyzstana vykupit\' ego dolyu v VNK GES-id-15', '2018-12-11 09:28:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`) VALUES
(1, 'admin', '$2y$10$JyPHgguZ8J2xRdnqC8.c3Oy2aRPkgb/6my.3NBJRxdRga2pOgZ0ry', 'admin', '2018-12-11 07:57:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
