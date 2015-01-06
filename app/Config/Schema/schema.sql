/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50619
 Source Host           : localhost
 Source Database       : scottdejonge

 Target Server Type    : MySQL
 Target Server Version : 50619
 File Encoding         : utf-8

 Date: 01/06/2015 17:27:15 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin_users`
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `documents`
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `path` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `extension` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `bytes` int(11) DEFAULT NULL,
  `checksum` char(40) CHARACTER SET latin1 DEFAULT NULL,
  `filemtime` bigint(20) DEFAULT NULL,
  `file_exists` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL,
  `extension` varchar(5) DEFAULT NULL,
  `bytes` int(11) unsigned DEFAULT NULL,
  `width` int(11) unsigned DEFAULT NULL,
  `height` int(11) unsigned DEFAULT NULL,
  `crop` varchar(20) DEFAULT NULL,
  `zoom` varchar(2) DEFAULT NULL,
  `bgcolor` varchar(10) DEFAULT NULL,
  `checksum` char(40) DEFAULT NULL,
  `filemtime` bigint(20) unsigned DEFAULT NULL,
  `file_exists` tinyint(1) unsigned DEFAULT '1',
  `origin` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `images_pages`
-- ----------------------------
DROP TABLE IF EXISTS `images_pages`;
CREATE TABLE `images_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` int(10) unsigned NOT NULL,
  `page_id` int(10) unsigned NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `viewable` tinyint(1) NOT NULL DEFAULT '1',
  `visible` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `searchable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `slug` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `content` text,
  `content_formatted` text,
  `template` varchar(255) DEFAULT NULL,
  `lft` int(11) unsigned DEFAULT NULL,
  `rght` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pagepath` (`path`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `redirects`
-- ----------------------------
DROP TABLE IF EXISTS `redirects`;
CREATE TABLE `redirects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pattern` varchar(255) NOT NULL,
  `redirect` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `priority` smallint(6) NOT NULL DEFAULT '10',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `old` (`pattern`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `uploads`
-- ----------------------------
DROP TABLE IF EXISTS `uploads`;
CREATE TABLE `uploads` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `fspath` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `user_agents`
-- ----------------------------
DROP TABLE IF EXISTS `user_agents`;
CREATE TABLE `user_agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text,
  `checksum` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `checksum` (`checksum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

SET FOREIGN_KEY_CHECKS = 1;
