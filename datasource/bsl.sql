/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : bsl

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2016-06-16 01:02:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for setclass
-- ----------------------------
DROP TABLE IF EXISTS `setclass`;
CREATE TABLE `setclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) DEFAULT NULL COMMENT '课程名称',
  `tea_name` varchar(20) DEFAULT NULL COMMENT '上课教师名称',
  `classroom` varchar(20) DEFAULT NULL COMMENT '所在教师',
  `class_time` datetime DEFAULT NULL COMMENT '上课时间',
  `start_time` datetime DEFAULT NULL COMMENT '本周开始时间',
  `end_time` datetime DEFAULT NULL COMMENT '本周结束时间',
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `x` char(2) DEFAULT NULL,
  `y` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setclass
-- ----------------------------
INSERT INTO `setclass` VALUES ('1', '数据结构', '彭勃', '实验大楼503', '2016-06-16 10:05:00', '2016-06-13 23:55:57', '2016-06-19 23:56:01', '2016-06-16 00:03:16', '0', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'pengbd3@163.com', 'c4ca4238a0b923820dcc509a6f75849b', '2016-06-13 22:58:56');
