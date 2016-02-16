-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2016 at 10:47 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sof`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text,
  `seoTitle` varchar(500) DEFAULT NULL,
  `parentid` bigint(20) DEFAULT '0',
  `meta` varchar(500) DEFAULT NULL,
  `keyword` varchar(500) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `createTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sort_order` int(10) NOT NULL,
  `deleted` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`),
  FULLTEXT KEY `pravin` (`title`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `title`, `seoTitle`, `parentid`, `meta`, `keyword`, `status`, `createTime`, `sort_order`, `deleted`) VALUES
(39, 'ttttttttttttttt', 'gggggggggggggggg', 0, 'fdgd', 'lave3 ', 0, '2016-01-30 07:04:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notescategory`
--

CREATE TABLE IF NOT EXISTS `notescategory` (
  `notesCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `parentId` int(11) NOT NULL,
  `CategoryName` varchar(250) DEFAULT NULL,
  `categoryDescription` varchar(5000) DEFAULT NULL,
  `seoTitle` varchar(500) DEFAULT NULL,
  `metaTag` varchar(500) DEFAULT NULL,
  `keyWord` varchar(500) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `deleted` int(5) NOT NULL DEFAULT '0',
  `sort_order` int(13) NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notesCategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notescategory`
--

INSERT INTO `notescategory` (`notesCategoryId`, `parentId`, `CategoryName`, `categoryDescription`, `seoTitle`, `metaTag`, `keyWord`, `status`, `deleted`, `sort_order`, `createTime`) VALUES
(8, 0, 'sdfsf', '<p>sfsf</p>\r\n', 'sdfsf', 'sfsd', 'sdfsd ', 0, 0, 1, '2016-01-30 07:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `notesdetail`
--

CREATE TABLE IF NOT EXISTS `notesdetail` (
  `notesId` int(11) NOT NULL AUTO_INCREMENT,
  `notesCategoryId` int(11) NOT NULL,
  `notesTitle` varchar(500) DEFAULT NULL,
  `notesDescription` varchar(10000) DEFAULT NULL,
  `uploads` varchar(500) DEFAULT NULL,
  `seoTitle` varchar(500) DEFAULT NULL,
  `metaTag` varchar(500) DEFAULT NULL,
  `keyWord` varchar(500) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `deleted` int(2) NOT NULL DEFAULT '0',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `downloads` int(11) DEFAULT '0',
  PRIMARY KEY (`notesId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pageId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryId` int(11) NOT NULL,
  `pageTitle` varchar(250) DEFAULT NULL,
  `pageDescription` varchar(10000) DEFAULT NULL,
  `specialNote` varchar(500) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `seoTitle` varchar(500) DEFAULT NULL,
  `metaTag` varchar(500) DEFAULT NULL,
  `keyWord` varchar(500) DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pageId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(50) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `deleted` int(2) NOT NULL DEFAULT '0',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userType`, `userName`, `password`, `status`, `deleted`, `createTime`) VALUES
(1, 'admin', 'admin1', 'e6e061838856bf47e1de730719fb2609', 0, 0, '2016-01-29 12:25:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
