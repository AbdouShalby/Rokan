/*
Navicat MySQL Data Transfer
Source Host     : localhost:3306
Source Database : rokan
Target Host     : localhost:3306
Target Database : rokan
Date: 2022-09-01 11:53:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `Category_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Category_Description` text CHARACTER SET utf8 NOT NULL,
  `Category_Visibility` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Kitchens', 'Description Test', '1');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `Contact_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Contact_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Contact_Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Contact_Message` text CHARACTER SET utf8 NOT NULL,
  `Contact_Date` date NOT NULL,
  PRIMARY KEY (`Contact_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for factors
-- ----------------------------
DROP TABLE IF EXISTS `factors`;
CREATE TABLE `factors` (
  `Factors_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Factor_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Factor_Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Factor_Mobile` int(11) NOT NULL,
  `Factor_Address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Factor_Service` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Factor_Description` text CHARACTER SET utf8 NOT NULL,
  `Factor_Read` tinyint(1) NOT NULL DEFAULT 0,
  `Factor_Done` tinyint(1) NOT NULL DEFAULT 0,
  `Factors_Date` date NOT NULL,
  PRIMARY KEY (`Factors_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of factors
-- ----------------------------

-- ----------------------------
-- Table structure for finishing
-- ----------------------------
DROP TABLE IF EXISTS `finishing`;
CREATE TABLE `finishing` (
  `Finish_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Finish_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Finish_Price` int(11) NOT NULL,
  PRIMARY KEY (`Finish_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of finishing
-- ----------------------------

-- ----------------------------
-- Table structure for finishing_orders
-- ----------------------------
DROP TABLE IF EXISTS `finishing_orders`;
CREATE TABLE `finishing_orders` (
  `Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Order_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Order_Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Order_Mobile` int(11) NOT NULL,
  `Order_Address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Order_Package` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Order_Price` int(11) NOT NULL,
  `Order_Read` tinyint(1) NOT NULL DEFAULT 0,
  `Order_Done` tinyint(1) NOT NULL DEFAULT 0,
  `Order_Date` date NOT NULL,
  PRIMARY KEY (`Order_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of finishing_orders
-- ----------------------------

-- ----------------------------
-- Table structure for social_links
-- ----------------------------
DROP TABLE IF EXISTS `social_links`;
CREATE TABLE `social_links` (
  `Social_ID` int(11) NOT NULL,
  `Social_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Social_Link` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of social_links
-- ----------------------------

-- ----------------------------
-- Table structure for stats
-- ----------------------------
DROP TABLE IF EXISTS `stats`;
CREATE TABLE `stats` (
  `Stats_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Stats_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Stats_Number` smallint(6) NOT NULL,
  PRIMARY KEY (`Stats_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of stats
-- ----------------------------

-- ----------------------------
-- Table structure for team_members
-- ----------------------------
DROP TABLE IF EXISTS `team_members`;
CREATE TABLE `team_members` (
  `Team_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Team_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Team_Description` text CHARACTER SET utf8 NOT NULL,
  `Team_Image` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Team_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of team_members
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `User_Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `User_Password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `User_Is_Admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'AbdouShalby', 'abdoushalby@gmail.com', '6a250e5216a49637de6137a7a7545c21fba0d05f', '1');

-- ----------------------------
-- Table structure for works
-- ----------------------------
DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `Work_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Work_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Work_Image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Work_Category_ID` int(11) NOT NULL,
  `Work_Visibility` tinyint(1) NOT NULL DEFAULT 1,
  `Work_Added_Date` date NOT NULL,
  PRIMARY KEY (`Work_ID`),
  KEY `Category Relation` (`Work_Category_ID`),
  CONSTRAINT `Category Relation` FOREIGN KEY (`Work_Category_ID`) REFERENCES `categories` (`Category_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of works
-- ----------------------------
