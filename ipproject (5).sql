-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 10:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `2017-2021`
--

CREATE TABLE `2017-2021` (
  `Roll_no` int(2) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2017-2021`
--

INSERT INTO `2017-2021` (`Roll_no`, `Name`) VALUES
(5, 'Mrunmayee Ganesh Apte');

-- --------------------------------------------------------

--
-- Table structure for table `2017-2021-itc501`
--

CREATE TABLE `2017-2021-itc501` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2017-2021-itc501`
--

INSERT INTO `2017-2021-itc501` (`student`, `CO1`, `CO2`, `CO3`, `CO4`, `fmark`) VALUES
('5 - Mrunmayee Ganesh Apte', 8, 0, 0, 0, 60);

-- --------------------------------------------------------

--
-- Table structure for table `2017-2021-semester6`
--

CREATE TABLE `2017-2021-semester6` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2017-2021-semester7`
--

CREATE TABLE `2017-2021-semester7` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2017-2021-semester8`
--

CREATE TABLE `2017-2021-semester8` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2017-2021-semister5`
--

CREATE TABLE `2017-2021-semister5` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2017-2021-semister5`
--

INSERT INTO `2017-2021-semister5` (`NO`, `crs_code`, `SUBJECT`, `category`) VALUES
(1, 'ITC501', 'Internet Programming', 'experiments');

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022`
--

CREATE TABLE `2018-2022` (
  `Roll_no` int(2) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022`
--

INSERT INTO `2018-2022` (`Roll_no`, `Name`) VALUES
(1, 'NIRMIT HITESH LAKHANI'),
(2, 'MAYANK SURESH AGRAWAL '),
(3, 'NISHMI NAGAPPA AMIN'),
(4, 'ADNAN WAHID ANSARI'),
(5, 'MRUNMAYEE GANESH APTE'),
(6, 'RUCHI PRAKASH BARI'),
(7, 'HIMANSHU PRAFULBHAI BHALALA'),
(8, 'PRASHANT PRAKASH BHATKAL'),
(9, 'SUCHIT ANIL BORGE'),
(10, 'ANKITKUMAR RAMBAHADUR CHAUDHARY'),
(11, 'ANJALI AJITKUMAR CHAURASIYA '),
(12, 'VIKAS CHANDUBHAI DABHI '),
(13, 'HARDIK GOVIND DANGIYA '),
(14, 'CHIRAG VIKRAM DARJI'),
(15, 'JAYESH MILIND DEORUKHKAR '),
(16, 'ABHISHEK SUBHASH DHULE'),
(17, 'VANASHREE SURESH GAIKWAD'),
(18, 'SAMRUDDHI SANTOSH GAMARE'),
(19, 'YASH RAJENDRA GHARAT'),
(20, 'SWETA DEVNATH GUPTA'),
(21, 'AAKANKSHA VIJAY JADHAV'),
(22, 'YASH HITESH JOBALIA'),
(23, 'ROMIN RAJESH KATRE'),
(24, 'ANKITA BALAJI KAWADE'),
(25, 'SHRUTIK RAKESH KHARKAR'),
(26, 'DHEUV RAMAKANT KHATOR'),
(27, 'HARSH BHUPENDRA KORE'),
(28, 'PARAS MAHESH LAD'),
(29, 'SOHAM BHARGAV MADHVANI'),
(30, 'KARAN KISAN MANE'),
(31, 'KRISHNA KIRIT MANIYAR'),
(32, 'ATUL BHIMRAO MANIYAR'),
(33, 'SHUBHAM JAGDISH MANIYAR'),
(34, 'NEEL HARESHBHAI MEHTA '),
(35, 'ABHINEET CHANDRAMOHAN MENON'),
(36, 'AAKANKSHA RAMESH MOHITE'),
(37, 'HRIDAYESH SANJAY MORE'),
(38, 'CHIRAG SANJAY NARKAR '),
(39, 'HARSH MAHESHKUMAR PANDYA '),
(40, 'PARAG CHANDRAKANT PATANKAR '),
(41, 'RIYA MAHESH PATIL'),
(42, 'PRANAY VASANT PATRE'),
(43, 'DHRU NARENDRA PRAJAPATI'),
(44, 'JIDNYASA DINESH RAUT'),
(45, 'ANIKET ALPESH SHAH'),
(46, 'RUSHANK GHANSHYAM SHETA '),
(47, 'ISHEET HARISH SHETTY'),
(48, 'PRITAM SANJAY SHINDE'),
(49, 'SEWWTY RAJKUNWAR SINGH'),
(50, 'PRATHAMESH SACHIN SURYAVANSHI '),
(51, 'ANVITA VISHU SUVARNA'),
(52, 'SHUBHAMKAR CHANDRAKANT THAVI'),
(53, 'DHARMESH SANJAY THORGAVANKAR'),
(54, 'CHINTAN YASHWANT TRIVEDI '),
(55, 'YUKTA PRASAD UPADHYE'),
(56, 'ASHWINI LAXMIKANT WALAVALKAR'),
(57, 'JYOTI DHARMENDRA YADAV'),
(58, 'TEJAL RAMDAS ILLE '),
(59, 'CHINMAY BHANUDAS INGALE'),
(60, 'GRANTHALI DINESH JADHAV'),
(61, 'RANVEER VIJAY KOTHAVLE'),
(62, 'MANSI SUNIL MALAP'),
(63, 'AKSHAY SNAJAY MORE'),
(64, 'SHIVANI SANTOSH SHIRKE'),
(65, 'HARDIK SAMBHAJI YEWALE');

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-itc305`
--

CREATE TABLE `2018-2022-itc305` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-itc401`
--

CREATE TABLE `2018-2022-itc401` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-itc501`
--

CREATE TABLE `2018-2022-itc501` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-itc501`
--

INSERT INTO `2018-2022-itc501` (`student`, `CO1`, `CO2`, `CO3`, `CO4`, `fmark`) VALUES
('1 - NIRMIT HITESH LAKHANI', 8, 8, 8, 8, 70),
('10 - ANKITKUMAR RAMBAHADUR CHAUDHARY', 8, 8, 0, 0, 0),
('14 - CHIRAG VIKRAM DARJI', 0, 0, 0, 0, 80),
('3 - NISHMI NAGAPPA AMIN', 8, 7, 9, 7, 68),
('5 - MRUNMAYEE GANESH APTE', 8, 8, 8, 8, 60),
('9 - SUCHIT ANIL BORGE', 0, 0, 0, 0, 60);

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-itc502`
--

CREATE TABLE `2018-2022-itc502` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-itc502`
--

INSERT INTO `2018-2022-itc502` (`student`, `CO1`, `CO2`, `CO3`, `CO4`, `fmark`) VALUES
('1 - NIRMIT HITESH LAKHANI', 8, 7, 5, 5, 55);

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-itl501`
--

CREATE TABLE `2018-2022-itl501` (
  `student` varchar(50) NOT NULL,
  `QUIZ1` int(1) NOT NULL,
  `QUIZ2` int(1) NOT NULL,
  `QUIZ3` int(1) NOT NULL,
  `QUIZ4` int(1) NOT NULL,
  `ASS1` int(2) NOT NULL,
  `ASS2` int(2) NOT NULL,
  `ASS3` int(2) NOT NULL,
  `ASS4` int(2) NOT NULL,
  `EX1` int(2) NOT NULL,
  `EX2` int(2) NOT NULL,
  `EX3` int(2) NOT NULL,
  `EX4` int(2) NOT NULL,
  `EX5` int(2) NOT NULL,
  `EX6` int(2) NOT NULL,
  `EX7` int(2) NOT NULL,
  `EX8` int(2) NOT NULL,
  `EX9` int(2) NOT NULL,
  `EX10` int(2) NOT NULL,
  `EX11` int(2) NOT NULL,
  `EX12` int(2) NOT NULL,
  `attendance` int(1) NOT NULL,
  `ORAL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-itl501`
--

INSERT INTO `2018-2022-itl501` (`student`, `QUIZ1`, `QUIZ2`, `QUIZ3`, `QUIZ4`, `ASS1`, `ASS2`, `ASS3`, `ASS4`, `EX1`, `EX2`, `EX3`, `EX4`, `EX5`, `EX6`, `EX7`, `EX8`, `EX9`, `EX10`, `EX11`, `EX12`, `attendance`, `ORAL`) VALUES
('1 - NIRMIT HITESH LAKHANI', 4, 2, 3, 3, 8, 7, 7, 7, 8, 7, 8, 7, 10, 9, 8, 9, 10, 9, 7, 7, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-itl505`
--

CREATE TABLE `2018-2022-itl505` (
  `student` varchar(50) NOT NULL,
  `QUIZ1` int(1) NOT NULL,
  `QUIZ2` int(1) NOT NULL,
  `QUIZ3` int(1) NOT NULL,
  `QUIZ4` int(1) NOT NULL,
  `ASS1` int(2) NOT NULL,
  `ASS2` int(2) NOT NULL,
  `ASS3` int(2) NOT NULL,
  `ASS4` int(2) NOT NULL,
  `minipro` int(2) NOT NULL,
  `attendance` int(1) NOT NULL,
  `ORAL` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-itl505`
--

INSERT INTO `2018-2022-itl505` (`student`, `QUIZ1`, `QUIZ2`, `QUIZ3`, `QUIZ4`, `ASS1`, `ASS2`, `ASS3`, `ASS4`, `minipro`, `attendance`, `ORAL`) VALUES
('1 - NIRMIT HITESH LAKHANI', 4, 4, 3, 3, 8, 7, 6, 7, 15, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-semester3`
--

CREATE TABLE `2018-2022-semester3` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(50) NOT NULL,
  `SUBJECT` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-semester3`
--

INSERT INTO `2018-2022-semester3` (`NO`, `crs_code`, `SUBJECT`, `category`) VALUES
(0, 'ITC305', 'Form', 'experiments');

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-semester4`
--

CREATE TABLE `2018-2022-semester4` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(50) NOT NULL,
  `SUBJECT` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-semester4`
--

INSERT INTO `2018-2022-semester4` (`NO`, `crs_code`, `SUBJECT`, `category`) VALUES
(0, 'ITC401', 'Operating System', 'experiments');

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-semester6`
--

CREATE TABLE `2018-2022-semester6` (
  `NO` int(255) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-semester7`
--

CREATE TABLE `2018-2022-semester7` (
  `NO` int(5) NOT NULL,
  `crs_code` varchar(80) NOT NULL,
  `SUBJECT` varchar(150) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-semester8`
--

CREATE TABLE `2018-2022-semester8` (
  `NO` int(5) NOT NULL,
  `crs_code` varchar(150) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2018-2022-semister5`
--

CREATE TABLE `2018-2022-semister5` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(20) NOT NULL,
  `SUBJECT` varchar(80) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2018-2022-semister5`
--

INSERT INTO `2018-2022-semister5` (`NO`, `crs_code`, `SUBJECT`, `category`) VALUES
(45, 'ITC501', 'Internet Programming', 'experiments'),
(46, 'ITC502', 'Advanced Data Management Technology', 'miniproject'),
(47, 'ITL501', 'Internet Programming Lab', 'experiments'),
(48, 'ITL505', 'IOT', 'miniproject');

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023`
--

CREATE TABLE `2019-2023` (
  `Roll_no` int(2) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2019-2023`
--

INSERT INTO `2019-2023` (`Roll_no`, `Name`) VALUES
(6, 'Ruchi Prakash Bari');

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023-itc501`
--

CREATE TABLE `2019-2023-itc501` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2019-2023-itc501`
--

INSERT INTO `2019-2023-itc501` (`student`, `CO1`, `CO2`, `CO3`, `CO4`, `fmark`) VALUES
('6 - Ruchi Prakash Bari', 8, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023-itc702`
--

CREATE TABLE `2019-2023-itc702` (
  `student` varchar(50) NOT NULL,
  `CO1` int(2) NOT NULL,
  `CO2` int(2) NOT NULL,
  `CO3` int(2) NOT NULL,
  `CO4` int(2) NOT NULL,
  `fmark` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023-semester6`
--

CREATE TABLE `2019-2023-semester6` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023-semester7`
--

CREATE TABLE `2019-2023-semester7` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2019-2023-semester7`
--

INSERT INTO `2019-2023-semester7` (`NO`, `crs_code`, `SUBJECT`, `category`) VALUES
(1, 'ITC702', 'Shantanu ', 'experiments');

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023-semester8`
--

CREATE TABLE `2019-2023-semester8` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2019-2023-semister5`
--

CREATE TABLE `2019-2023-semister5` (
  `NO` int(11) NOT NULL,
  `crs_code` varchar(50) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2019-2023-semister5`
--

INSERT INTO `2019-2023-semister5` (`NO`, `crs_code`, `SUBJECT`, `category`) VALUES
(1, 'ITC501', 'Internet Programming', 'experiments');

-- --------------------------------------------------------

--
-- Table structure for table `testtbl`
--

CREATE TABLE `testtbl` (
  `user_name` varchar(100) NOT NULL,
  `first_name` varchar(110) NOT NULL,
  `last_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtbl`
--

INSERT INTO `testtbl` (`user_name`, `first_name`, `last_name`) VALUES
('7', 'ash', '1234567890'),
('8', 'agnn', '12356789990'),
('abc', 'xyz', 'ad'),
('ioioio', 'pppppp', 'kkkkkk'),
('aa', 'bbbbb', 'cccccc'),
('??6L^|?4?K??k??0?8??!?x|?!?\0\0\0??\0PK\0\0\0\0\0!\0?;?`\0\0n\0\0\0\0\0xl/workbook.xml?RAn?0?W?', '?K?C ?????T', ''),
('g7??l???w?J???]O??', 'W?Z?o?N\Z???(?ta????~n^f?8???h??	]??w???×1??e???YD?+*???4?????ck??k', 'p?*\0_????4???tPX??h???<???A?A????J6???R*??4o?F?GE?????Ad4??t?g`??'),
('?c?xL??H?????]?*$A?>?????J%????a??<!1?M????WT??U??f%?4?P?# {{2?>ACM??????J????&M?;??4B?e?	', '', ''),
('&?^??????', '', ''),
('[A+M????[??XK\Z?52????\Z?`?%p???????????7?!??????&aQ}?6HH;8????`??i??I[-?/?????0???', '?>?????e???E\Z;??ck;?????)', ''),
('C?? cc???f??}p?|6?1%M0??*????<??????\0\0\0??\0PK\0\0\0\0\0!\0?o?~\0\0.\r\0\0#\0\0\0xl/worksheets/_rels/sh', '', ''),
('?y????cB?Y??/N)???', '', ''),
('???4?v??&', '', ''),
('T?A?8?????=Ï1?$;??q\Z?1q?|0?Bg??C???+?', '?+4?O??S³?vS?f?@??t???V9|? ???sP1???$q??nPMk?X???v?XA??0?g?@?	?8p?', ''),
('?????E6???????(??^??rT?.??? ?a?¸?z??{?5??^xFlx??????d???????', '??b?Q?*?????zxj|99????8N>?)?I??R???($l?-??q2P?Ij61[\rb?6?5????G?_d?ki>??S:?mz?g??n?a?z?@?P?4?f;4?V??', '^y?e?L???T7??l?D&????????i?æ?(U????#'),
('r???\"?u??(?*?p$$?? Lvt??:en?!Ò???T??^??M?4I??*\rUY?????????)U????.???q\Zx????TI???6??]o?a??P', '', ''),
('???RW?9??0dZ????Hm?HH?-?*?`??`??????Fw~?u?H??t3??#D?[??3??]m????O??T{H??F+??N?B?w^?? R??', '', ''),
('??G?.J)J?X???`)]?+???]?U?P?tQ[??_?? ??l??#??????n?', '', ''),
('Nl?@x??FIC2?f?#??????????6?{?m??U+<??w???m??z??]$\rV???Z0<??zk??#8?S?\r?nhf???(?=(-?????p????S', '', ''),
('???2]3?6??3\0??~!(?o?-?N?}qs?\"???ff?;??~???????V???K? b?__?I??', '', ''),
('1??\"?`c?¦????_\"C2?4>(?P??j?b?`?Q5)??58a9?R?5?m??XU??M?o[$gy?S? ?P?7??bH????2????????j\Z?', '', ''),
('?0E??w??S]?$]<? ??	$??	??7n?|x|x?????zQ?X??qA??F~\Z???3(i?W?', '', ''),
('??	?v???%?Yu????vA(;?F?G??????Ur?????q??`?W??2?????K?\Z?#?\0\0??\0PK-\0\0\0\0\0\0!\0???w?\0\0?', '', ''),
('mrun', 'ganesh', 'apte'),
('ruchi', 'prakash', 'bari'),
('shantanu', 'ganesh', 'apte'),
('???????O	/?c)?w???b?\0\0??\0PK\0\0\0\0\0!\0?;?`\0\0n\0\0\0\0\0xl/workbook.xml?RAn?0?W?', '?K?C ?????T', ''),
('g7??l???w?J???]O??', 'W?Z?o?N\Z???(?ta????~n^f?8???h??	]??w???×1??e???YD?+*???4?????ck??k', 'p?*\0_????4???tPX??h???<???A?A????J6???R*??4o?F?GE?????Ad4??t?g`??'),
('?c?xL??H?????]?*$A?>?????J%????a??<!1?M????WT??U??f%?4?P?# {{2?>ACM??????J????&M?;??4B?e?	', '', ''),
('&?^??????', '', ''),
('[A+M????[??XK\Z?52????\Z?`?%p???????????7?!??????&aQ}?6HH;8????`??i??I[-?/?????0???', '?>?????e???E\Z;??ck;?????)', ''),
('C?? cc???f??}p?|6?1%M0??*????<??????\0\0\0??\0PK\0\0\0\0\0!\0??]G`\0\0u\0\0\0\0\0xl/worksheets/sheet2.x', '', ''),
('???RW?9??0dZ????Hm?HH?-?*?`??`??????Fw~?u?H??t3??#D?[??3??]m????O??T{H??F+??N?B?w^?? R??', '', ''),
('?(???>???&?f???L?x?t???$???TvV??????J?7|????#?g???\0\0??\0PK\0\0\0\0\0!\0??H?H\0\0?\0\0\r\0\0\0xl/styles', '', ''),
('1??\"?`c?¦????_\"C2?4>(?P??j?b?`?Q5)??58a9?R?5?m??XU??M?o[$gy?S? ?P?7??bH????2????????j\Z?', '', ''),
('\0\0xl/theme/theme1.xmlPK-\0\0\0\0\0\0!\0??]G`\0\0u\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0_\0\0xl/worksheets/sheet2.xmlPK-\0\0', '', ''),
('???????O	/?c)?w???b?\0\0??\0PK\0\0\0\0\0!\0?;?`\0\0n\0\0\0\0\0xl/workbook.xml?RAn?0?W?', '?K?C ?????T', ''),
('g7??l???w?J???]O??', 'W?Z?o?N\Z???(?ta????~n^f?8???h??	]??w???×1??e???YD?+*???4?????ck??k', 'p?*\0_????4???tPX??h???<???A?A????J6???R*??4o?F?GE?????Ad4??t?g`??'),
('?c?xL??H?????]?*$A?>?????J%????a??<!1?M????WT??U??f%?4?P?# {{2?>ACM??????J????&M?;??4B?e?	', '', ''),
('&?^??????', '', ''),
('[A+M????[??XK\Z?52????\Z?`?%p???????????7?!??????&aQ}?6HH;8????`??i??I[-?/?????0???', '?>?????e???E\Z;??ck;?????)', ''),
('C?? cc???f??}p?|6?1%M0??*????<??????\0\0\0??\0PK\0\0\0\0\0!\0??]G`\0\0u\0\0\0\0\0xl/worksheets/sheet2.x', '', ''),
('???RW?9??0dZ????Hm?HH?-?*?`??`??????Fw~?u?H??t3??#D?[??3??]m????O??T{H??F+??N?B?w^?? R??', '', ''),
('?0??????m??\"????b;??fR3S??[????-???8?f?', 'l?R??@7??i?????C\"??B??W?Y?%??????1z.?4_????9?M????#J??', '+} PM?H'),
('?	??v??3????????Kh??.???A??7\0\0\0??\0PK\0\0\0\0\0!\0??H?H\0\0?\0\0\r\0\0\0xl/styles.xml??M??0??????#?M?I', '', ''),
('1??\"?`c?¦????_\"C2?4>(?P??j?b?`?Q5)??58a9?R?5?m??XU??M?o[$gy?S? ?P?7??bH????2????????j\Z?', '', ''),
('\0\0xl/theme/theme1.xmlPK-\0\0\0\0\0\0!\0??]G`\0\0u\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0_\0\0xl/worksheets/sheet2.xmlPK-\0\0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2017-2021`
--
ALTER TABLE `2017-2021`
  ADD PRIMARY KEY (`Roll_no`);

--
-- Indexes for table `2017-2021-itc501`
--
ALTER TABLE `2017-2021-itc501`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2017-2021-semester6`
--
ALTER TABLE `2017-2021-semester6`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2017-2021-semester7`
--
ALTER TABLE `2017-2021-semester7`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2017-2021-semester8`
--
ALTER TABLE `2017-2021-semester8`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2017-2021-semister5`
--
ALTER TABLE `2017-2021-semister5`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2018-2022`
--
ALTER TABLE `2018-2022`
  ADD PRIMARY KEY (`Roll_no`);

--
-- Indexes for table `2018-2022-itc305`
--
ALTER TABLE `2018-2022-itc305`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2018-2022-itc401`
--
ALTER TABLE `2018-2022-itc401`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2018-2022-itc501`
--
ALTER TABLE `2018-2022-itc501`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2018-2022-itc502`
--
ALTER TABLE `2018-2022-itc502`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2018-2022-itl501`
--
ALTER TABLE `2018-2022-itl501`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2018-2022-itl505`
--
ALTER TABLE `2018-2022-itl505`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2018-2022-semester3`
--
ALTER TABLE `2018-2022-semester3`
  ADD PRIMARY KEY (`crs_code`);

--
-- Indexes for table `2018-2022-semester4`
--
ALTER TABLE `2018-2022-semester4`
  ADD PRIMARY KEY (`crs_code`);

--
-- Indexes for table `2018-2022-semester6`
--
ALTER TABLE `2018-2022-semester6`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2018-2022-semester7`
--
ALTER TABLE `2018-2022-semester7`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2018-2022-semester8`
--
ALTER TABLE `2018-2022-semester8`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2018-2022-semister5`
--
ALTER TABLE `2018-2022-semister5`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2019-2023`
--
ALTER TABLE `2019-2023`
  ADD PRIMARY KEY (`Roll_no`);

--
-- Indexes for table `2019-2023-itc501`
--
ALTER TABLE `2019-2023-itc501`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2019-2023-itc702`
--
ALTER TABLE `2019-2023-itc702`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `2019-2023-semester6`
--
ALTER TABLE `2019-2023-semester6`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2019-2023-semester7`
--
ALTER TABLE `2019-2023-semester7`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2019-2023-semester8`
--
ALTER TABLE `2019-2023-semester8`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `2019-2023-semister5`
--
ALTER TABLE `2019-2023-semister5`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2017-2021-semester6`
--
ALTER TABLE `2017-2021-semester6`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2017-2021-semester7`
--
ALTER TABLE `2017-2021-semester7`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2017-2021-semester8`
--
ALTER TABLE `2017-2021-semester8`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2017-2021-semister5`
--
ALTER TABLE `2017-2021-semister5`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2018-2022-semester6`
--
ALTER TABLE `2018-2022-semester6`
  MODIFY `NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `2018-2022-semester7`
--
ALTER TABLE `2018-2022-semester7`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `2018-2022-semester8`
--
ALTER TABLE `2018-2022-semester8`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `2018-2022-semister5`
--
ALTER TABLE `2018-2022-semister5`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `2019-2023-semester6`
--
ALTER TABLE `2019-2023-semester6`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-2023-semester7`
--
ALTER TABLE `2019-2023-semester7`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2019-2023-semester8`
--
ALTER TABLE `2019-2023-semester8`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-2023-semister5`
--
ALTER TABLE `2019-2023-semister5`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
