-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2008 at 11:38 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET FOREIGN_KEY_CHECKS=0;

--
-- Database: `voxpopuli`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `userid` int(10) unsigned NOT NULL auto_increment,
  `loginname` varchar(20) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `loginname` (`loginname`)
) TYPE=MyISAM  AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`userid`, `loginname`, `password`) VALUES(1, 'admin', 'voxpop');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `comp_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(50) default NULL,
  `message` text NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `comp_id` (`comp_id`),
  KEY `user_id` (`user_id`)
) TYPE=MyISAM  AUTO_INCREMENT=20 ;





-- --------------------------------------------------------

--
-- Table structure for table `comparison`
--

DROP TABLE IF EXISTS `comparison`;
CREATE TABLE IF NOT EXISTS `comparison` (
  `compid` double NOT NULL auto_increment,
  `title` varchar(500) default NULL,
  `url1` varchar(765) default NULL,
  `url2` varchar(765) default NULL,
  `url1_votesUP` double default NULL,
  `url1_votesDOWN` double default NULL,
  `url2_votesUP` double default NULL,
  `url2_votesDOWN` double default NULL,
  `date_created` datetime default NULL,
  PRIMARY KEY  (`compid`)
) TYPE=MyISAM  AUTO_INCREMENT=8 ;




-- --------------------------------------------------------

--
-- Table structure for table `deletemember`
--

DROP TABLE IF EXISTS `deletemember`;
CREATE TABLE IF NOT EXISTS `deletemember` (
  `userid` int(10) unsigned NOT NULL auto_increment,
  `loginame` varchar(20) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `name` varchar(32) NOT NULL default '',
  `mail` varchar(32) NOT NULL default '',
  `reason` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `loginame` (`loginame`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;




-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) unsigned NOT NULL auto_increment,
  `comment_id` int(10) NOT NULL,
  `loginname` varchar(20) NOT NULL default '',
  `name` varchar(32) NOT NULL default '',
  `surname` varchar(32) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `pseudo` varchar(32) NOT NULL default '',
  `email` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`userid`),
  KEY `comment_id` (`comment_id`)
) TYPE=MyISAM  AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--
--
INSERT INTO `user` (`userid`, `comment_id`, `loginname`, `name`, `surname`, `password`, `pseudo`, `email`) VALUES(1, 0, 'zeinab', 'zeinabbee', 'woozeer', '1234', 'zeinab', 'zwoozeer@hotmail.com');
INSERT INTO `user` (`userid`, `comment_id`, `loginname`, `name`, `surname`, `password`, `pseudo`, `email`) VALUES(2, 0, 'kush', 'kushmila', 'vaitilingon', 'pass', 'kush', 'kush@hotmail.com');



-- --------------------------------------------------------

--
-- Table structure for table `uservotes`
--

DROP TABLE IF EXISTS `uservotes`;
CREATE TABLE IF NOT EXISTS `uservotes` (
  `compid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `url1` tinyint(1) NOT NULL default '1',
  `url2` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`compid`,`userid`)
) TYPE=MyISAM;




SET FOREIGN_KEY_CHECKS=1;
