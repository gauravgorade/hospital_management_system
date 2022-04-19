-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 02:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaju_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `profile` text NOT NULL,
  `email` varchar(1000) NOT NULL,
  `psw` longtext NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `admin_type` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `forget_psw` varchar(100) DEFAULT NULL,
  `admin_role` varchar(50) DEFAULT NULL,
  `admin_role_default` varchar(50) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `name`, `lname`, `profile`, `email`, `psw`, `mobile`, `admin_type`, `user_status`, `forget_psw`, `admin_role`, `admin_role_default`, `bio`) VALUES
(4, 'CRELITE', 'TECHNOLOGIES', '1632214712-crelite_logo.png', 'crelitetech@gmail.com', 'MWJheGE0NU5vMlVnUDc0eFJCYWFydz09', '8308303340', 1, 1, NULL, '1,2', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n'),
(8, 'JAMBURE DENTAL', 'CLINIC', '1632391217-Dummy-logo-orange-1.png', 'jamburedental@gmail.com', 'MWJheGE0NU5vMlVnUDc0eFJCYWFydz09', '7709318905', 1, 1, NULL, '1,2', '1', NULL),
(10, 'WD Grup', 'Crelite', '1630735358-1605165347-oie_RX7dSmFr5uog.jpg', 'crelite@gmail.com', 'NnI0bys0RHo0OW5VaEhwcitVODdBZz09', '7777777777', 2, 1, NULL, NULL, NULL, NULL),
(11, 'vipin', 'Gangawane', '1630737120-1605167591-oie_oeKmP8eNfsUg.jpg', 'vipin@gmail.com', 'NnI0bys0RHo0OW5VaEhwcitVODdBZz09', '8444444444', 2, 1, NULL, '1,2', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `appy_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `resume_path` text NOT NULL,
  `bio` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_camment`
--

CREATE TABLE `blog_camment` (
  `cmt_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `message` text NOT NULL,
  `public_ip` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_camment`
--

INSERT INTO `blog_camment` (`cmt_id`, `blog_id`, `name`, `email`, `mobile`, `message`, `public_ip`, `date`, `time`, `status`) VALUES
(1, 6, 'sdfsdf fsdf', 'sdf@gmail.com', '846555555555555', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', '::1', '2021-09-18', '02:57:00', 1),
(2, 6, 'Roboto Alex', 'sd@gmail.com', '84444444', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo.\r\n', '::1', '2021-09-18', '02:57:00', 1),
(4, 2, 'vsfs sdfdf', 'sf@gmail.com', '8444444444444', 'hllo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', '::1', '2021-09-18', '03:15:00', 0),
(5, 2, 'Vipin ', 'vipin@gmail.com', '844444444444', '1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid', '::1', '2021-09-18', '03:17:00', 1),
(6, 2, 'SDFKF@GMAIL.COM', 'SDFSDF@GMAIL.COM', 'XZ SDFDF', ' DFSDDF DFD XDCVCV DFD  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', '::1', '2021-09-18', '05:57:00', 0),
(7, 3, 'sff', 'vipin@gmail.com', '84444444444', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', '::1', '2021-09-18', '06:16:00', 0),
(9, 3, 'Andrue', 'andrue@gmail.com', '899999999', 'If you look back, you will notice that your past is there; everything you have ever done or experienced is behind you. Become aware of the temperature, the sights, the sounds and enjoy wa lking along the path of your life. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n\r\n\r\n', '::1', '2021-09-23', '04:25:00', 1),
(10, 2, 'dfdf@gma.com', 'sdfsdf@gmail.com', '8777777777', 'hllo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid DFSDDF DFD XDCVCV DFD Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '::1', '2021-09-23', '06:55:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_camment2`
--

CREATE TABLE `blog_camment2` (
  `cmt_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `message` text NOT NULL,
  `public_ip` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_camment2`
--

INSERT INTO `blog_camment2` (`cmt_id`, `blog_id`, `name`, `email`, `mobile`, `message`, `public_ip`, `date`, `time`, `status`) VALUES
(10, 8, '565', 'vip@gmail.com', '8444444444', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\n', '::1', '2021-10-05', '01:07:00', 0),
(11, 10, 'abc', 'abc@gmail.com', '8777777777', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n', '::1', '2021-10-05', '01:09:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `b_cat_id` int(11) NOT NULL,
  `b_cat_name` varchar(100) NOT NULL,
  `b_cat_url` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `b_cat_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`b_cat_id`, `b_cat_name`, `b_cat_url`, `cat_desc`, `b_cat_status`) VALUES
(11, 'Skin Biopsy', 'skin-biopsy', 'Skin Biopsy', 1),
(12, 'Cosmetic Treatment', 'cosmetic-treatment', 'Cusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.', 1),
(13, 'Hair Disorder', 'hair-disorder', 'Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.', 1),
(14, 'Skin Disorder', 'skin-disorder', 'Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category2`
--

CREATE TABLE `blog_category2` (
  `b_cat_id` int(11) NOT NULL,
  `b_cat_name` varchar(100) NOT NULL,
  `b_cat_url` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `b_cat_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category2`
--

INSERT INTO `blog_category2` (`b_cat_id`, `b_cat_name`, `b_cat_url`, `cat_desc`, `b_cat_status`) VALUES
(16, 'Endovascular', 'endovascular', 'Endovascular  Endovascular', 1),
(17, 'Men\'s Diseases', 'men-s-diseases', 'Men\'s Diseases', 1),
(18, 'Lung Diseases', 'lung-diseases', 'Lung Diseases', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `b_tag_id` int(11) NOT NULL,
  `b_tag_name` varchar(100) NOT NULL,
  `b_tag_url` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `b_tag_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`b_tag_id`, `b_tag_name`, `b_tag_url`, `cat_desc`, `b_tag_status`) VALUES
(9, 'Skin Disorder', 'skin-disorder', '', 1),
(10, 'Cosmetic Treatment', 'cosmetic-treatment', '', 1),
(11, 'Disorder', 'disorder', 'Disorder', 1),
(12, 'jaju clinic', 'jaju-clinic', '', 1),
(23, 'dfsdf df dfdf', 'dfsdf-df-dfdf', 'dsfdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags2`
--

CREATE TABLE `blog_tags2` (
  `b_tag_id` int(11) NOT NULL,
  `b_tag_name` varchar(100) NOT NULL,
  `b_tag_url` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `b_tag_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags2`
--

INSERT INTO `blog_tags2` (`b_tag_id`, `b_tag_name`, `b_tag_url`, `cat_desc`, `b_tag_status`) VALUES
(14, 'Women\'s Diseases', 'womens-diseases', 'The cause of fibroids is not well understood. Risk factors include a family history of fibroids, obesity, or early onset of puberty. Symptoms include excessive menstrual bleeding, prolonged periods, and abdominal pain. In some cases, no symptoms appear. Treatment includes medication and fibroid removal.', 0),
(15, 'Mens Diseases', 'mens-diseases', 'Mens Diseases', 1),
(16, 'Lung Diseases', 'lung-diseases', 'Leg pain can be sharp, dull, numb, tingling, burning, radiating, or sore. It can be acute, that is, sudden and short-lived, or it can be chronic and persistent.', 1),
(17, 'Endovascular', 'endovascular', 'Endovascular  Endovascular', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tags_id` text NOT NULL,
  `blog_name` text NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc1` longtext NOT NULL,
  `log_desc2` longtext NOT NULL,
  `small_img` text NOT NULL,
  `long_img` text NOT NULL,
  `blog_url` text NOT NULL,
  `blog_date` date NOT NULL,
  `blog_status` int(11) NOT NULL DEFAULT 1,
  `featured` varchar(20) DEFAULT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`blog_id`, `category_id`, `tags_id`, `blog_name`, `short_desc`, `long_desc1`, `log_desc2`, `small_img`, `long_img`, `blog_url`, `blog_date`, `blog_status`, `featured`, `update_at`, `author_id`) VALUES
(2, 14, '12, 11, 10, 9', 'This time is used also to put things in their places.', 'Concentrate on your breathing, engage in tdfsdfhe moment and spend some time being still, quiet and drift inside of your own mind. fgfdgsdf sdfsdf dffd dfgfg dfd dfdsf', '&lt;h3&gt;&lt;strong&gt;&amp;nbsp;Lorem ipsum dolor sit amet,&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat ex at maximus luctus. Ut tellus quam, molestie sodales finibus eget, venenatis in urna. Donec in velit dignissim, rhoncus libero sed, ultrices diam. Nunc sit amet magna vitae metus mattis posuere. Nam quis dolor venenatis, pulvinar ex eu, malesuada felis. Curabitur sit amet sapien malesuada, viverra justo et, scelerisque lorem. Nullam gravida eget erat sit amet feugiat. Integer vel malesuada dui. Aliquam erat volutpat.&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt with ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation a deef ullamco laboris nisi ut aliquip ex ea commodo consequat see you again tommorow.&lt;/p&gt;\r\n\r\n&lt;p&gt;-&lt;strong&gt; Rosalina Pong&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;fs sdff&quot; src=&quot;http://localhost/Jaju/uploads/536644983.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;The standard Lorem Ipsum passage, used since the 1500s&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&amp;quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;div&gt;\r\n&lt;p&gt;&lt;iframe frameborder=&quot;0&quot; scrolling=&quot;no&quot; src=&quot;https://www.youtube.com/embed/2lDKcqIJpU4&quot; style=&quot;height:450px;&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;Section 1.10.32 of &amp;quot;de Finibus Bonorum et Malorum&amp;quot;, written by Cicero in 45 BC&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&amp;quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&amp;quot;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;1914 translation by H. Rackham&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&amp;quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;Section 1.10.33 of &amp;quot;de Finibus Bonorum et Malorum&amp;quot;, written by Cicero in 45 BC&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&amp;quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;1914 translation by H. Rackham&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&amp;quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&amp;quot;&lt;/p&gt;\r\n', '', '1630914086-2ARGPG8.jpg', '1630914086-unnamed.gif', 'this-time-is-used-also-to-put-things-in-their-places', '2020-11-27', 1, 'on', '2021-09-18 12:32:39', 4),
(3, 14, '11, 10, 9', 'Strategies to market new-age businesses', 'If you look back, you will notice that your past is there; everything you have ever done or experienced is behind you. Become aware of the temperature, the sights, the sounds and enjoy wa lking along the path of your life.', '&lt;p&gt;&lt;a href=&quot;http://localhost/Jaju/source/2ARGPG8.jpg&quot;&gt;http://localhost/Jaju/source/2ARGPG8.jpg&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;http://localhost/Jaju/source/structure-of-the-medical-prescription-1-638.jpg&quot; alt=&quot;structure-of-the-medical-prescription-1-638&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;http://localhost/Jaju/source/unnamed.gif&quot; alt=&quot;unnamed&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;iframe title=&quot;YouTube video player&quot; src=&quot;//www.youtube.com/embed/YuFYdWTpogQ&quot; width=&quot;100%&quot; height=&quot;100%&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;allowfullscreen&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;', '', '1631528355-2.jpg', '1631528355-3.jpg', 'strategies-to-market-new-age-businesses', '2020-11-27', 1, NULL, '2021-09-18 12:32:42', 4),
(4, 13, '12, 11, 10, 9', 'First bolg skeen', 'First bolg skeen First bolg skeen First bolg skeen df dfdf First bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeen', '&lt;p&gt;First bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeenFirst bolg skeen&lt;/p&gt;', '', '1631603210-bank.jpg', '1631180842-3.jpg', 'first-bolg-skeen', '2021-09-06', 1, NULL, '2021-10-05 13:02:13', 4),
(5, 14, '12, 11, 9', 'How  to Skin Disorder solves', 'Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.', '&lt;p&gt;Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&lt;img src=&quot;http://localhost/Jaju/source/unnamed.gif&quot; alt=&quot;&quot; width=&quot;600&quot; height=&quot;226&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;http://localhost/Jaju/source/Dummy-logo-orange-1.png&quot; alt=&quot;&quot; width=&quot;447&quot; height=&quot;100&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;http://localhost/Jaju/source/unnamed.gif&quot; alt=&quot;unnamed&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', '1631142025-breadcrumbs-image-2.jpg', '1632208329-19168737.jpg', 'how-to-skin-disorder-solves', '2021-09-09', 1, NULL, '2021-09-21 12:42:09', 4),
(6, 14, '12, 11, 10, 9', 'blog 2', 'Please support the project \r\nPayPal - The safer, easier way to pay online! \r\nResponsive FileManager 9.14.0 is a free open-source file manager and image manager made with the jQuery library, CSS3, PHP and HTML5 that offers a nice and elegant way to upload and insert files, images and videos.\r\nYou can use it as external plugin for TinyMCE version 4.x(and older), CKEditor and CLEditor, you can also use it as a stand-alone file manager to manage and select files.\r\nThe script automatically creates thumbnails of images for the preview list and can create also external thumbnails to use in your cms or site.\r\nIt can be configured for automatic resizing of uploaded images or to automatically limit the size.\r\nYou can personalize the configuration for each folder.\r\nYou can set a subfolder as the root and change the configuration for each user, page or FileManager call.\r\nIs compatible with multi-user mode and you can edit images with aviary editor, sorting files.', '&lt;p&gt;ddfdsdf fdsdfdfdf&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;blockquote&gt;\r\n&lt;p&gt;sdfsdf sdfsdf&lt;/p&gt;\r\n&lt;pre&gt;sdfsdfsdfsdf&lt;img src=&quot;http://localhost/Jaju/source/structure-of-the-medical-prescription-1-638.jpg&quot; alt=&quot;structure-of-the-medical-prescription-1-638&quot; /&gt;&amp;nbsp;&lt;/pre&gt;\r\n&lt;/blockquote&gt;', '', '1631710310-oie_4131620TEMOU6RZ_(1).png', '1631710310-19168737.jpg', 'blog-2', '2021-09-15', 1, 'on', '2021-09-18 12:32:49', 4);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl2`
--

CREATE TABLE `blog_tbl2` (
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tags_id` text NOT NULL,
  `blog_name` text NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc1` longtext NOT NULL,
  `log_desc2` longtext NOT NULL,
  `small_img` text NOT NULL,
  `long_img` text NOT NULL,
  `blog_url` text NOT NULL,
  `blog_date` date NOT NULL,
  `blog_status` int(11) NOT NULL DEFAULT 1,
  `featured` varchar(20) DEFAULT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tbl2`
--

INSERT INTO `blog_tbl2` (`blog_id`, `category_id`, `tags_id`, `blog_name`, `short_desc`, `long_desc1`, `log_desc2`, `small_img`, `long_img`, `blog_url`, `blog_date`, `blog_status`, `featured`, `update_at`, `author_id`) VALUES
(7, 17, '17, 16, 15, 14', 'Our Specialities Skin &amp; Endovascular Treatmentss', 'Jaju clinic is a unique and well-equipped Interventional Radiology clinic with Endovascular treatment options for all diseases that can be treated by an endovascular approach. Here patients are provided with unique needle-guided treatments for their illnesses without the requirement of undergoing any major surgery. Minimally invasive and Maximally effective treatment is the best way to treat patients.', '&lt;p&gt;Jaju clinic is a unique and well equipped Interventional Radiology clinic with Endovascular treatment options for all diseases that can be treated by endovascular approach. Here patients are provided with unique needle guided treatments for their illnesses without the requirement of undergoing any major surgery. Minimally invasive and Maximally effective treatment is the best way to treat patients.&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;\r\n&lt;div class=&quot;text&quot;&gt;All treatment is done through just small needle prick. No cuts or stitches required.&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;div class=&quot;text&quot;&gt;General anaesthesia is very rarely required. We believe in targeted anaesthesia as per requirement. Generally all procedures require local anaesthesia.&lt;/div&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;blockquote&gt;\r\n&lt;p&gt;Jaju clinic is a unique and well equipped Interventional Radiology clinic with Endovascular treatment options for all diseases that can be treated by endovascular approach. Here patients are provided with unique needle guided treatments for their illnesses without the requirement of undergoing any major surgery. Minimally invasive and Maximally effective treatment is the best way to treat patients&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n&lt;p&gt;Jaju clinic is a unique and well equipped Interventional Radiology clinic with Endovascular treatment options for all diseases that can be treated by endovascular approach. Here patients are provided with unique needle guided treatments for their illnesses without the requirement of undergoing any major surgery. Minimally invasive and Maximally effective treatment is the best way to treat patientst&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;http://localhost/Jaju/source/Dummy-logo-orange-1.png&quot; alt=&quot;&quot; width=&quot;447&quot; height=&quot;100&quot; /&gt;&lt;/p&gt;', '', '1632300085-unnamed.jpg', '1633416138-Endovascular-Aneurysm-Repair-Market.jpg', 'our-specialities-skin-endovascular-treatmentss', '2021-09-22', 0, NULL, '2021-10-05 12:30:53', 4),
(8, 16, '17, 16, 15', 'Where does it come from Endovascular', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.', '&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;h3&gt;1914 translation by H. Rackham&lt;/h3&gt;\r\n&lt;p&gt;&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;&lt;/p&gt;\r\n&lt;h3&gt;Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC&lt;/h3&gt;\r\n&lt;p&gt;&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;&lt;/p&gt;', '', '1632747343-gr1.jpg', '1633416108-fx1_lrg.jpg', 'where-does-it-come-from-endovascular', '2021-09-27', 1, NULL, '2021-10-05 12:11:48', 4),
(9, 16, '17, 16, 15, 14', 'What is Lorem Ipsum Endo?', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware', '&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;\r\n&lt;p&gt;Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware&lt;/p&gt;', '', '1633416077-gr1.jpg', '1632747495-Endovascular-Aneurysm-Repair-Market.jpg', 'what-is-lorem-ipsum-endo', '2021-09-27', 1, NULL, '2021-10-05 12:11:18', 4),
(10, 16, '17, 16, 15, 14', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;http://localhost/Jaju/source/unnamed.gif&quot; alt=&quot;unnamed&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;\r\n&lt;p&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/p&gt;', '', '1632747583-fx1_lrg.jpg', '1632747583-fx1_lrg1.jpg', 'where-can-i-get-some', '2021-09-27', 1, NULL, '2021-10-05 12:10:37', 4);

-- --------------------------------------------------------

--
-- Table structure for table `book_appointment`
--

CREATE TABLE `book_appointment` (
  `ap_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age` varchar(4) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `selectspeciality` varchar(20) DEFAULT NULL,
  `skin_hospitallocation` varchar(100) DEFAULT NULL,
  `skinTreatments` text NOT NULL,
  `skin_date` varchar(20) DEFAULT NULL,
  `skin_sloat` varchar(100) DEFAULT NULL,
  `skin_msg` text DEFAULT NULL,
  `endo_hospitallocation` varchar(20) DEFAULT NULL,
  `services` varchar(100) DEFAULT NULL,
  `endovascularTreatment` varchar(100) DEFAULT NULL,
  `endo_date` varchar(20) DEFAULT NULL,
  `endo_time` varchar(20) DEFAULT NULL,
  `endo_msg` text DEFAULT NULL,
  `ap_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_appointment`
--

INSERT INTO `book_appointment` (`ap_id`, `name`, `email`, `age`, `gender`, `mobile`, `address`, `city`, `selectspeciality`, `skin_hospitallocation`, `skinTreatments`, `skin_date`, `skin_sloat`, `skin_msg`, `endo_hospitallocation`, `services`, `endovascularTreatment`, `endo_date`, `endo_time`, `endo_msg`, `ap_date`) VALUES
(1, 'dsfs dfsdf', 'abc@gmail.com', '58', 'Male', '5655555555', 'sdf sfsd sdf', 'sdfsdf', 'Endovascular', 'Auranagabad', '', '10/20/2021', '', '', 'Auranagabad', 'Disease', 'Uterus AVM (Arterio-Venous Malformation)', '10-21-2021', '03:00pm to 09:00pm', 'dfdfsdfdsffd', '2021-10-06 14:35:00'),
(2, '565', 'vip@gmail.com', '55', 'Male', '8444444444', 'sfsdf', 's', 'Endovascular', '', '', '', '', '', 'Auranagabad', '', '', '10-07-2021', '10:00am to 01:00pm', 'dsf sdfsdf sdfsdf', '2021-10-06 14:35:37'),
(3, 'sdfsd', 'vip@gmail.com', '55', 'Male', '8444444444', 'sfsdf', 'abdd', 'Endovascular', '', '', '', '', '', 'Auranagabad', 'Disease', 'Deep Vein Thrombosis (DVT)', '10-07-2021', '10:00am to 01:00pm', 'sdfsd sdfdf dfdf', '2021-10-06 14:36:53'),
(4, 'dfsd', 'vip@gmail.com', '55', 'Male', '8444444444', 'sfsdf', 'abad', 'Endovascular', '', '', '', '', '', 'Majalgaon', 'Disease', 'Deep Vein Thrombosis (DVT)', '24-10-2021', '10:00am to 01:00pm', 'dfs sdfdsf dfdf', '2021-10-06 14:37:44'),
(5, 'dfdf', '', '55', 'Male', '8444444444', 'sfsdf', 'dfd', 'Endovascular', '', '', '', '', '', 'Auranagabad', 'Disease', 'Deep Vein Thrombosis (DVT)', '10-07-2021', '10:00am to 01:00pm', 'dfs sdfsdfsd dsfd', '2021-10-06 14:55:31'),
(6, 'skeeen', 'vip@gmail.com', '25', 'Male', '9999999998', 'sdfdfsdf', 'sdfsdfsdf', 'Skin Speciality', 'Auranagabad', 'Hair Problem', '10/14/2021', '10:00am to 01:00pm', 'sdf sdfsdfdf', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-06 14:56:49'),
(7, 'dfdf', 'vip@gmail.com', '4', 'Male', '8444444444', 'sfsdf', 'fdgfdg dfdsf', 'Skin Speciality', 'Auranagabad', 'Cosmetic Treatment', '10/11/2021', '10:00am to 01:00pm', 'df ddsf df sdfdf', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-09 14:05:14'),
(8, '565', 'vip@gmail.com', '55', '1', '8444444444', 'sfsdf', 'sssd', '', '', '', '', '', '', 'Auranagabad', 'Diseases', 'Deep Vein Thrombosis (DVT)', '10-11-2021', '10:00am to 01:00pm', 'sd sd adsadsadsd', '2021-10-09 18:08:04'),
(9, 'abcdj d', 'vip@gmail.com', '58', '', '9999999999', 'dfsdf', 'abad', 'Skin Speciality', 'Auranagabad', 'Cosmetic Treatment', '10/12/2021', '10:00am to 01:00pm', 'df sdf sdfdf', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-09 18:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `client_slider`
--

CREATE TABLE `client_slider` (
  `s_id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `email`, `mobile`, `subject`, `message`, `date`, `time`, `status`) VALUES
(1, 'dsff', 'abc@gmail.com', '8888888888', 'sfsh ffjdflsj fd', 'df sdfdadf df', '2021-09-23', '18:51:00', 1),
(2, 'dfdaf', 'vip@gmail.com', '8444444444', 'sdfh fdjsldfj', 'df dfsda fsdfsdfds dfdfds dfd', '2021-09-23', '19:00:45', 1),
(3, 'contact form', 'af@gmail.com', '8444444444', 'asdfj sdjfljdf', 'Get In Touch With Us', '0000-00-00', '00:00:00', 0),
(4, 'sdf', 'sdf@gmail.com', '8555555555', '8444444444444444', 'dfs ddsfsdff', '2021-10-06', '14:13:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `cli_id` int(11) NOT NULL,
  `pri` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gstnid` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `comp_name` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `curent_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `img_path` text NOT NULL,
  `ser_slug` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `g_ccategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `img_path`, `ser_slug`, `name`, `status`, `g_ccategory_id`) VALUES
(1, '1633777831-inner_b3.jpg', '', 'name', 1, 1),
(2, '1633777847-inner_b3.jpg', '', 'Skin', 1, 1),
(3, '1633777854-inner_b3.jpg', '', 'Skin', 1, 1),
(4, '1633777868-inner_b3.jpg', '', 'Skin', 1, 2),
(5, '1633777874-inner_b3.jpg', '', 'Resofus combines MR imaging and focused ultrasound into MR guided Focused Ultrasound technology', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery2`
--

CREATE TABLE `gallery2` (
  `g_id` int(11) NOT NULL,
  `img_path` text NOT NULL,
  `ser_slug` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `g_ccategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery2`
--

INSERT INTO `gallery2` (`g_id`, `img_path`, `ser_slug`, `name`, `status`, `g_ccategory_id`) VALUES
(1, '1630910236-oie_transparent_(2).png', '', 'Endovascular logo 22df', 1, 3),
(2, '1633931016-s3.jpg', '', 'Endovascular Patient', 1, 3),
(3, '1633931331-s2.png', '', 'Lages', 1, 8),
(4, '1633931353-download.jpg', '', '', 1, 8),
(5, '1633931393-2ARGPG8.jpg', '', 'a', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `gc_id` int(11) NOT NULL,
  `gc_name` varchar(200) NOT NULL,
  `gc_sulg` varchar(300) DEFAULT NULL,
  `gc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`gc_id`, `gc_name`, `gc_sulg`, `gc_status`) VALUES
(1, 'Skeen ', 'skeen ', 1),
(2, 'Indovasulr', 'indovasulr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category2`
--

CREATE TABLE `gallery_category2` (
  `gc_id` int(11) NOT NULL,
  `gc_name` varchar(200) NOT NULL,
  `gc_sulg` varchar(300) DEFAULT NULL,
  `gc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_category2`
--

INSERT INTO `gallery_category2` (`gc_id`, `gc_name`, `gc_sulg`, `gc_status`) VALUES
(3, 'Endovascular', 'endovascular', 1),
(8, 'Legs', 'legs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` double NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `service` text NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `ap_date` varchar(100) DEFAULT NULL,
  `ap_time` varchar(100) DEFAULT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`c_id`, `name`, `email`, `mobile`, `subject`, `message`, `status`, `date`, `time`, `service`, `city`, `ap_date`, `ap_time`, `age`) VALUES
(2, 'vipin', '', 8466641804, '', '', 0, '0000-00-00', '00:00:00', 'Endovascular', 'abad', NULL, NULL, ''),
(3, 's', '', 1444444444, '', '', 0, '0000-00-00', '00:00:00', 'Endovascular', 'dfd sdf', NULL, NULL, ''),
(4, 'dfsdf', '', 2222222222, '', '', 0, '0000-00-00', '00:00:00', 'Endovascular', 'sdfsdfdf', NULL, NULL, ''),
(5, 'dsfs', '', 8888888888, '', '', 0, '0000-00-00', '00:00:00', 'Endovascular', 's', NULL, NULL, ''),
(6, 'sfsd', '', 9666666666, '', '', 0, '2021-10-06', '14:24:30', 'Endovascular', 'afd dfsdf', NULL, NULL, ''),
(7, 'skeen', '', 9999999999, '', '', 0, '2021-10-09', '18:11:24', 'Skin Speciality', 'abad', NULL, NULL, ''),
(8, 'sss', '', 8695864564, '', '', 1, '2022-02-02', '18:24:56', 'Endovascular', 'frsf', NULL, NULL, ''),
(9, 'sss', '', 8695864564, '', '', 1, '2022-02-02', '18:24:57', 'Endovascular', 'frsf', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `maling_list`
--

CREATE TABLE `maling_list` (
  `m_id` int(11) NOT NULL,
  `mailing_for` varchar(100) NOT NULL,
  `admin_email_to` varchar(100) NOT NULL,
  `subject_admin` varchar(600) NOT NULL,
  `subject_user` varchar(100) NOT NULL,
  `headers_name` varchar(100) NOT NULL,
  `headers_email` varchar(200) NOT NULL,
  `header_no_reply` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `admin_heading` varchar(1000) NOT NULL,
  `user_heading` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maling_list`
--

INSERT INTO `maling_list` (`m_id`, `mailing_for`, `admin_email_to`, `subject_admin`, `subject_user`, `headers_name`, `headers_email`, `header_no_reply`, `status`, `admin_heading`, `user_heading`) VALUES
(1, 'Contactus', 'jamburedental@gmail.com', 'New Contact Request.', 'Your Response is recorded | JAMBURE DENTAL CLINIC', 'JAMBURE DENTAL', 'contact@jamburedental.com', 'donotreply@jamburedental.com', 1, 'Contact Request.', 'Thank you for Contact.'),
(4, 'reset_psw', 'jamburedental@gmail.com', 'Reset User JAMBURE DENTAL Password', 'Reset your  JAMBURE DENTAL password', 'JAMBURE DENTAL', 'password@jamburedental.com', 'donotreply@jamburedental.com', 1, 'JAMBURE DENTAL - Reset Admin Password  by-', 'Reset Admin Password  by-'),
(5, 'chage_psw_success', 'jamburedental@gmail.com', 'password has been changed.', 'Your JAMBURE DENTAL password has been changed successfully.', 'JAMBURE DENTAL', 'password@jamburedental.com', 'donotreply@jamburedental.com', 1, 'password has been changed.', 'Your JAMBURE DENTAL password has been changed successfully.'),
(6, 'Book an Appointment', 'jamburedental@gmail.com', 'New Appointment Booking Request', 'Your request saved in our records | JAMBURE DENTAL CLINIC', 'JAMBURE DENTAL', 'contact@jamburedental.com', 'donotreply@jamburedental.com', 1, 'Appointment Booking Request', 'Thank you for appointment booking.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `t_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `thought` text NOT NULL,
  `c_desc` text NOT NULL,
  `img_path` varchar(110) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`t_id`, `full_name`, `thought`, `c_desc`, `img_path`, `rating`, `gender`, `status`) VALUES
(12, 'Sunil Naik', 'Doctor jaju treated me with his new dressing system. I think this dressing system is very useful for Varicose ulcer. I got ok within a month.', 'Endovascular Patient', 'Male.jpg', '1', 'Male', 1),
(13, 'Santosh Agarkar', 'when consulting with jaju clinic Dr. Vivek Jaju sir &amp; they recommended to go for lasertreatment rather than Surgical treatment referd by other dr. Finally laser treatment done. Now no sign of Varicosevein again &amp; I am living normal life.', 'Endovascular Patient', 'Male.jpg', '5', 'Male', 1),
(14, 'Amar Mhaske', 'Thank you so very much for taking care of Brother,\r\n                                    He has mild diffuse narrowing on right hand for two years because of this he always\r\n                                    in pain and can’t do any work for a while, then my uncle recommends to doctor Jaju\r\n                                    sir now he is doing well and has no pain on hand.', 'Endovascular Patient\'s Brother', 'Male.jpg', '5', 'Male', 1),
(15, 'Bhagwan Deshmukh', '??? Dvt (deep ven thrombosis) ?? ???? ?????? ?????? ??? ??????????? ???... ?? ???????? ???? ?????? ?????????? ?????? ????? ??? ???? ????...?????? ??? ??? ????..\r\n                                ???? ??? ?? ???? ?????? ????? ?????? .. ????????? ???? ???...\r\n                                ???? ?? ????? ??% ??? ???? ???.', 'Endovascular Patient', 'Male.jpg', '5', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `page_name` varchar(1000) NOT NULL,
  `page_url` text NOT NULL,
  `seo_description` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `long_desc1` longtext NOT NULL,
  `long_desc2` longtext NOT NULL,
  `small_img` varchar(100) NOT NULL,
  `long_img` varchar(100) NOT NULL,
  `service_url` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `sub_heading` varchar(250) DEFAULT NULL,
  `paragraph1` varchar(300) DEFAULT NULL,
  `paragraph2` varchar(300) DEFAULT NULL,
  `button_link1` varchar(200) DEFAULT NULL,
  `button_link2` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `landing_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `img_path`, `heading`, `sub_heading`, `paragraph1`, `paragraph2`, `button_link1`, `button_link2`, `status`, `landing_page`) VALUES
(2, '1633774647-s1.png', '', '', '', '', '', '', 1, 0),
(3, '1633774651-s2.png', '', '', '', '', '', '', 1, 0),
(4, '1633774655-s3.jpg', '', '', '', '', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM'),
(31, 'TAMIL NADU'),
(32, 'TRIPURA'),
(33, 'UTTARAKHAND'),
(34, 'UTTAR PRADESH'),
(35, 'WEST BENGAL'),
(36, 'TELANGANA'),
(37, 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `subcribeus`
--

CREATE TABLE `subcribeus` (
  `sb_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `thought` text NOT NULL,
  `c_desc` text NOT NULL,
  `img_path` varchar(110) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`t_id`, `full_name`, `thought`, `c_desc`, `img_path`, `rating`, `gender`, `status`) VALUES
(1, 'Adam McWilliams', 'Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis\r\n                                        aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula.\r\n                                        Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique\r\n                                        senectus et netus et malesuada fames ac turpis egestas', 'CEO &amp; Founder', '1633776617-avatar.png', '5', 'Male', 1),
(2, 'Rose Dose', 'Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis\r\n                                        aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula.\r\n                                        Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique\r\n                                        senectus et netus et malesuada fames ac turpis egestas', 'Sale Executive', '1633776729-avatar.png', '5', 'Male', 1),
(3, 'Margie R. Robinson', 'Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis\r\n                                        aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula.\r\n                                        Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique\r\n                                        senectus et netus et malesuada fames ac turpis egestas.', 'Web Developer', '1633776744-avatar.png', '', 'Female', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial2`
--

CREATE TABLE `testimonial2` (
  `t_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `thought` text NOT NULL,
  `c_desc` text NOT NULL,
  `img_path` varchar(110) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial2`
--

INSERT INTO `testimonial2` (`t_id`, `full_name`, `thought`, `c_desc`, `img_path`, `rating`, `gender`, `status`) VALUES
(2, 'sdfsdf s', 'sdf sdf sdsdfsdf sddfdf', 'sdfsdf', 'Male.jpg', '5', 'Male', 1),
(4, 'Santosh Agarkar', 'when consulting with jaju clinic Dr. Vivek Jaju sir &amp; they\r\n                                    recommended to go for lasertreatment rather than Surgical treatment referd by other\r\n                                    dr. Finally laser treatment done. Now no sign of Varicosevein again &amp; I am living\r\n                                    normal life.', 'Endovascular Patient', 'Male.jpg', '', 'Male', 1),
(5, 'Amar Mhaske', 'Thank you so very much for taking care of Brother,\r\n                                    He has mild diffuse narrowing on right hand for two years because of this he always\r\n                                    in pain and can’t do any work for a while, then my uncle recommends to doctor Jaju\r\n                                    sir now he is doing well and has no pain on hand.', 'Endovascular Patient', 'Male.jpg', '', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `website_information`
--

CREATE TABLE `website_information` (
  `web_id` int(11) NOT NULL,
  `website_name` text NOT NULL,
  `website_short_name` text NOT NULL,
  `footer_about` text NOT NULL,
  `short_address` text NOT NULL,
  `address_line1` text NOT NULL,
  `address_line2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `pincode` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `fb_id` text NOT NULL,
  `twit_id` text NOT NULL,
  `insta_id` text NOT NULL,
  `youtub_id` text NOT NULL,
  `linkedin_id` text NOT NULL,
  `header_logo` text NOT NULL,
  `footer_logo` text NOT NULL,
  `q_termcondiation` text NOT NULL,
  `pan_no_t` varchar(100) NOT NULL,
  `gstin_t` varchar(100) NOT NULL,
  `mobile2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_information`
--

INSERT INTO `website_information` (`web_id`, `website_name`, `website_short_name`, `footer_about`, `short_address`, `address_line1`, `address_line2`, `city`, `state`, `country`, `pincode`, `email`, `mobile`, `fb_id`, `twit_id`, `insta_id`, `youtub_id`, `linkedin_id`, `header_logo`, `footer_logo`, `q_termcondiation`, `pan_no_t`, `gstin_t`, `mobile2`) VALUES
(1, 'JAMBURE DENTAL CLINIC', 'JAMBURE DENTAL', 'Braces, Jaw surgeries, Dental Implants, Dentist & dental surgery in Aurangabad, Maharashtra', 'Siddhi arcade, Darga Rd, Near HDFC Bank, Kalda Corner, Aurangabad.', 'Siddhi Arcade, Darga Rd', 'Near HDFC bank, Kalda Corner', 'Aurangabad', 'Maharashtra', 'India', '431005', 'jamburedental@gmail.com', '0240-2351040', 'https://www.facebook.com/jamburedental/', '', 'https://www.instagram.com/jamburedentalclinic/', '', '', '1606194776-final_logo.png', '1605870588-footer_logo.png', 'a', '', '', '7709318905');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`appy_id`);

--
-- Indexes for table `blog_camment`
--
ALTER TABLE `blog_camment`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `blog_camment2`
--
ALTER TABLE `blog_camment2`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`b_cat_id`);

--
-- Indexes for table `blog_category2`
--
ALTER TABLE `blog_category2`
  ADD PRIMARY KEY (`b_cat_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`b_tag_id`);

--
-- Indexes for table `blog_tags2`
--
ALTER TABLE `blog_tags2`
  ADD PRIMARY KEY (`b_tag_id`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_tbl2`
--
ALTER TABLE `blog_tbl2`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `book_appointment`
--
ALTER TABLE `book_appointment`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `client_slider`
--
ALTER TABLE `client_slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `gallery2`
--
ALTER TABLE `gallery2`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`gc_id`);

--
-- Indexes for table `gallery_category2`
--
ALTER TABLE `gallery_category2`
  ADD PRIMARY KEY (`gc_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `maling_list`
--
ALTER TABLE `maling_list`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribeus`
--
ALTER TABLE `subcribeus`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `testimonial2`
--
ALTER TABLE `testimonial2`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `website_information`
--
ALTER TABLE `website_information`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `appy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_camment`
--
ALTER TABLE `blog_camment`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_camment2`
--
ALTER TABLE `blog_camment2`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `b_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_category2`
--
ALTER TABLE `blog_category2`
  MODIFY `b_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `b_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blog_tags2`
--
ALTER TABLE `blog_tags2`
  MODIFY `b_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_tbl2`
--
ALTER TABLE `blog_tbl2`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_appointment`
--
ALTER TABLE `book_appointment`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_slider`
--
ALTER TABLE `client_slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery2`
--
ALTER TABLE `gallery2`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `gc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_category2`
--
ALTER TABLE `gallery_category2`
  MODIFY `gc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `maling_list`
--
ALTER TABLE `maling_list`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subcribeus`
--
ALTER TABLE `subcribeus`
  MODIFY `sb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial2`
--
ALTER TABLE `testimonial2`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `website_information`
--
ALTER TABLE `website_information`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
