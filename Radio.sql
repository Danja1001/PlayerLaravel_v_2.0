-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2018 г., 19:45
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Radio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Countries`
--

CREATE TABLE `Countries` (
  `Id` int(11) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Continent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Countries`
--

INSERT INTO `Countries` (`Id`, `Country`, `Class`, `Continent`) VALUES
(1, 'Algeria', 'flag flag-dz', 'Africa'),
(2, 'Angola', 'flag flag-ao', 'Africa'),
(3, 'Anguilla', 'flag flag-ai', 'America'),
(4, 'Antigua and Barbuda', 'flag flag-ag', 'America'),
(5, 'Argentina', 'flar flag-ar', 'America'),
(6, 'Aruba', 'flag flag-aw', 'America'),
(7, 'Bahamas', 'flag flag-bs', 'America'),
(8, 'Barbados', 'flag flag-bb', 'America'),
(9, 'Belize', 'flag flag-bz', 'America'),
(10, 'Bermuda', 'flag flag-bm', 'America'),
(11, 'Brazil', 'flag flag-br', 'America'),
(12, 'Canada', 'flag flag-ca', 'America'),
(13, 'Chile', 'flag flag-cl', 'America'),
(14, 'Colombia', 'flag flag-co', 'America'),
(15, 'Costa Rica', 'flag flag-co', 'America'),
(16, 'Cuba', 'flag flag-cu', 'America'),
(17, 'Curacao', 'flag flag-cw', 'America'),
(18, 'Dominica', 'flag flag-dm', 'America'),
(19, 'Dominican Republic', 'flag flag-do', 'America'),
(20, 'Ecuador', 'flag flag ec', 'America'),
(21, 'El Salvador', 'flag flag-sv', 'America'),
(22, 'Falkland Islands', 'flag flag-fk', 'America'),
(23, 'French Guiana', 'flag flag-gf', 'America'),
(24, 'Greenland', 'flag flag-gl', 'America'),
(25, 'Grenada', 'flag flag-gd', 'America'),
(26, 'Guadeloupe', 'flag flag-gp', 'America'),
(27, 'Guatemala', 'flag flag-gt', 'America'),
(28, 'Guyana', 'flag flag-gy', 'America'),
(29, 'Haiti', 'flag flag-ht', 'America'),
(30, 'Honduras', 'flag flag-hn', 'America'),
(31, 'Jamaica', 'flag flag-jm', 'America'),
(32, 'Martinique', 'flag flag-mq', 'America'),
(33, 'Mexico', 'flag flag-mx', 'America'),
(34, 'Montserrat', 'flag flag-ms', 'America'),
(35, 'Nicaragua', 'flag glag-ni', 'America'),
(36, 'Netherlands Antilles', 'flag flag-an', 'America'),
(37, 'Panama', 'flag flag-pa', 'America'),
(38, 'Paraguay', 'flag flag-py', 'America'),
(39, 'Peru', 'flag flag-pe', 'America'),
(40, 'Puerto Rico', 'flag flag-pr', 'America'),
(41, 'Saint Kitts and Nevis', 'flag flag-kn', 'America'),
(42, 'Saint Lucia', 'flag flag-lc', 'America'),
(43, 'Saint Pierre and Miquelon', 'flag flag-pm', 'America'),
(44, 'Saint Vincent and the Grenadines', 'flag flag-vc', 'America'),
(45, 'Sint Maarten', 'flag flag-sx', 'America'),
(46, 'Suriname', 'flag flag-sr', 'America'),
(47, 'Trinidad and Tobago', 'flag flag-tc', 'America'),
(48, 'Turks and Caicos', 'flag flag-tc', 'America'),
(49, 'United States', 'flag flag-us', 'America'),
(50, 'Uruguay', 'flag flag-uy', 'America'),
(51, 'Venezuela Bolivarian Republic of', 'flag flag-ve', 'America'),
(52, 'Virgin Islands, British', 'flag flag-vg', 'America'),
(53, 'Virgin Islands, U.S.', 'flag flag-vi', 'America'),
(54, 'Afghanistan', 'flag flag-af', 'Asia'),
(55, 'Armenia', 'flag flag-am', 'Asia'),
(56, 'Azerbaijan', 'flag flag-az', 'Asia'),
(57, 'Bahrain', 'flag flag-bh', 'Asia'),
(58, 'Bangladesh', 'flag flag-bd', 'Asia'),
(59, 'Bhutan', 'flag flag-bt', 'Asia'),
(60, 'Brunei Darussalam', 'flag flag-bn', 'Asia'),
(61, 'Cambodia', 'flag flag-kh', 'Asia'),
(62, 'China', 'flag flag-cn', 'Asia'),
(63, 'Cyprus', 'flag flag-cy', 'Asia'),
(64, 'Georgia', 'flag flag-ge', 'Asia'),
(65, 'Hong Kong', 'flag flag-hk', 'Asia'),
(66, 'India', 'flag flag-in', 'Asia'),
(67, 'Indonesia', 'flag flag-id', 'Asia'),
(68, 'Iran, Islamic Republic of', 'flag flag-ir', 'Asia'),
(69, 'Iraq', 'flag flag-iq', 'Asia'),
(70, 'Israel', 'flag flag-il', 'Asia'),
(71, 'Japan', 'flag flag-jp', 'Asia'),
(72, 'Jordan', 'flag flag-jo', 'Asia'),
(73, 'Kazakhstan', 'flag flag-kz', 'Asia'),
(74, 'Korea', 'flag flag-kr', 'Asia'),
(75, 'Korea, Republic of', 'flag flag-kr', 'Asia'),
(76, 'Kuwait', 'flag flag-kw', 'Asia'),
(77, 'Kyrgyzstan', 'flag flag-kg', 'Asia'),
(78, 'Lao People', 'flag flag-la', 'Asia'),
(79, 'Lebanon', 'flag flag-lb', 'Asia'),
(80, 'Macao', 'flag flag-mo', 'Asia'),
(81, 'Malaysia', 'flag flag-my', 'Asia'),
(82, 'Maldives', 'flag flag-mv', 'Asia'),
(83, 'Mongolia', 'flag flag-mn', 'Asia'),
(84, 'Myanmar', 'flag flag-mm', 'Asia'),
(85, 'Nepal', 'flag flag-np', 'Asia'),
(86, 'Oman', 'flag flag-om', 'Asia'),
(87, 'Pakistan', 'flag flag-pk', 'Asia'),
(88, 'Palestinian Territory, Occupied', 'flag flag-ps', 'Asia'),
(89, 'Philippines', 'flag flag-ph', 'Asia'),
(90, 'Qatar', 'flag flag-qr', 'Asia'),
(91, 'Saudi Arabia', 'flag flag-sa', 'Asia'),
(92, 'Singapore', 'flag flag-sg', 'Asia'),
(93, 'Sri Lanka', 'flag flag-lk', 'Asia'),
(94, 'Syryan Arab Republic', 'flag flag-sy', 'Asia'),
(95, 'Taiwan', 'flag flag-tw', 'Asia'),
(96, 'Tajikistan', 'flag flag-tj', 'Asia'),
(97, 'Thailand', 'flag flag-th', 'Asia'),
(98, 'Timor-Leste', 'flag flag-tl', 'Asia'),
(99, 'Turkey', 'flag flag-tr', 'Asia'),
(100, 'Turkmenistan', 'flag flag-tm', 'Asia'),
(101, 'United Arab Emirates', 'flag flag-ae', 'Asia'),
(102, 'Uzbekistan', 'flag flag-uz', 'Asia'),
(103, 'Viet Nam', 'flag flag-vn', 'Asia'),
(104, 'Yemen', 'flag flag-ye', 'Asia'),
(105, 'American Samoa', 'flag flag-as', 'Australia si Oceania'),
(106, 'Australia', 'flag flag-au', 'Australia si Oceania'),
(107, 'Cook Islands', 'falg flag-ck', 'Australia si Oceania'),
(108, 'Fiji', 'flag flag-fi', 'Australia si Oceania'),
(109, 'French Polynesia', 'falg flag-pf', 'Australia si Oceania'),
(110, 'Guam', 'flag flag-gu', 'Australia si Oceania'),
(111, 'Kiribatu', 'flag flag-ki', 'Australia si Oceania'),
(112, 'Marshall Islands', 'flag flag-mh', 'Australia si Oceania'),
(113, 'Micronesia', 'flag flag-fm', 'Australia si Oceania'),
(114, 'Nauru', 'flag flag-nz', 'Australia si Oceania'),
(115, 'New Caledonia', 'flag flag-nc', 'Australia si Oceania'),
(116, 'New Zealand', 'flag flag-nz', 'Australia si Oceania'),
(117, 'Niue', 'flag flag-nu', 'Australia si Oceania'),
(118, 'Norfolk', 'flag flag-nf', 'Australia si Oceania'),
(119, 'Northern Mariana', 'flag flag-mp', 'Australia si Oceania'),
(120, 'Palau', 'flag flag-pw', 'Australia si Oceania'),
(121, 'Papua New Guinea', 'flag flag-pg', 'Australia si Oceania'),
(122, 'Pircairn', 'flag flag-pn', 'Australia si Oceania'),
(123, 'Samoa', 'flag flag-ws', 'Australia si Oceania'),
(124, 'Solomon Islands', 'flag flag-sb', 'Australia si Oceania'),
(125, 'Tokelau', 'flag flag-tk', 'Australia si Oceania'),
(126, 'Tonga', 'flag flag-to', 'Australia si Oceania'),
(127, 'Tuvalu', 'flag flag-tv', 'Australia si Oceania'),
(128, 'Vanuatu', 'flag flag-vu', 'Australia si Oceania'),
(129, 'Wallis And Futuna', 'flag flag-wf', 'Australia si Oceania'),
(130, 'Albania', 'flag flag-al', 'Europa'),
(131, 'Andorra', 'flag flag-ad', 'Europa'),
(132, 'Austria', 'flag flag-at', 'Europa'),
(133, 'Belarus', 'flag flag-by', 'Europa'),
(134, 'Belgium', 'flag flag-be', 'Europa'),
(135, 'Bulgaria', 'flag flag-bg', 'Europa'),
(136, 'Croatia', 'flag flag-hr', 'Europa'),
(137, 'Czech Republic', 'flag flag-cz', 'Europa'),
(138, 'Denmark', 'flag flag-dk', 'Europa'),
(139, 'Estonia', 'flag flag-ee', 'Europa'),
(140, 'Faroe Islands', 'flag flag-fo', 'Europa'),
(141, 'Finland', 'flag flag-fi', 'Europa'),
(142, 'France', 'flag flag-fr', 'Europa'),
(143, 'Germany', 'flag flag-de', 'Europa'),
(144, 'Gibraltar', 'flag flag-gi', 'Europa'),
(145, 'Greece', 'flag flag-gr', 'Europa'),
(146, 'Hungary', 'flag flag-hu', 'Europa'),
(147, 'Iceland', 'flag flag-ie', 'Europa'),
(148, 'Ireland', 'flag flag-ir', 'Europa'),
(149, 'Itali', 'flag flag-it', 'Europa'),
(150, 'Latvia', 'flag flag-lv', 'Europa'),
(151, 'Liechtenstein', 'flag flag-li', 'Europa'),
(152, 'Lithuania', 'flag flag-lt', 'Europa'),
(153, 'Luxembourg', 'flag flag-lu', 'Europa'),
(154, 'Malta', 'flag flag-ma', 'Europa'),
(155, 'Moldova', 'flag flag-md', 'Europa'),
(156, 'Monaco', 'flar flag-mc', 'Europa'),
(157, 'Montenegro', 'flag flag-me', 'Europa'),
(158, 'Norway', 'flag flag-no', 'Europa'),
(159, 'Netherlands', 'flag flag-nl', 'Europa'),
(160, 'Poland', 'flag flag-pl', 'Europa'),
(161, 'Portugal', 'flag flag-pt', 'Europa'),
(162, 'Romania', 'flag flag-ro', 'Europa'),
(163, 'Russia', 'flag flag-ru', 'Europa'),
(164, 'San Marino', 'flag flag-sm', 'Europa'),
(165, 'Serbia', 'flag flag-rs', 'Europa'),
(166, 'Slovakia', 'flag flag-sk', 'Europa'),
(167, 'Slovenia', 'flag flag-si', 'Europa'),
(168, 'Spain', 'flag flag-es', 'Europa'),
(169, 'Sweeden', 'flag flag-se', 'Europa'),
(170, 'Switzerland', 'flag flag-ch', 'Europa'),
(171, 'Ukraine', 'flag flag-ua', 'Europa'),
(172, 'United Kingdom', 'flag flag-gb', 'Europa'),
(173, 'Benin', 'flag flag-bj', 'Africa'),
(174, 'Botswana', 'flag flag-bw', 'Africa'),
(175, 'Burkina Faso', 'flag flag-bf', 'Africa'),
(176, 'Burundi', 'flag flag-bi', 'Africa'),
(177, 'Cameroon', 'flag flag-cm', 'Africa'),
(178, 'Cape Verde', 'flag flag-cv', 'Africa'),
(179, 'Central Africa', 'flag flag-cf', 'Africa'),
(180, 'Chad', 'flag flag-td', 'Africa'),
(181, 'Comoros', 'flag flag-km', 'Africa'),
(182, 'Congo', 'flag flag-cg', 'Africa'),
(183, 'Djibouti', 'flag flag-dj', 'Africa'),
(184, 'Egypt', 'flag flag-eg', 'Africa'),
(185, 'Eritrea', 'flag flag-er', 'Africa'),
(186, 'Ethiopia', 'flag flag-et', 'Africa'),
(187, 'Gabon', 'flag flag-ga', 'Africa'),
(188, 'Gambia', 'flag glaf-gm', 'Africa'),
(189, 'Ghana', 'flag flag-gh', 'Africa'),
(190, 'Guinea-Bissau', 'flag flag-gw', 'Africa'),
(191, 'Kenya', 'flag flag-ke', 'Africa'),
(192, 'Lesotho', 'flag flag-ls', 'Africa'),
(193, 'Liberia', 'flag flag-lr', 'Africa'),
(194, 'Libya', 'flag flag-ly', 'Africa'),
(195, 'Madagascar', 'flag flag-mg', 'Africa'),
(196, 'Malawi', 'flag flag-mw', 'Africa'),
(197, 'Mali', 'flag flag-ml', 'Africa'),
(198, 'Mauritania', 'flag flag-mr', 'Africa'),
(199, 'Mauritius', 'flag flag-mu', 'Africa'),
(200, 'Mayotte', 'flag flag-ma', 'Africa'),
(201, 'Morocco', 'flag flag-ma', 'Africa'),
(202, 'Mozambique', 'flag flag-mz', 'Africa'),
(203, 'Namibia', 'flag flag-na', 'Africa'),
(204, 'Niger', 'flag flag-ng', 'Africa'),
(205, 'Nigeria', 'flag flag-ng', 'Africa'),
(206, 'Rwanda', 'flag flag-rw', 'Africa'),
(207, 'Saint Helena', 'flag flag-sh', 'Africa'),
(208, 'Sao Tome and Principe', 'flag flag-st', 'Africa'),
(209, 'Senegal', 'flag flag-sn', 'Africa'),
(210, 'Seychelles', 'flag flag-sc', 'Africa'),
(211, 'Sierra Leone', 'flag flag-sl', 'Africa'),
(212, 'Somalia', 'flag flag-so', 'Africa'),
(213, 'South Africa', 'flag flag-za', 'Africa'),
(214, 'South Sudan', 'flag flag-ss', 'Africa'),
(215, 'Swaziland', 'flag flag-sz', 'Africa'),
(216, 'Tanzania', 'flag flag-tz', 'Africa'),
(217, 'Togo', 'flag flag-tg', 'Africa'),
(218, 'Tunisia', 'flag flag-tn', 'Africa'),
(219, 'Uganda', 'flag flag-ug', 'Africa'),
(220, 'Western Sahara', 'flag flag-eh', 'Africa'),
(221, 'Zambia', 'flag flag-zm', 'Africa'),
(222, 'Zimbabwe', 'flag flag-zw', 'Africa');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_28_152402_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Songs`
--

CREATE TABLE `Songs` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `song` varchar(500) NOT NULL,
  `category` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danja', 'danja@test.com', '$2y$10$ekgemWK.6TeIh/f.zM4gNuAIgHnu9hcI9Ql9QEmKUxmcQQllFl9p2', 'G63GsG6NqxtCo4OambTFiXk1NH0FhcmTLbrATqZ3oqRn1TPH1ufndO96Tvki', '2018-02-25 08:00:57', '2018-02-25 08:00:57');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Countries`
--
ALTER TABLE `Countries`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `Songs`
--
ALTER TABLE `Songs`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `Countries`
--
ALTER TABLE `Countries`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Songs`
--
ALTER TABLE `Songs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
