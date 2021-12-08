/*
 Navicat Premium Data Transfer

 Source Server         : Ruangprint
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : amanah

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 08/12/2021 22:04:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_barang
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr` text COLLATE utf8mb4_unicode_ci,
  `kode_cabang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `deletedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tb_barang
-- ----------------------------
BEGIN;
INSERT INTO `tb_barang` VALUES (1, 'test1', 12, '2021-03-09', 'test', 'SWJKT0320211', 'SWJKT0320211.svg', 'JKT', 'SW', '2021-12-08 07:20:18', '2021-12-08 08:06:12', NULL);
INSERT INTO `tb_barang` VALUES (2, 'TEST2', 12, '2021-12-10', 'DS', 'RTJKT1220212', 'RTJKT1220212.svg', 'JKT', 'RT', '2021-12-08 07:52:30', '2021-12-08 07:52:46', '2021-12-08 08:00:32');
COMMIT;

-- ----------------------------
-- Table structure for tb_code_awal
-- ----------------------------
DROP TABLE IF EXISTS `tb_code_awal`;
CREATE TABLE `tb_code_awal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `deletedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tb_code_awal
-- ----------------------------
BEGIN;
INSERT INTO `tb_code_awal` VALUES (3, 'Switch', 'SW', '2021-12-07 21:12:49', '2021-12-07 21:37:14', NULL);
INSERT INTO `tb_code_awal` VALUES (4, 'Server', 'SV', '2021-12-07 21:13:02', NULL, '2021-12-07 22:22:53');
INSERT INTO `tb_code_awal` VALUES (5, 'Router', 'RT', '2021-12-07 21:13:17', NULL, NULL);
INSERT INTO `tb_code_awal` VALUES (6, 'Switch', 'SW', '2021-12-07 21:34:15', NULL, '2021-12-07 21:46:43');
INSERT INTO `tb_code_awal` VALUES (8, 'Switch', 'SW', '2021-12-08 06:45:45', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for tb_code_branch
-- ----------------------------
DROP TABLE IF EXISTS `tb_code_branch`;
CREATE TABLE `tb_code_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `deletedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tb_code_branch
-- ----------------------------
BEGIN;
INSERT INTO `tb_code_branch` VALUES (1, 'Jakarta', 'JKT', '2021-12-07 22:16:56', NULL, NULL);
INSERT INTO `tb_code_branch` VALUES (2, 'Bekasi', 'BKS', '2021-12-07 22:17:18', NULL, NULL);
INSERT INTO `tb_code_branch` VALUES (3, 'Bogor', 'BGR', '2021-12-07 22:17:34', NULL, NULL);
INSERT INTO `tb_code_branch` VALUES (4, 'Bandung', 'BDG', '2021-12-07 22:17:53', '2021-12-07 22:23:23', '2021-12-07 22:29:08');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
