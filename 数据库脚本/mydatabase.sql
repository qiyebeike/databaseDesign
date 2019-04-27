-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-11 05:36:12
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- 表的结构 `学生表`
--

CREATE TABLE IF NOT EXISTS `学生表` (
  `姓名` varchar(40) NOT NULL,
  `学号` varchar(40) NOT NULL,
  `班级` varchar(40) NOT NULL,
  `邮箱` varchar(40) NOT NULL,
  `请假次数` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`学号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `学生表`
--

INSERT INTO `学生表` (`姓名`, `学号`, `班级`, `邮箱`, `请假次数`) VALUES
('贾强', '1', '计科151', '123456', 1),
('小明', '123456', '计科152', '4', 0),
('周宽', '19215218', '计科152', '956674661@qq.com', 10),
('4', '4', '4', '4', 0);

-- --------------------------------------------------------

--
-- 表的结构 `教师表`
--

CREATE TABLE IF NOT EXISTS `教师表` (
  `姓名` varchar(40) NOT NULL,
  `职工号` varchar(40) NOT NULL,
  `课程名` varchar(40) NOT NULL,
  `办公室` varchar(40) NOT NULL,
  `邮箱` varchar(40) NOT NULL,
  PRIMARY KEY (`职工号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `教师表`
--

INSERT INTO `教师表` (`姓名`, `职工号`, `课程名`, `办公室`, `邮箱`) VALUES
('001', '0001', '001', '001', '001'),
('吴艳莲', '001', '数据结构', '教学楼', '123456'),
('3121', '212', '2112', '121', '2112'),
('800', '800', '800', '800', '800');

-- --------------------------------------------------------

--
-- 表的结构 `用户表`
--

CREATE TABLE IF NOT EXISTS `用户表` (
  `用户名` varchar(40) NOT NULL,
  `密码` varchar(40) NOT NULL,
  `身份` varchar(40) NOT NULL,
  PRIMARY KEY (`用户名`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `用户表`
--

INSERT INTO `用户表` (`用户名`, `密码`, `身份`) VALUES
('0001', '001', '任课教师'),
('001', '123456', '任课教师'),
('002', '123456', '辅导员'),
('1', '123456', '学生'),
('100', '123456', '辅导员'),
('112', '123456', '辅导员'),
('113', '123456', '辅导员'),
('114', '123456', '辅导员'),
('123456', '123456', '学生'),
('19215200', '19215200', '学生'),
('19215218', '860039', '学生'),
('2', '123456', '辅导员'),
('4', '4', '学生'),
('700', '123456', '辅导员'),
('800', '123456', '任课教师');

-- --------------------------------------------------------

--
-- 表的结构 `请假表`
--

CREATE TABLE IF NOT EXISTS `请假表` (
  `请假序号` int(60) NOT NULL,
  `请假时间` varchar(40) NOT NULL,
  `请假原因` varchar(500) NOT NULL,
  `任课教师` varchar(40) NOT NULL,
  `课程名` varchar(40) NOT NULL,
  `学号` varchar(40) NOT NULL,
  `状态` varchar(40) NOT NULL DEFAULT '待审核',
  `备注` varchar(200) NOT NULL DEFAULT '暂无',
  PRIMARY KEY (`请假序号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `请假表`
--

INSERT INTO `请假表` (`请假序号`, `请假时间`, `请假原因`, `任课教师`, `课程名`, `学号`, `状态`, `备注`) VALUES
(0, '2017-05-11 18:15:08', '我的腿受伤了需要去看医生！', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(1, '2017-05-11 18:15:36', '我觉得天气不错请出去玩！', '吴艳莲', '数据结构', '19215218', '驳回', '你的原因太任性，不答应！'),
(2, '2017-05-25 19:24:43', '我想吃饭', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(3, '2017-06-05 19:23:15', '我想玩', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(4, '2017-06-06 16:00:09', '测地', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(5, '2017-06-06 16:08:47', '呜呜呜呜', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(6, '2017-06-06 16:09:31', '实打实大声道1', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(7, '2017-06-08 15:05:33', '我想去玩', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(8, '2017-06-09 21:26:36', '今天天气不错', '吴艳莲', '数据结构', '19215218', '已了解', '暂无'),
(9, '2017-06-11 11:20:53', '我的脚受伤了  我要去看病', '吴艳莲', '数据结构', '19215218', '已了解', '暂无');

-- --------------------------------------------------------

--
-- 表的结构 `辅导员表`
--

CREATE TABLE IF NOT EXISTS `辅导员表` (
  `姓名` varchar(40) NOT NULL,
  `职工号` varchar(40) NOT NULL,
  `办公室` varchar(40) NOT NULL,
  `邮箱` varchar(40) NOT NULL,
  PRIMARY KEY (`职工号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `辅导员表`
--

INSERT INTO `辅导员表` (`姓名`, `职工号`, `办公室`, `邮箱`) VALUES
('100', '100', '', '100'),
('测试', '112', '', '112'),
('332', '113', '', '332'),
('114', '114', '114', '114'),
('王春伟', '2', '', '123456'),
('700', '700', '700', '700');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
