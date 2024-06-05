-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.byetcluster.com
-- Generation Time: Jun 26, 2023 at 11:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33290945_fileupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `ifiles`
--

CREATE TABLE `ifiles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `sub` varchar(255) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ifiles`
--

INSERT INTO `ifiles` (`id`, `name`, `location`, `sub`, `CreationDate`) VALUES
(1, 'Screenshot_2023-01-29-15-49-48-840_com.sharpened.androidfileviewer.jpg', 'ifiles/Screenshot_2023-01-29-15-49-48-840_com.sharpened.androidfileviewer.jpg', 'First Internal Exam Schedule (Ist sem)', '2023-01-27 08:30:45'),
(2, 'IMG-20230217-WA0000.jpg', 'ifiles/IMG-20230217-WA0000.jpg', 'Convocation 2022-2023 at 26 Feb', '2023-02-13 12:20:42'),
(3, 'IMG_20230226_121659.jpg', 'ifiles/IMG_20230226_121659.jpg', 'Convocation', '2023-02-26 12:20:42'),
(4, 'IMG-20230306-WA0006.jpg', 'ifiles/IMG-20230306-WA0006.jpg', 'Pre Semester Exam Schedule (Ist sem)', '2023-03-05 12:20:42'),
(5, 'Screenshot_2023-03-07-19-41-54-327_com.sharpened.androidfileviewer.jpg', 'ifiles/Screenshot_2023-03-07-19-41-54-327_com.sharpened.androidfileviewer.jpg', 'Semester 1 External Exam Schedule ', '2023-03-05 12:20:42'),
(6, 'IMG_20230311_125744.jpg', 'ifiles/IMG_20230311_125744.jpg', 'Fundamental paper pre semester', '2023-03-11 12:20:42'),
(7, 'IMG-20230329-WA0003.jpg', 'ifiles/IMG-20230329-WA0003.jpg', 'Wooohhhhoooo!!! The most awaited event of KCMT, KARIZZMA 2023 is set to put stage on fire on 28th & 29th April.. So charge yourself with power pack energy & thrilling performances... KCMT is going to make it a rocking event..', '2023-03-30 11:20:42'),
(8, 'images (15).jpeg', 'ifiles/images (15).jpeg', 'All Students get their semester registration within 2 days. Date:4/04/2023', '2023-04-04 11:20:42'),
(9, 'IMG-20230404-WA0008.jpg', 'ifiles/IMG-20230404-WA0008.jpg', 'Notice For Registration ', '2023-04-04 11:20:42'),
(10, 'IMG-20230410-WA0001.jpg', 'ifiles/IMG-20230410-WA0001.jpg', 'Notice', '2023-04-10 10:45:08'),
(11, 'IMG-20230426-WA0002.jpg', 'ifiles/IMG-20230426-WA0002.jpg', 'First Internal Exam Schedule (IInd sem) ', '2023-05-11 05:29:36'),
(12, 'IMG-20230510-WA0015.jpg', 'ifiles/IMG-20230510-WA0015.jpg', 'Salesforce workshop ', '2023-05-11 05:29:58'),
(13, 'IMG-20230517-WA0002.jpg', 'ifiles/IMG-20230517-WA0002.jpg', 'Karizzma', '2023-05-17 07:00:44'),
(14, 'IMG-20230601-WA0003.jpg', 'ifiles/IMG-20230601-WA0003.jpg', 'Index of DBMS lab file', '2023-06-01 15:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `imgfiles`
--

CREATE TABLE `imgfiles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imgfiles`
--

INSERT INTO `imgfiles` (`id`, `name`, `sub`, `location`) VALUES
(1, 'IMG_20230220_184436.jpg', 'Computer organization and architecture assignment - 1', 'imgfiles/IMG_20230220_184436.jpg'),
(2, 'IMG_20230220_184436.jpg', 'Computer organization and architecture assignment - 2', 'imgfiles/IMG_20230220_184436.jpg'),
(3, 'IMG_20230220_184436.jpg', 'Computer organization and architecture assignment - 3', 'imgfiles/IMG_20230220_184436.jpg'),
(4, 'IMG_20230220_184033.jpg', 'Computer fundamental assignment 1', 'imgfiles/IMG_20230220_184033.jpg'),
(5, 'IMG_20230220_184033.jpg', 'Computer fundamental assignment 2', 'imgfiles/IMG_20230220_184033.jpg'),
(6, 'IMG_20230220_184209.jpg', 'Problem solving using C assignment 1', 'imgfiles/IMG_20230220_184209.jpg'),
(7, 'IMG_20230220_184350.jpg', 'Discrete mathematics assignment 1', 'imgfiles/IMG_20230220_184350.jpg'),
(8, 'images (10).jpeg', 'Dsa', 'imgfiles/images (10).jpeg'),
(9, 'images (10).jpeg', 'COA papers', 'imgfiles/images (10).jpeg'),
(10, 'images (10).jpeg', 'Btech COA', 'imgfiles/images (10).jpeg'),
(11, 'images (10).jpeg', 'Random', 'imgfiles/images (10).jpeg'),
(12, 'Screenshot_20230224_122019.jpg', 'RAM COA Lab Manual', 'imgfiles/Screenshot_20230224_122019.jpg'),
(13, 'Screenshot_20230224_122028.jpg', 'KMap Lab COA Lab Manual', 'imgfiles/Screenshot_20230224_122028.jpg'),
(14, 'Screenshot_20230224_122032.jpg', 'Boolean Algebraic Theorem COA Lab Manual', 'imgfiles/Screenshot_20230224_122032.jpg'),
(15, 'Screenshot_20230224_122907.jpg', 'Flip Flops', 'imgfiles/Screenshot_20230224_122907.jpg'),
(16, 'Screenshot_20230224_122913.jpg', 'A to D converter', 'imgfiles/Screenshot_20230224_122913.jpg'),
(17, 'Screenshot_2023-02-28-11-29-42-260_com.adobe.reader.jpg', 'COA lab Manual', 'imgfiles/Screenshot_2023-02-28-11-29-42-260_com.adobe.reader.jpg'),
(18, 'Screenshot_2023-02-28-16-22-15-102_cn.wps.xiaomi.abroad.lite.jpg', 'Memory Management ', 'imgfiles/Screenshot_2023-02-28-16-22-15-102_cn.wps.xiaomi.abroad.lite.jpg'),
(19, 'Screenshot_2023-02-28-16-22-43-346_cn.wps.xiaomi.abroad.lite.jpg', 'COA Cache Memory Organization ', 'imgfiles/Screenshot_2023-02-28-16-22-43-346_cn.wps.xiaomi.abroad.lite.jpg'),
(20, 'IMG_20230302_210102.jpg', 'COA Lab Manual (Updated) ', 'imgfiles/IMG_20230302_210102.jpg'),
(21, 'IMG_20230303_142957.jpg', 'C Lab File', 'imgfiles/IMG_20230303_142957.jpg'),
(22, 'Screenshot_2023-03-05-15-04-55-086_com.sharpened.androidfileviewer.jpg', 'Management Important Questions ', 'imgfiles/Screenshot_2023-03-05-15-04-55-086_com.sharpened.androidfileviewer.jpg'),
(23, 'Screenshot_2023-03-05-15-04-33-090_com.sharpened.androidfileviewer.jpg', 'Communication Lab File Questions', 'imgfiles/Screenshot_2023-03-05-15-04-33-090_com.sharpened.androidfileviewer.jpg'),
(24, 'Screenshot_2023-03-07-19-30-14-818_com.sharpened.androidfileviewer.jpg', 'Semester 1 Exam Schedule', 'imgfiles/Screenshot_2023-03-07-19-30-14-818_com.sharpened.androidfileviewer.jpg'),
(25, 'Screenshot_2023-03-14-15-16-48-056_com.sharpened.androidfileviewer.jpg', 'C Assignment - 2', 'imgfiles/Screenshot_2023-03-14-15-16-48-056_com.sharpened.androidfileviewer.jpg'),
(26, 'Screenshot_2023-03-29-22-16-19-029_cn.wps.xiaomi.abroad.lite.jpg', 'COA Unit - 1', 'imgfiles/Screenshot_2023-03-29-22-16-19-029_cn.wps.xiaomi.abroad.lite.jpg'),
(27, 'Screenshot_2023-03-29-22-31-12-891_cn.wps.xiaomi.abroad.lite.jpg', 'COA UNIT - 2', 'imgfiles/Screenshot_2023-03-29-22-31-12-891_cn.wps.xiaomi.abroad.lite.jpg'),
(28, 'Screenshot_2023-03-29-22-31-25-692_cn.wps.xiaomi.abroad.lite.jpg', 'COA UNIT - 3', 'imgfiles/Screenshot_2023-03-29-22-31-25-692_cn.wps.xiaomi.abroad.lite.jpg'),
(29, 'Screenshot_2023-03-29-22-31-39-063_cn.wps.xiaomi.abroad.lite.jpg', 'COA UNIT - 4', 'imgfiles/Screenshot_2023-03-29-22-31-39-063_cn.wps.xiaomi.abroad.lite.jpg'),
(30, 'Screenshot_2023-03-29-22-31-51-531_cn.wps.xiaomi.abroad.lite.jpg', 'COA Unit - 5', 'imgfiles/Screenshot_2023-03-29-22-31-51-531_cn.wps.xiaomi.abroad.lite.jpg'),
(31, 'Screenshot_2023-03-30-07-26-19-046_cn.wps.xiaomi.abroad.lite.jpg', 'Problem Solving Using C 2023 Papers ', 'imgfiles/Screenshot_2023-03-30-07-26-19-046_cn.wps.xiaomi.abroad.lite.jpg'),
(32, 'Screenshot_2023-03-30-07-26-28-639_cn.wps.xiaomi.abroad.lite.jpg', 'COA Paper 2023', 'imgfiles/Screenshot_2023-03-30-07-26-28-639_cn.wps.xiaomi.abroad.lite.jpg'),
(33, 'Screenshot_2023-03-30-07-26-35-474_cn.wps.xiaomi.abroad.lite.jpg', 'Discrete Mathematics Paper 2023 ', 'imgfiles/Screenshot_2023-03-30-07-26-35-474_cn.wps.xiaomi.abroad.lite.jpg'),
(34, 'Screenshot_2023-03-30-07-26-53-115_cn.wps.xiaomi.abroad.lite.jpg', 'Principals Of Management And Communication Paper 2023 ', 'imgfiles/Screenshot_2023-03-30-07-26-53-115_cn.wps.xiaomi.abroad.lite.jpg'),
(35, 'Screenshot_2023-03-30-07-41-00-795_cn.wps.xiaomi.abroad.lite.jpg', 'Computer Fundamental and Emerging Technologies Paper 2023 ', 'imgfiles/Screenshot_2023-03-30-07-41-00-795_cn.wps.xiaomi.abroad.lite.jpg'),
(36, 'Screenshot_2023-04-06-16-39-40-375_cn.wps.xiaomi.abroad.lite.jpg', 'Database Management System (2022 Paper) ', 'imgfiles/Screenshot_2023-04-06-16-39-40-375_cn.wps.xiaomi.abroad.lite.jpg'),
(37, 'Screenshot_2023-04-06-16-39-59-960_cn.wps.xiaomi.abroad.lite.jpg', 'Object Oriented Programming (2022 Paper) ', 'imgfiles/Screenshot_2023-04-06-16-39-59-960_cn.wps.xiaomi.abroad.lite.jpg'),
(38, 'Screenshot_2023-04-06-16-40-11-245_cn.wps.xiaomi.abroad.lite.jpg', 'Operating System (2022 Paper)', 'imgfiles/Screenshot_2023-04-06-16-40-11-245_cn.wps.xiaomi.abroad.lite.jpg'),
(39, 'Screenshot_2023-04-06-16-40-21-916_cn.wps.xiaomi.abroad.lite.jpg', 'Theory Of Automata and Formal Language(2022 Paper) ', 'imgfiles/Screenshot_2023-04-06-16-40-21-916_cn.wps.xiaomi.abroad.lite.jpg'),
(40, 'Screenshot_2023-04-06-16-59-50-514_com.sharpened.androidfileviewer.jpg', 'Cyber Security*(2022 Paper)', 'imgfiles/Screenshot_2023-04-06-16-59-50-514_com.sharpened.androidfileviewer.jpg'),
(41, 'Screenshot_2023-04-07-11-52-31-807_com.sharpened.androidfileviewer.jpg', 'MCA Syllabus ', 'imgfiles/Screenshot_2023-04-07-11-52-31-807_com.sharpened.androidfileviewer.jpg'),
(42, 'IMG_20230511_081835.jpg', 'Operating system Assignment-1', 'imgfiles/IMG_20230511_081835.jpg'),
(43, 'IMG_20230511_113055.jpg', 'Cyber Security Assignment-1', 'imgfiles/IMG_20230511_113055.jpg'),
(44, 'IMG_20230528_104354.jpg', 'Cyber Security Assignment 2', 'imgfiles/IMG_20230528_104354.jpg'),
(45, 'Screenshot_20230529_093047.jpg', 'Dbms assignment 1', 'imgfiles/Screenshot_20230529_093047.jpg'),
(46, 'Screenshot_20230601_122420.jpg', 'Automata Assignment 1 Question ', 'imgfiles/Screenshot_20230601_122420.jpg'),
(47, 'IMG_20230601_200423.jpg', 'Automata assignment - 1', 'imgfiles/IMG_20230601_200423.jpg'),
(48, 'Screenshot_2023-06-03-18-42-44-087_com.sharpened.androidfileviewer.jpg', 'Java Assignment-1 Questions ', 'imgfiles/Screenshot_2023-06-03-18-42-44-087_com.sharpened.androidfileviewer.jpg'),
(49, 'IMG_20230606_205531.jpg', 'Dbms Lab File', 'imgfiles/IMG_20230606_205531.jpg'),
(50, 'Screenshot_2023-06-10-12-58-01-043_com.sharpened.androidfileviewer.jpg', 'Java Lab File 1-21 Programs', 'imgfiles/Screenshot_2023-06-10-12-58-01-043_com.sharpened.androidfileviewer.jpg'),
(51, 'Screenshot_2023-06-10-12-58-01-043_com.sharpened.androidfileviewer.jpg', 'Java Lab File 1-21 Programs with Output', 'imgfiles/Screenshot_2023-06-10-12-58-01-043_com.sharpened.androidfileviewer.jpg'),
(52, 'Screenshot_2023-06-10-12-58-01-043_com.sharpened.androidfileviewer.jpg', 'Java Lab File 1 to 34 programs With Output', 'imgfiles/Screenshot_2023-06-10-12-58-01-043_com.sharpened.androidfileviewer.jpg'),
(53, 'Screenshot_2023-06-15-09-19-55-997_cn.wps.xiaomi.abroad.lite.jpg', 'Java Assignment 1', 'imgfiles/Screenshot_2023-06-15-09-19-55-997_cn.wps.xiaomi.abroad.lite.jpg'),
(54, 'Screenshot_2023-06-15-19-23-30-541_com.sharpened.androidfileviewer.jpg', 'OOPS Lab Front Page Doc File ', 'imgfiles/Screenshot_2023-06-15-19-23-30-541_com.sharpened.androidfileviewer.jpg'),
(55, 'Screenshot_2023-06-15-19-24-01-681_com.sharpened.androidfileviewer.jpg', 'DBMS Lab Front Page Doc File', 'imgfiles/Screenshot_2023-06-15-19-24-01-681_com.sharpened.androidfileviewer.jpg'),
(56, 'Screenshot_2023-06-20-10-03-08-837_com.microsoft.office.officehubrow.jpg', 'Operating System Assignment 2', 'imgfiles/Screenshot_2023-06-20-10-03-08-837_com.microsoft.office.officehubrow.jpg'),
(57, 'Screenshot_2023-06-21-10-32-38-112_com.sharpened.androidfileviewer.jpg', 'Automata Assignment 2', 'imgfiles/Screenshot_2023-06-21-10-32-38-112_com.sharpened.androidfileviewer.jpg'),
(58, 'IMG-20230624-WA0000.jpg', 'Schedule of IInd Unit Test Of IInd Sem', 'imgfiles/IMG-20230624-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `images`, `date_time`) VALUES
(1, 'DBMS_Notes.pdf', '2023-04-10 08:30:20'),
(2, 'LearnJava.pdf', '2023-04-10 11:17:23'),
(3, 'DBMS.pdf', '2023-04-10 11:17:28'),
(4, 'DATA STRUCTURE.pdf', '2023-04-10 11:17:31'),
(5, 'JavaIntroduction.pdf', '2023-04-11 16:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `viewers` int(10) DEFAULT 1,
  `imgpath` text NOT NULL,
  `videopath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `rdate`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(2, 'rohit ', '17-06-2023', 'AI', 31, 'Screenshot_2023-06-17-19-38-16-524_com.gallery.player.jpg', 'VID-20230617-WA0000.mp4'),
(3, 'celebs at kcmt', '17-06-2023', 'Sachet and Parampara', 3, 'Screenshot_2023-06-18-13-29-09-768_com.gallery.player.jpg', 'VID-20230519-WA0007.mp4'),
(4, 'gore', '17-06-2023', 'Disturbing ', 3, 'Screenshot_2023-06-18-13-29-22-685_com.gallery.player.jpg', '90f2cccea5844614affa4c061e20bac9_10000000_1447159605820161_1673944542411187348_n (1).mp4'),
(5, 'maggie ', '17-06-2023', 'Maggie Party', 4, 'Screenshot_2023-06-18-13-29-33-844_com.gallery.player.jpg', 'VID-20230317-WA0006.mp4'),
(6, 'raka', '18-06-2023', 'Funny', 8, 'Screenshot_2023-06-19-09-38-51-96_1c337646f29875672b5a61192b9010f9.jpg', 'VID_59961224_085040_727.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `pfiles`
--

CREATE TABLE `pfiles` (
  `id` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pfiles`
--

INSERT INTO `pfiles` (`id`, `pdf`, `location`, `CreationDate`) VALUES
(1, 'Coaassignment1.pdf', 'pfiles/Coaassignment1.pdf', '2023-01-03 07:20:50'),
(2, 'Coaassignment2.pdf', 'pfiles/Coaassignment2.pdf', '2023-01-07 07:40:35'),
(3, 'Coaassignment3.pdf', 'pfiles/Coaassignment3.pdf', '2023-01-07 09:20:35'),
(4, 'computerfundamentalassignment1.pdf', 'pfiles/computerfundamentalassignment1.pdf', '2023-01-07 16:50:15'),
(5, 'Fundamentalassignment-2 (1).pdf', 'pfiles/Fundamentalassignment-2 (1).pdf', '2023-01-09 06:40:35'),
(6, 'cprogramming1 (1).pdf', 'pfiles/cprogramming1 (1).pdf', '2023-01-01 06:40:35'),
(7, 'mathassignment1 (1).pdf', 'pfiles/mathassignment1 (1).pdf', '2023-01-12 06:40:35'),
(8, 'dsa (1).pdf', 'pfiles/dsa (1).pdf', '2023-01-13 06:40:35'),
(9, 'COApapers.pdf', 'pfiles/COApapers.pdf', '2023-01-14 06:40:35'),
(10, 'Chapter1-Introduction.pdf', 'pfiles/Chapter1-Introduction.pdf', '2023-01-16 06:40:35'),
(11, 'Japanese-Fairy-Tales.pdf', 'pfiles/Japanese-Fairy-Tales.pdf', '2023-01-17 06:40:35'),
(12, 'Random Access Memory Lab.pdf', 'pfiles/Random Access Memory Lab.pdf', '2023-01-22 06:40:35'),
(13, 'K Map lab experiment COA.pdf', 'pfiles/K Map lab experiment COA.pdf', '2023-01-25 06:40:35'),
(14, 'Boolean Algebraic theorm.pdf', 'pfiles/Boolean Algebraic theorm.pdf', '2023-01-27 06:40:35'),
(15, 'Flip Flops Lab experiment.pdf', 'pfiles/Flip Flops Lab experiment.pdf', '2023-01-29 06:40:35'),
(16, 'Analog to Digital Converter.pdf', 'pfiles/Analog to Digital Converter.pdf', '2023-02-01 06:40:35'),
(17, 'Lab Manual COA.pdf', 'pfiles/Lab Manual COA.pdf', '2023-02-02 06:40:35'),
(18, 'Memory Management .pdf', 'pfiles/Memory Management .pdf', '2023-02-04 06:40:35'),
(19, 'Cache Memory Organisation.pdf', 'pfiles/Cache Memory Organisation.pdf', '2023-02-07 06:40:35'),
(20, 'COA Lab Manual .pdf', 'pfiles/COA Lab Manual .pdf', '2023-02-08 06:10:35'),
(21, 'C Lab File.pdf', 'pfiles/C Lab File.pdf', '2023-02-09 06:40:35'),
(22, 'Important Questions MCA.pdf', 'pfiles/Important Questions MCA.pdf', '2023-02-11 06:40:35'),
(23, 'MCA Practical File Compulsory Set.pdf', 'pfiles/MCA Practical File Compulsory Set.pdf', '2023-02-12 06:40:35'),
(24, '22673yogmgofy.pdf', 'pfiles/22673yogmgofy.pdf', '2023-02-17 06:40:35'),
(25, 'CAssignment-2 .pdf', 'pfiles/CAssignment-2 .pdf', '2023-02-18 06:40:35'),
(26, 'coa-unit-1-notes_compressed.pdf', 'pfiles/coa-unit-1-notes_compressed.pdf', '2023-02-20 06:40:35'),
(27, 'coa-unit-2-notes_compressed.pdf', 'pfiles/coa-unit-2-notes_compressed.pdf', '2023-02-20 06:40:35'),
(28, 'coa-unit-3-notes_compressed.pdf', 'pfiles/coa-unit-3-notes_compressed.pdf', '2023-02-20 06:40:35'),
(29, 'coa-unit-4-notes-compressed.pdf', 'pfiles/coa-unit-4-notes-compressed.pdf', '2023-02-20 06:40:35'),
(30, 'coa-unit-5-notes.pdf', 'pfiles/coa-unit-5-notes.pdf', '2023-02-20 06:40:35'),
(31, 'C Paper 2023 .pdf', 'pfiles/C Paper 2023 .pdf', '2023-02-21 06:40:35'),
(32, 'COA Paper 2023.pdf', 'pfiles/COA Paper 2023.pdf', '2023-02-21 08:10:20'),
(33, 'Discrete Paper 2023.pdf', 'pfiles/Discrete Paper 2023.pdf', '2023-02-21 06:40:35'),
(34, 'Management Paper 2023.pdf', 'pfiles/Management Paper 2023.pdf', '2023-02-21 06:40:35'),
(35, 'Fundamental Paper 2023.pdf', 'pfiles/Fundamental Paper 2023.pdf', '2023-02-21 08:12:10'),
(36, 'mca-2-sem-database-management-systems-kca204-2022.pdf', 'pfiles/mca-2-sem-database-management-systems-kca204-2022.pdf', '2023-04-07 05:40:35'),
(37, 'mca-2-sem-object-oriented-programming-kca202-2022.pdf', 'pfiles/mca-2-sem-object-oriented-programming-kca202-2022.pdf', '2023-04-07 07:40:35'),
(38, 'mca-2-sem-operating-systems-kca203-2022.pdf', 'pfiles/mca-2-sem-operating-systems-kca203-2022.pdf', '2023-04-07 05:40:35'),
(39, 'mca-2-sem-theory-of-automata-and-formal-languages-kca201-2022.pdf', 'pfiles/mca-2-sem-theory-of-automata-and-formal-languages-kca201-2022.pdf', '2023-04-07 15:10:35'),
(40, 'mca-2-sem-cyber-security-kcaa01-2022.pdf', 'pfiles/mca-2-sem-cyber-security-kcaa01-2022.pdf', '2023-04-07 05:40:35'),
(41, '25th August MCA _New__First_Year_Syllabus_2020.pdf', 'pfiles/25th August MCA _New__First_Year_Syllabus_2020.pdf', '2023-04-07 06:21:09'),
(42, 'Operating-system-assignment-1.pdf', 'pfiles/Operating-system-assignment-1.pdf', '2023-05-11 05:18:58'),
(43, 'Cyber-security-assignment-1.pdf', 'pfiles/Cyber-security-assignment-1.pdf', '2023-05-11 06:01:04'),
(44, 'Cyber-security-assignmet-2.pdf', 'pfiles/Cyber-security-assignmet-2.pdf', '2023-05-28 05:17:06'),
(45, 'DBMS-assignment-1.pdf', 'pfiles/DBMS-assignment-1.pdf', '2023-05-29 03:55:14'),
(46, 'ASSIGN AUTOMATA.pdf', 'pfiles/ASSIGN AUTOMATA.pdf', '2023-06-01 06:48:34'),
(47, 'Automata-assignment-1.pdf', 'pfiles/Automata-assignment-1.pdf', '2023-06-01 15:09:30'),
(48, 'Assignment in Java.doc', 'pfiles/Assignment in Java.doc', '2023-06-03 13:10:58'),
(49, 'DBMS_Lab_File.pdf', 'pfiles/DBMS_Lab_File.pdf', '2023-06-06 15:36:18'),
(50, 'Java_Lab_File_1-21.pdf', 'pfiles/Java_Lab_File_1-21.pdf', '2023-06-10 07:25:04'),
(51, 'Java_Lab_File_1to21_withOP.pdf', 'pfiles/Java_Lab_File_1to21_withOP.pdf', '2023-06-10 13:09:06'),
(52, 'Java_Lab_File_1to34_WithOP.pdf', 'pfiles/Java_Lab_File_1to34_WithOP.pdf', '2023-06-11 06:42:10'),
(53, 'Java_assignment_1.pdf', 'pfiles/Java_assignment_1.pdf', '2023-06-15 03:45:40'),
(54, 'OOPs Front Page.docx', 'pfiles/OOPs Front Page.docx', '2023-06-15 14:28:02'),
(55, 'DBMS Front Page.docx', 'pfiles/DBMS Front Page.docx', '2023-06-15 14:29:01'),
(56, 'Operating System Assignment 2.pdf', 'pfiles/Operating System Assignment 2.pdf', '2023-06-20 04:32:48'),
(57, 'Automata Assignment 2.pdf', 'pfiles/Automata Assignment 2.pdf', '2023-06-21 04:57:43'),
(58, 'IMG-20230624-WA0000.jpg', 'pfiles/IMG-20230624-WA0000.jpg', '2023-06-24 08:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(10) NOT NULL,
  `mid` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `rate_count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'Jolly', 4, 'Gud', 1677843599),
(2, 'Chris', 4, 'Good', 1677843909),
(3, 'RolexðŸ‘‘', 1, '...... ', 1677847089),
(6, 'Sanjay yadav ', 5, 'This is very useful site and thatâ€™s amazing ', 1678012168),
(7, 'Rohit', 5, 'Infomative', 1678108043),
(8, 'Abhishek ', 5, 'Excellent ', 1678202787),
(9, 'Akki ', 5, 'Excellent ', 1678550712),
(10, 'Raj', 5, 'Nice', 1678608973),
(11, 'Prateek ', 0, 'Excellent ', 1678788598),
(12, 'Prateek ', 5, 'Excellent ', 1678788616),
(13, 'Mohd Azeem', 5, 'Intelligent ðŸ§ ðŸ§  person ', 1678789616),
(14, 'Pranjul sharma', 5, 'Jaiii shreee Ram', 1678789642),
(15, 'Arun', 5, 'Great work Prahlad\nðŸ˜Ž', 1679760372);

-- --------------------------------------------------------

--
-- Table structure for table `tblauths`
--

CREATE TABLE `tblauths` (
  `ID` int(10) NOT NULL,
  `UniqueNumber` bigint(10) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauths`
--

INSERT INTO `tblauths` (`ID`, `UniqueNumber`, `AdminRegdate`, `Username`) VALUES
(5, 1234, '2023-04-10 13:25:02', 'Prahlad1234'),
(6, 18158920, '2023-04-11 09:46:27', 'rohit@123'),
(7, 0, '2023-05-29 05:23:15', 'Mohit '),
(8, 0, '2023-05-29 05:32:31', 'KULDEEP8057'),
(9, 1234, '2023-05-31 09:22:35', 'prakash'),
(10, 1234, '2023-05-31 10:28:01', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblverify`
--

CREATE TABLE `tblverify` (
  `ID` int(10) NOT NULL,
  `UniqueNumber` bigint(10) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblverify`
--

INSERT INTO `tblverify` (`ID`, `UniqueNumber`, `AdminRegdate`) VALUES
(1, 6969, '2023-04-10 04:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `images`, `date_time`) VALUES
(1, '1680342776735.jpg', '2023-04-01 05:55:07'),
(2, '1680342776763.jpg', '2023-04-01 05:55:07'),
(3, '1680342776785.jpg', '2023-04-01 05:55:07'),
(4, '1680342776804.jpg', '2023-04-01 05:55:07'),
(5, '1680342776823.jpg', '2023-04-01 05:55:30'),
(6, '1680342776842.jpg', '2023-04-01 05:55:30'),
(7, '1680342776859.jpg', '2023-04-01 05:55:30'),
(8, '1680342776876.jpg', '2023-04-01 05:55:30'),
(9, '1680342776892.jpg', '2023-04-01 05:55:49'),
(10, '1680342776908.jpg', '2023-04-01 05:55:50'),
(11, '1680342776926.jpg', '2023-04-01 05:55:50'),
(12, '1680342776953.jpg', '2023-04-01 05:55:50'),
(13, '1680342776968.jpg', '2023-04-01 05:56:17'),
(14, '1680342776991.jpg', '2023-04-01 05:56:17'),
(15, '1680342777008.jpg', '2023-04-01 05:56:17'),
(16, '1680342777023.jpg', '2023-04-01 05:56:17'),
(17, '1680342776735.jpg', '2023-04-01 06:02:31'),
(18, '1680342776763.jpg', '2023-04-01 06:02:31'),
(19, '1680342776785.jpg', '2023-04-01 06:02:31'),
(20, '1680342776804.jpg', '2023-04-01 06:02:31'),
(21, '1680342777095.jpg', '2023-04-01 06:05:03'),
(22, '1680342777130.jpg', '2023-04-01 06:05:03'),
(23, '1680342777147.jpg', '2023-04-01 06:05:03'),
(24, '1680342777255.jpg', '2023-04-01 06:05:31'),
(25, '1680342777229.jpg', '2023-04-01 06:05:31'),
(26, '1680342777181.jpg', '2023-04-01 06:05:31'),
(27, '1680342777164.jpg', '2023-04-01 06:05:31'),
(28, 'IMG-20230325-WA0002.jpeg', '2023-04-02 05:48:01'),
(29, 'IMG-20230402-WA0002.jpg', '2023-04-02 12:18:04'),
(30, 'Notes.png', '2023-04-07 07:12:49'),
(31, 'IMG-20230406-WA0021.jpg', '2023-04-10 04:57:32'),
(32, 'IMG-20230414-WA0304.jpg', '2023-04-17 01:36:46'),
(33, 'IMG-20230414-WA0288.jpg', '2023-04-17 01:36:57'),
(34, 'IMG-20230414-WA0306.jpg', '2023-04-17 04:13:26'),
(35, 'IMG-20230414-WA0290.jpg', '2023-04-17 04:13:26'),
(36, 'IMG-20230414-WA0302.jpg', '2023-04-17 04:13:26'),
(37, 'IMG-20230414-WA0268.jpg', '2023-04-17 04:13:26'),
(38, 'IMG-20230414-WA0267.jpg', '2023-04-17 04:13:26'),
(39, 'IMG-20230414-WA0305.jpg', '2023-04-17 04:13:26'),
(40, 'IMG-20230414-WA0273.jpg', '2023-04-17 04:13:26'),
(41, 'IMG-20230414-WA0311.jpg', '2023-04-17 04:13:26'),
(42, 'IMG-20230414-WA0263.jpg', '2023-04-17 04:13:26'),
(43, 'IMG-20230414-WA0310.jpg', '2023-04-17 04:13:26'),
(44, 'IMG-20230414-WA0033.jpg', '2023-04-17 04:14:00'),
(45, 'IMG-20230414-WA0033.jpg', '2023-04-17 04:14:00'),
(46, 'IMG-20230414-WA0263.jpg', '2023-04-17 09:28:18'),
(47, 'IMG-20230414-WA0255.jpg', '2023-04-17 09:28:18'),
(48, 'IMG-20230414-WA0253.jpg', '2023-04-17 09:28:18'),
(49, 'IMG-20230414-WA0258.jpg', '2023-04-17 09:28:18'),
(50, 'IMG-20230414-WA0254.jpg', '2023-04-17 09:28:18'),
(51, 'IMG-20230414-WA0252.jpg', '2023-04-17 09:28:18'),
(52, 'IMG-20230414-WA0248.jpg', '2023-04-17 09:28:18'),
(53, 'IMG-20230414-WA0247.jpg', '2023-04-17 09:28:18'),
(54, 'IMG-20230417-WA0003.jpg', '2023-04-17 09:33:42'),
(55, 'IMG-20230414-WA0287.jpg', '2023-04-17 09:33:42'),
(56, 'IMG-20230414-WA0278.jpg', '2023-04-17 09:33:42'),
(57, 'IMG-20230414-WA0279.jpg', '2023-04-17 09:33:42'),
(58, 'IMG-20230414-WA0284.jpg', '2023-04-17 09:33:42'),
(59, 'IMG-20230414-WA0283.jpg', '2023-04-17 09:33:42'),
(60, 'IMG-20230414-WA0273.jpg', '2023-04-17 09:33:42'),
(61, 'IMG-20230414-WA0272.jpg', '2023-04-17 09:33:42'),
(62, 'IMG-20230414-WA0270.jpg', '2023-04-17 09:33:42'),
(63, 'IMG-20230414-WA0263.jpg', '2023-04-17 09:33:42'),
(64, 'IMG-20230414-WA0269.jpg', '2023-04-17 09:33:42'),
(65, 'IMG_1070.JPG', '2023-05-11 02:13:00'),
(66, '16853380461523059280723944065372.jpg', '2023-05-29 01:27:47'),
(67, '16853382397271918510258193278812.jpg', '2023-05-29 01:30:57'),
(68, '16853382807625772622732231940646.jpg', '2023-05-29 01:31:34'),
(69, '16853383056991169932642797005584.jpg', '2023-05-29 01:32:04'),
(70, 'IMG_20230518_192019.jpg', '2023-05-29 02:43:33'),
(71, 'IMG_20230518_185354.jpg', '2023-05-29 02:53:51'),
(72, 'Screenshot_20230519_214207.jpg', '2023-05-29 02:54:22'),
(73, 'IMG_20230518_224819.jpg', '2023-05-29 02:54:40'),
(74, 'IMG_20230518_223437.jpg', '2023-05-29 02:54:57'),
(75, 'IMG_20230525_110616.jpg', '2023-05-29 03:00:40'),
(76, '1685343684354824151421959935055.jpg', '2023-05-29 03:01:43'),
(77, '16853437085062022286295332342975.jpg', '2023-05-29 03:02:07'),
(78, '16853438493951344464311449723771.jpg', '2023-05-29 03:04:21'),
(79, '16853438644146606825830275585336.jpg', '2023-05-29 03:04:36'),
(80, '16853438834635896192654576922539.jpg', '2023-05-29 03:05:05'),
(81, '16853439133928974123051717589108.jpg', '2023-05-29 03:05:33'),
(82, '16853439673275490555606311239923.jpg', '2023-05-29 03:06:20'),
(83, '16853452284332848630214368886361.jpg', '2023-05-29 03:27:22'),
(84, 'IMG_20230530_170335.jpg', '2023-06-12 13:55:31'),
(85, 'IMG_20230530_170140.jpg', '2023-06-12 13:55:47'),
(86, 'IMG_20230530_170047.jpg', '2023-06-12 13:56:00'),
(87, 'IMG_20230530_165152.jpg', '2023-06-12 13:56:14'),
(88, 'IMG_20230530_165143.jpg', '2023-06-12 13:56:26'),
(89, 'IMG_20230606_133217.jpg', '2023-06-14 14:25:28'),
(90, 'IMG_20230526_121918.jpg', '2023-06-14 14:25:56'),
(91, '16867331115603061727102983566637.jpg', '2023-06-14 14:28:49'),
(92, '16867331388579063678054038749851.jpg', '2023-06-14 14:29:10'),
(93, '16867331549903021743689035686227.jpg', '2023-06-14 14:29:32'),
(94, '16867331752736462239584999493298.jpg', '2023-06-14 14:29:46'),
(95, '16867332069966913360215104617480.jpg', '2023-06-14 14:30:21'),
(96, '16867332232037209198385582380315.jpg', '2023-06-14 14:30:37'),
(97, '16867334112625644585559358123367.jpg', '2023-06-14 14:33:46'),
(98, '16867334284976139285866012770768.jpg', '2023-06-14 14:34:23'),
(99, '16867334793895140086309408648134.jpg', '2023-06-14 14:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `course` varchar(120) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rollno` varchar(20) DEFAULT NULL,
  `UNIVERSITY` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`, `gender`, `phone`, `course`, `date`, `rollno`, `UNIVERSITY`) VALUES
(1, 'Prahlad Singh ', 'prahladsingh7512@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'qwerty.jpg', 'male', '9470657612', 'MCA', '2002-12-08', '2201420140034', 'AKTU'),
(2, 'Rohit Shakya', 'rohitshakya182@gmail.com', 'fff1ad9118aa1256e3128a00f2ea795a', 'output (1).png', 'male', '9027247476', 'MCA', '2001-12-29', '2201420140042', 'AKTU'),
(3, 'Mohd Azeem ', 'sayedazeem92786@gmail.com', '67a0c364b2d42b56c743926e3f9a685c', 'IMG20230516100151.jpg', 'male', '7088480377', 'MCA', '2002-06-08', '2201420140022', 'AKTU'),
(4, 'Ajay Gangwar ', 'ajaygangwar030@gmail.com', 'c85df9d369349ba6bc7fae06f16e0574', 'IMG_20230512_135221.jpg', 'male', '7500580954', 'MCA', '2001-07-29', '2201420140002', 'AKTU'),
(5, 'Sanjay yadav ', 'yadavsanjay7232@gmail.com', '89a606a2a403066606aa0f5e7dad9134', 'c21dc361-9671-4ccf-b162-1d873c544090.jpeg', 'male', '7505213565', 'MCA', '2001-07-30', '2201420140044', 'AKTU'),
(6, 'Pranjul sharma', 'pranjulsharma59@gmail.com', '2e202bb4707cbaf1e95e0737b826bf65', 'WhatsApp Image 2023-02-20 at 10.48.22 AM.jpeg', 'male', '8865082226', 'MCA', '2003-03-02', '2201420140035', 'AKTU'),
(8, 'Mohit Patel', 'pmohit645@gmail.com', '7f36be5584712b4f1de2527f5d2bd106', 'DSC_0118_2-removebg-preview (1) (1).png', 'male', '+917060993826', 'MCA', '1999-02-10', '2201420140030', 'AKTU'),
(9, 'Pankaj Kumar', 'itceguru123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'pankajphoto.jpg.jpg', 'male', '7505550188', 'MCA', '2000-07-16', '2201420140042', 'AKTU'),
(10, 'Prateek Saxena ', 'prateeksaxenably@gmail.com', '15e1a16c81a1a5e422f35c8769ca3f9e', 'DocScanner 01-Jun-2023 6-16 pm.jpg', 'male', '+91 8532015243', 'MCA', '1998-11-12', '2201420140036', 'AKTU'),
(11, 'Ankit babu', 'ankitsharmably6398@gmail.com', 'c17baf6919ce27f32cb97ed5e946edee', '', 'male', '+917351613328', ' MCA', '2001-08-05', '2201420140008', 'AKTU'),
(12, 'Ajay kumar', 'brajaykumar95286@gmail.com', '0f2d2dc1945d7aed7e02e875736aaeb2', '', 'male', '9528694254', ' MCA', '2003-07-01', '2201420140003', 'AKTU'),
(13, 'Prahlad Singh ', 'maohsama0@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Male', '9149062842', 'BCA', '2002-12-08', '202041100049', 'MJPRU'),
(14, 'Manish kumar', 'g@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Male', '865988767', 'MCA', '2023-06-22', '2201420140020', 'Aktu'),
(15, 'AYUSH BHADAURIYA', 'aayushsingh9690@gmail.com', '4f42142df925126c6bdfd337b6716cba', 'rps20230605_100629.jpg', 'Male', '8755309477', 'MCA', '2000-10-27', '2201420140011', 'AKTU'),
(16, 'Karan Gupta', 'karangupta.be@gmail.com', 'd221a94384f45f73841f0deaa1a6b90c', '', 'Male', '7534863719', 'MCA', '2003-07-05', '2201420140017', 'AkTU'),
(17, 'Shikha', 'shikha28102810@gmail.com', 'f99d2b9a29ae1c42483db318e4a6a2ac', 'WhatsApp Image 2023-04-24 at 21.56.39 (2).jpg', 'Female', '6387039231', 'MCA', '2003-07-10', '2201420140045', 'aktu'),
(18, 'Megha', 'sacsena17@gmail.com', '0598834c2623ba2d9fdbe8c44c7ca1ea', 'IMG_20230309_163648_365.jpg', 'Female', '+917818816818', 'MCA', '1997-07-01', '2201420140021', 'Aktu'),
(19, 'Mohd salman', 'mohdsalman4651@gmail.com', '1d72310edc006dadf2190caad5802983', '', 'Male', '8006177776', 'MCA', '2001-06-09', '2201420140027', 'aktu'),
(20, 'Saurabh singh', 'Singhsaurabhom@gmail.com', 'd1b0aa9e9d86de33cc5dc32a0c784d0b', '1685855136338_l4k7n4_2_0.jpg', 'Male', '7409784288', 'PGDCA', '2001-07-10', '234011100009', 'Mjpru'),
(21, 'kuldeep gangwar', 'gagnwarkuldeep442@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '16861097020873276373182831679991.jpg', 'Male', '8057845620', 'MCA', '1998-07-04', '2201420140019', 'AKTU'),
(22, 'Rohan Sharma ', 'rohansharma12bly@gmail.com', '31cb48fdac9286b2f32056be6bc89562', 'IMG_20230512_143650.jpg', 'Male', '8630895672', 'MCA', '2000-08-25', '22014201400141', 'APJ Abdul Kalam '),
(24, 'gajendra singh', 'singhsahab90580@gmail.com', '028bfa7d0b6e3255390fdd7289ceb3a1', 'IMG_20230528_214525_944.jpg', 'Male', '9368749442', ' MCA', '1999-07-15', '2201420140014', 'Aktu'),
(25, 'Munendra gangwar', 'gangwarm900@gmail.com', 'fecc0175dbc11956ca57f8ee84eb4492', '', 'Male', '9084772221', ' MCA', '1999-06-10', '2201420140031', 'Aktu'),
(26, 'DHEERENDRA SINGH', '9dheerendrasingh@gmail.com', '79b8c94ecbca3ebffe3cfd88f52f07ab', 'IMG_20230609_195959.jpg', 'Male', '7830518687', 'MCA', '2001-08-10', '2201420140013', 'AKTU'),
(27, 'Sanjana mourya ', 'sanjanamourya74@gmail.com', '46294359106614887d25a0a40f98975b', '', 'Female', '9027261329', 'MCA', '2000-06-15', '2201420140043', 'AKTU '),
(28, 'Sneh Sharma', 'ssneh5833@gmail.com', 'c9c64e750270dcc9c9ef35f76da346cd', '', 'Female', '9027684607', 'MCA', '2001-08-18', '2201420140047', 'Aktu '),
(29, 'Akash', 'Akashsakshi24@gmail.com', 'd6dadde6460f30de159b8e898dfe90da', '', 'Male', '07668939730', 'MCA', '2000-06-15', '2201420140006', 'Aktu'),
(30, 'Gaurav Patel ', 'gp4700001@gmail.com', '910be72d22e04e452347184adfc658cd', 'IMG20230518100722.jpg', 'Male', '8979154758', 'MCA', '2001-07-01', '2201420140015', 'Aktu'),
(31, 'Himanshu Patel', 'himanshupate34578@gmail.com', 'c505da27421d2c1544067dbf70a5c0d7', '', 'Male', '6398331099', 'MCA', '2001-07-10', '2201420140016', 'Akt university  Lucknow ');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`) VALUES
(1, '08d378f6560244bfa46b8910cf984c40_170160686_182793121022902_3493961650005535512_n.mp4', 'vidfiles/08d378f6560244bfa46b8910cf984c40_170160686_182793121022902_3493961650005535512_n.mp4'),
(2, 'VID-20230317-WA0006.mp4', 'vidfiles/VID-20230317-WA0006.mp4'),
(3, '90f2cccea5844614affa4c061e20bac9_10000000_1447159605820161_1673944542411187348_n.mp4', 'vidfiles/90f2cccea5844614affa4c061e20bac9_10000000_1447159605820161_1673944542411187348_n.mp4'),
(4, 'VID-20230406-WA0008.mp4', 'vidfiles/VID-20230406-WA0008.mp4'),
(5, 'VID-20230519-WA0007.mp4', 'vidfiles/VID-20230519-WA0007.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_counter`
--

CREATE TABLE `visitor_counter` (
  `counts` int(10) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_counter`
--

INSERT INTO `visitor_counter` (`counts`) VALUES
(1072);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ifiles`
--
ALTER TABLE `ifiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgfiles`
--
ALTER TABLE `imgfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `pfiles`
--
ALTER TABLE `pfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tblauths`
--
ALTER TABLE `tblauths`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  ADD PRIMARY KEY (`counts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ifiles`
--
ALTER TABLE `ifiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `imgfiles`
--
ALTER TABLE `imgfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pfiles`
--
ALTER TABLE `pfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblauths`
--
ALTER TABLE `tblauths`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
